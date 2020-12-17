<?php

namespace LeadCommerce\Tests\Unit;

use Guzzle\Tests\GuzzleTestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use JsonMapper;
use LeadCommerce\Shopware\SDK\ShopwareClient;

/**
 * Copyright 2016 LeadCommerce
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 */
abstract class BaseTest extends GuzzleTestCase
{
    /**
     * @var ShopwareClient
     */
    protected $mockClient = null;

    /**
     * @var MockHandler
     */
    protected $mockHandler;

    /**
     * @return ShopwareClient
     */
    public function getMockClient()
    {
        if (!$this->mockClient) {
            $this->mockClient = new ShopwareClient('', 'test', 'test');
            $mock = $this->mockHandler;
            $handler = HandlerStack::create($mock);
            $client = new Client(['handler' => $handler, 'base_uri' => 'http://shopware-shop.dev/api/']);
            $this->mockClient->setClient($client);
            $jsonMapper = new JsonMapper();
            $jsonMapper->bEnforceMapType = false;
            $jsonMapper->bStrictNullTypes = false;
            $this->mockClient->setJsonMapper($jsonMapper);
        }

        return $this->mockClient;
    }
}
