<?php

namespace LeadCommerce\Shopware\SDK\Query;

use LeadCommerce\Shopware\SDK\Exception\MethodNotAllowedException;
use LeadCommerce\Shopware\SDK\ShopwareClient;
use LeadCommerce\Shopware\SDK\Util\ArrayUtil;
use LeadCommerce\Shopware\SDK\Util\Constants;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Base
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 */
abstract class Base
{
    /**
     * @var ShopwareClient
     */
    protected $client;

    /**
     * @var string
     */
    protected $queryPath;

    /**
     * @var array
     */
    protected $methodsAllowed = [
        Constants::METHOD_CREATE,
        Constants::METHOD_GET,
        Constants::METHOD_GET_BATCH,
        Constants::METHOD_UPDATE,
        Constants::METHOD_UPDATE_BATCH,
        Constants::METHOD_DELETE,
        Constants::METHOD_DELETE_BATCH,
    ];

    /**
     * @var array
     */
    protected $data;

    /**
     * @var int
     */
    protected $total;

    /**
     * Base constructor.
     *
     * @param $client
     */
    public function __construct($client)
    {
        $this->client = $client;
        $this->queryPath = $this->getQueryPath();
    }

    /**
     * Gets the query path to look for entities.
     * E.G: 'variants' or 'articles'
     *
     * @return string
     */
    abstract protected function getQueryPath();

    /**
     * Finds all entities.
     *
     * @return \LeadCommerce\Shopware\SDK\Entity\Base[]
     */
    public function findAll()
    {
        $this->validateMethodAllowed(Constants::METHOD_GET_BATCH);

        return $this->fetch($this->queryPath);
    }

    /**
     * Finds entities by params
     *
     * e.g.:
     *
     * $params = [
     *      'limit' => 10,
     *      'start' => 20,
     *      'sort' => [
     *          [
     *              'property' => 'name',
     *              'direction' => 'ASC'
     *          ]
     *      ],
     *      'filter' => [
     *          [
     *              'property' => 'name',
     *              'expression' => 'LIKE',
     *              'value' => '%foo'
     *          ],
     *          [
     *              'operator'   => 'AND',
     *              'property'   => 'number',
     *              'expression' => '>',
     *              'value'      => '500'
     *          ]
     *      ]
     * ]
     *
     * @param array $params
     *
     * @return \LeadCommerce\Shopware\SDK\Entity\Base[]
     */
    public function findByParams($params)
    {
        $this->validateMethodAllowed(Constants::METHOD_GET_BATCH);

        return $this->fetch($this->queryPath, 'GET', null, [], $params);
    }

    /**
     * Validates if the requested method is allowed.
     *
     * @param $method
     *
     * @throws MethodNotAllowedException
     */
    private function validateMethodAllowed($method)
    {
        if (!in_array($method, $this->methodsAllowed)) {
            throw new MethodNotAllowedException('Method ' . $method . ' is not allowed for ' . get_class($this));
        }
    }

    /**
     * Fetch and build entity.
     *
     * @param $uri
     * @param string $method
     * @param null   $body
     * @param array  $headers
     * @param array  $uriParams
     *
     * @return array|mixed
     */
    protected function fetch($uri, $method = 'GET', $body = null, $headers = [], $uriParams = [])
    {
        if (is_array($uriParams) && count($uriParams) > 0) {
            if (strpos($uri, '?') !== false) {
                parse_str(substr($uri, strpos($uri, '?') + 1), $existingUriParams);
                ArrayUtil::mergeRecursiveWithOverrule($existingUriParams, $uriParams);
                $uri = substr($uri, 0, strpos($uri, '?')) . '?' . http_build_query($existingUriParams);
            } else {
                $uri = $uri . '?' . http_build_query($uriParams);
            }
        }
        $response = $this->client->request($uri, $method, $body, $headers);

        return $this->createEntityFromResponse($response);
    }

    /**
     * Creates an entity
     *
     * @param ResponseInterface $response
     *
     * @return array|\LeadCommerce\Shopware\SDK\Entity\Base
     */
    protected function createEntityFromResponse(ResponseInterface $response)
    {
        $result = [];
        $content = $response->getBody()->getContents();
        $content = json_decode($content);
        $this->data = isset($content->data) ? $content->data : null;
        $this->total = isset($content->total) ? $content->total : null;

        if (is_array($this->data)) {
            $result = array_map(function ($item) {
                if (isset($item->id)) {
                    return $this->createEntity($item);
                }
                if (isset($item->data) && isset($item->data->id)) {
                    return $this->createEntity($item->data);
                }
            }, $this->data);
        }

        if (is_object($this->data)) {
            $result = $this->createEntity($this->data);
        }

        return $result;
    }

    /**
     * Creates an entity based on the getClass method.
     *
     * @param $content
     *
     * @return \LeadCommerce\Shopware\SDK\Entity\Base
     */
    protected function createEntity($content)
    {
        $class = $this->getClass();
        $entity = new $class();

        if ($entity instanceof \LeadCommerce\Shopware\SDK\Entity\Base) {
            $content = json_decode(json_encode($content), true);
            $this->client->getJsonMapper()->map($content, $entity);
        }

        return $entity;
    }

    /**
     * Gets the class for the entities.
     *
     * @return string
     */
    abstract protected function getClass();

    /**
     * Finds an entity by its id.
     *
     * @param mixed $id
     * @param array $params
     *
     * @return \LeadCommerce\Shopware\SDK\Entity\Base
     */
    public function findOne($id, $params = [])
    {
        $this->validateMethodAllowed(Constants::METHOD_GET);

        return $this->fetch($this->queryPath . '/' . $id, 'GET', null, [], $params);
    }

    /**
     * Creates an entity.
     *
     * @param \LeadCommerce\Shopware\SDK\Entity\Base $entity
     * @param array $params
     *
     * @throws MethodNotAllowedException
     *
     * @return \LeadCommerce\Shopware\SDK\Entity\Base
     */
    public function create(\LeadCommerce\Shopware\SDK\Entity\Base $entity, $params = [])
    {
        $this->validateMethodAllowed(Constants::METHOD_CREATE);

        return $this->fetch($this->queryPath, 'POST', $entity->getArrayCopy(), [], $params);
    }

    /**
     * Updates an entity.
     *
     * @param \LeadCommerce\Shopware\SDK\Entity\Base $entity
     * @param array $params
     *
     * @throws MethodNotAllowedException
     *
     * @return array|mixed
     */
    public function update(\LeadCommerce\Shopware\SDK\Entity\Base $entity, $params = [])
    {
        $this->validateMethodAllowed(Constants::METHOD_UPDATE);

        return $this->fetch($this->queryPath . '/' . $entity->getId(), 'PUT', $entity->getArrayCopy(), [], $params);
    }

    /**
     * Updates a batch of this entity.
     *
     * @param \LeadCommerce\Shopware\SDK\Entity\Base[] $entities
     * @param array $params
     *
     * @return \LeadCommerce\Shopware\SDK\Entity\Base[]
     */
    public function updateBatch($entities, $params = [])
    {
        $this->validateMethodAllowed(Constants::METHOD_UPDATE_BATCH);
        $body = [];
        foreach ($entities as $entity) {
            $body[] = $entity->getArrayCopy();
        }
        
        return $this->fetch($this->queryPath . '/', 'PUT', $body, [], $params);
    }

    /**
     * Deletes an entity by its id..
     *
     * @param mixed $id
     * @param array $params
     *
     * @throws MethodNotAllowedException
     *
     * @return array|mixed
     */
    public function delete($id, $params = [])
    {
        $this->validateMethodAllowed(Constants::METHOD_DELETE);

        return $this->fetch($this->queryPath . '/' . $id, 'DELETE');
    }

    /**
     * Deletes a batch of this entity given by ids.
     *
     * @param array $ids
     * @param array $params
     *
     * @throws MethodNotAllowedException
     *
     * @return array|mixed
     */
    public function deleteBatch(array $ids, $params = [])
    {
        $this->validateMethodAllowed(Constants::METHOD_DELETE_BATCH);

        return $this->fetch($this->queryPath . '/', 'DELETE', $ids, [], $params);
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param $uri
     * @param string $method
     * @param null   $body
     * @param array  $headers
     *
     * @return mixed|ResponseInterface
     */
    protected function fetchSimple($uri, $method = 'GET', $body = null, $headers = [])
    {
        return $this->client->request($uri, $method, $body, $headers);
    }

    /**
     * Fetch as json object.
     *
     * @param $uri
     * @param string $method
     * @param null   $body
     * @param array  $headers
     *
     * @return false|\stdClass
     */
    protected function fetchJson($uri, $method = 'GET', $body = null, $headers = [])
    {
        $response = $this->client->request($uri, $method, $body, $headers);
        $response = json_decode($response->getBody()->getContents());

        return $response ? $response : null;
    }
}
