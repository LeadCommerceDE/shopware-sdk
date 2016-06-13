<?php

namespace LeadCommerce\Shopware\SDK;

use GuzzleHttp\Client;
use LeadCommerce\Shopware\SDK\Query\AddressQuery;
use LeadCommerce\Shopware\SDK\Query\ArticleQuery;
use LeadCommerce\Shopware\SDK\Query\CacheQuery;
use LeadCommerce\Shopware\SDK\Query\CategoriesQuery;
use LeadCommerce\Shopware\SDK\Query\CountriesQuery;
use LeadCommerce\Shopware\SDK\Query\CustomerGroupsQuery;
use LeadCommerce\Shopware\SDK\Query\CustomerQuery;
use LeadCommerce\Shopware\SDK\Query\GenerateArticleImagesQuery;
use LeadCommerce\Shopware\SDK\Query\ManufacturersQuery;
use LeadCommerce\Shopware\SDK\Query\MediaQuery;
use LeadCommerce\Shopware\SDK\Query\OrdersQuery;
use LeadCommerce\Shopware\SDK\Query\PropertyGroupsQuery;
use LeadCommerce\Shopware\SDK\Query\ShopsQuery;
use LeadCommerce\Shopware\SDK\Query\TranslationsQuery;
use LeadCommerce\Shopware\SDK\Query\VariantsQuery;
use LeadCommerce\Shopware\SDK\Query\VersionQuery;

/**
 * Class ShopwareClient
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 *
 * @method AddressQuery getAddressQuery()
 * @method ArticleQuery getArticleQuery()
 * @method CacheQuery getCacheQuery()
 * @method CategoriesQuery getCategoriesQuery()
 * @method CountriesQuery getCountriesQuery()
 * @method CustomerGroupsQuery getCustomerGroupsQuery()
 * @method CustomerQuery getCustomerQuery()
 * @method GenerateArticleImagesQuery getGenerateArticleImageQuery()
 * @method MediaQuery getMediaQuery()
 * @method ManufacturersQuery getManufacturersQuery()
 * @method OrdersQuery getOrdersQuery()
 * @method PropertyGroupsQuery getPropertyGroupsQuery()
 * @method ShopsQuery getShopsQuery()
 * @method TranslationsQuery getTranslationsQuery()
 * @method VariantsQuery getVariantsQuery()
 * @method VersionQuery getVersionQuery()
 */
class ShopwareClient
{
    const VERSION = '0.0.1';

    /**
     * @var string|null
     */
    protected $baseUrl;

    /**
     * @var string|null
     */
    protected $username;

    /**
     * @var string|null
     */
    protected $apiKey;

    /**
     * @var Client
     */
    protected $client;

    /**
     * ShopwareClient constructor.
     *
     * @param $baseUrl
     * @param null $username
     * @param null $apiKey
     */
    public function __construct($baseUrl, $username = null, $apiKey = null)
    {
        $this->baseUrl = $baseUrl;
        $this->username = $username;
        $this->apiKey = $apiKey;
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
        ]);
    }

    /**
     * Does a request.
     *
     * @param $uri
     * @param string $method
     * @param null   $body
     * @param array  $headers
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function request($uri, $method = 'GET', $body = null, $headers = [])
    {
        if (empty($headers['Accept'])) {
            $headers['Accept'] = 'application/json';
        }

        if (empty($headers['Content-Type'])) {
            $headers['Content-Type'] = 'application/json';
        }

        return $this->client->request($method, $uri, [
            'form_params' => $body,
            'headers'     => $headers,
            'auth'        => [
                $this->username,
                $this->apiKey,
                'digest',
            ],
        ]);
    }

    /**
     * Magically get the query classes.
     *
     * @param $name
     * @param array $arguments
     *
     * @return bool
     */
    public function __call($name, $arguments = [])
    {
        if (!preg_match('/^get([a-z]+Query)$/i', $name, $matches)) {
            return false;
        }

        $className = __NAMESPACE__ . '\\Query\\' . $matches[1];

        if (!class_exists($className)) {
            return false;
        }

        return new $className($this);
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     *
     * @return ShopwareClient
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }
}
