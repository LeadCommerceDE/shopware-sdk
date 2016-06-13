<?php

namespace LeadCommerce\Tests\Unit;

/**
 * Copyright 2016 LeadCommerce
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 */
class ArticleQueryTest extends BaseTest
{
    /**
     * @var \LeadCommerce\Shopware\SDK\Query\ArticleQuery
     */
    private $query;

    /**
     * Gets the query to test.
     * @return \LeadCommerce\Shopware\SDK\Query\ArticleQuery
     */
    public function getQuery()
    {
        if (!$this->query) {
            $this->query = new \LeadCommerce\Shopware\SDK\Query\ArticleQuery($this->getMockClient());
        }
        return $this->query;
    }

    public function testFindAll()
    {
        $entities = $this->getQuery()->findAll();
        $this->assertCount(2, $entities);

        foreach ($entities as $entity) {
            $this->assertInstanceOf(\LeadCommerce\Shopware\SDK\Entity\Article::class, $entity);
        }

        /** @var \LeadCommerce\Shopware\SDK\Entity\Article $article */
        $article = $entities[1];

        $this->assertEquals(2, $article->getId());
        $this->assertEquals('Glastisch rund', $article->getName());
        $this->assertEquals(2, $article->getMainDetailId());
    }


    /**
     * @return \GuzzleHttp\Handler\MockHandler
     */
    protected function getMockHandler()
    {
        return new \GuzzleHttp\Handler\MockHandler([
            new \GuzzleHttp\Psr7\Response(200, [], file_get_contents(__DIR__ . '/files/get_articles.json'))
        ]);
    }
}
