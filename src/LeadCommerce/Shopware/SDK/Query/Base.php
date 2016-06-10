<?php

namespace LeadCommerce\Shopware\SDK\Query;

use LeadCommerce\Shopware\SDK\ShopwareClient;
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
     * @var null|string
     */
    protected $singleQueryPath = null;

    /**
     * @var string
     */
    protected $queryPath;

    /**
     * Base constructor.
     *
     * @param $client
     */
    public function __construct($client)
    {
        $this->client = $client;
        $this->queryPath = $this->getQueryPath();
        $this->singleQueryPath = $this->singleQueryPath ? $this->singleQueryPath : $this->getQueryPath();
    }

    /**
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
     * @param $content
     *
     * @return mixed
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
     * @return string
     */
    abstract protected function getClass();

    /**
     * @return string
     */
    abstract protected function getQueryPath();

    /**
     * @return array
     */
    public function findAll()
    {
        return $this->fetch($this->queryPath);
    }

    /**
     * @param $id
     *
     * @return array
     */
    public function findOne($id)
    {
        return $this->fetch($this->singleQueryPath . '/' . $id);
    }

    /**
     * @param \LeadCommerce\Shopware\SDK\Entity\Base $entity
     *
     * @return \LeadCommerce\Shopware\SDK\Entity\Base
     */
    public function save(\LeadCommerce\Shopware\SDK\Entity\Base $entity)
    {
        $this->fetch($this->singleQueryPath, 'POST', $entity->getArrayCopy());

        return $entity;
    }
}
