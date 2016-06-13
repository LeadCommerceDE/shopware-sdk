<?php

namespace LeadCommerce\Tests\Unit;

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
        $response = $this->getMockClient()->request('/');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testGetAddressQuery()
    {
        $query = $this->getMockClient()->getAddressQuery();
        $this->assertInstanceOf(\LeadCommerce\Shopware\SDK\Query\AddressQuery::class, $query);
    }

    public function testGetClient()
    {
        $this->assertInstanceOf(\GuzzleHttp\Client::class, $this->getMockClient()->getClient());
    }

    /**
     * @return \GuzzleHttp\Handler\MockHandler
     */
    protected function getMockHandler()
    {
        return new \GuzzleHttp\Handler\MockHandler([
            new \GuzzleHttp\Psr7\Response(200)
        ]);
    }
}
