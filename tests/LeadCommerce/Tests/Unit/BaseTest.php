<?php

namespace LeadCommerce\Tests\Unit;

use PHPUnit_Framework_TestCase;

/**
 * Copyright 2016 LeadCommerce
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 */
abstract class BaseTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \LeadCommerce\Shopware\SDK\ShopwareClient
     */
    protected $mockClient = null;

    /**
     * @return \GuzzleHttp\Handler\MockHandler
     */
    protected abstract function getMockHandler();

    /**
     * @return \LeadCommerce\Shopware\SDK\ShopwareClient
     */
    public function getMockClient()
    {
        if (!$this->mockClient) {
            $this->mockClient = new \LeadCommerce\Shopware\SDK\ShopwareClient('', 'test', 'test');
            $mock = $this->getMockHandler();
            $handler = \GuzzleHttp\HandlerStack::create($mock);
            $client = new \GuzzleHttp\Client(['handler' => $handler, 'base_uri' => 'http://shopware-shop.dev/api/']);
            $this->mockClient->setClient($client);
        }

        return $this->mockClient;
    }
}