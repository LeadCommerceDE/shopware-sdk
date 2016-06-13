<?php

namespace LeadCommerce\Tests\Unit;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use LeadCommerce\Shopware\SDK\Query\AddressQuery;

/**
 * Copyright 2016 LeadCommerce
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 */
class ShopwareClientTest extends BaseTest
{
    public function testRequest()
    {
        $this->mockHandler = new MockHandler([
            new Response(200),
        ]);
        $response = $this->getMockClient()->request('/');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testGetAddressQuery()
    {
        $query = $this->getMockClient()->getAddressQuery();
        $this->assertInstanceOf(AddressQuery::class, $query);
    }

    public function testGetClient()
    {
        $this->assertInstanceOf(Client::class, $this->getMockClient()->getClient());
    }
}
