<?php

namespace LeadCommerce\Shopware\SDK\Query;

use LeadCommerce\Shopware\SDK\Exception\MethodNotAllowedException;
use LeadCommerce\Shopware\SDK\ShopwareClient;
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
     * Fetch and build entity.
     * @param $uri
     * @param string $method
     * @param null   $body
     * @param array  $headers
     *
     * @return array|mixed
     */
    protected function fetch($uri, $method = 'GET', $body = null, $headers = [])
    {
        $response = $this->client->request($uri, $method, $body, $headers);

        return $this->createEntityFromResponse($response);
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

    /**
     * Creates an entity 
     * @param ResponseInterface $response
     *
     * @return array|mixed
     */
    protected function createEntityFromResponse(ResponseInterface $response)
    {
        $content = $response->getBody()->getContents();
        $content = json_decode($content);
        $content = $content->data;

        if (is_array($content)) {
            return array_map(function ($item) {
                return $this->createEntity($item);
            }, $content);
        } else {
            return $this->createEntity($content);
        }
    }

    /**
     * Creates an entity based on the getClass method.
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
            $entity->setEntityAttributes($content);
        }

        return $entity;
    }

    /**
     * Gets the class for the entities.
     * @return string
     */
    abstract protected function getClass();

    /**
     * Gets the query path to look for entities.
     * E.G: 'variants' or 'articles'
     * @return string
     */
    abstract protected function getQueryPath();

    /**
     * Finds all entities.
     * @return array
     */
    public function findAll()
    {
        $this->validateMethodAllowed(Constants::METHOD_GET_BATCH);
        return $this->fetch($this->queryPath);
    }

    /**
     * Finds an entity by its id.
     * @param $id
     * @return array
     */
    public function findOne($id)
    {
        $this->validateMethodAllowed(Constants::METHOD_GET);
        return $this->fetch($this->queryPath . '/' . $id);
    }

    /**
     * Creates an entity.
     * @param array $attributes
     * @return array|mixed
     */
    public function create(array $attributes)
    {
        $this->validateMethodAllowed(Constants::METHOD_CREATE);
        $entity = $this->createEntity($attributes);
        return $this->fetch($this->queryPath, 'POST', $entity->getArrayCopy());
    }

    /**
     * Updates an entity.
     * @param \LeadCommerce\Shopware\SDK\Entity\Base $entity
     * @return array|mixed
     * @throws MethodNotAllowedException
     */
    public function update(\LeadCommerce\Shopware\SDK\Entity\Base $entity)
    {
        $this->validateMethodAllowed(Constants::METHOD_UPDATE);
        return $this->fetch($this->queryPath . '/' . $entity->getId(), 'PUT', $entity->getArrayCopy());
    }

    /**
     * Updates a batch of this entity.
     * @param \LeadCommerce\Shopware\SDK\Entity\Base[] $entities
     * @return \LeadCommerce\Shopware\SDK\Entity\Base[]
     */
    public function updateBatch($entities)
    {
        $this->validateMethodAllowed(Constants::METHOD_UPDATE_BATCH);
        $body = [];
        foreach ($entities as $entity) {
            $body[] = $entity->getArrayCopy();
        }
        return $this->fetch($this->queryPath . '/', 'PUT', $body);
    }

    /**
     * Deletes an entity by its id..
     * @param $id
     * @return array|mixed
     * @throws MethodNotAllowedException
     */
    public function delete($id)
    {
        $this->validateMethodAllowed(Constants::METHOD_DELETE);
        return $this->fetch($this->queryPath . '/' . $id, 'DELETE');
    }

    /**
     * Deletes a batch of this entity given by ids.
     * @param array $ids
     * @return array|mixed
     * @throws MethodNotAllowedException
     */
    public function deleteBatch(array $ids)
    {
        $this->validateMethodAllowed(Constants::METHOD_DELETE_BATCH);
        return $this->fetch($this->queryPath . '/', 'DELETE', $ids);
    }

    /**
     * Validates if the requested method is allowed.
     * @param $method
     * @throws MethodNotAllowedException
     */
    private function validateMethodAllowed($method)
    {
        if (!in_array($method, $this->methodsAllowed)) {
            throw new MethodNotAllowedException('Method ' . $method . ' is not allowed for ' . get_class($this));
        }
    }
}
