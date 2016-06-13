<?php

namespace LeadCommerce\Tests\Unit;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use LeadCommerce\Shopware\SDK\Entity\Article;
use LeadCommerce\Shopware\SDK\Query\ArticleQuery;

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

    public function testFindAll()
    {
        $this->mockHandler = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/files/get_articles.json')),
        ]);

        $entities = $this->getQuery()->findAll();
        $this->assertCount(2, $entities);

        foreach ($entities as $entity) {
            $this->assertInstanceOf(Article::class, $entity);
        }

        /** @var \LeadCommerce\Shopware\SDK\Entity\Article $article */
        $article = $entities[1];

        $this->assertEquals(2, $article->getId());
        $this->assertEquals('Glastisch rund', $article->getName());
        $this->assertEquals(2, $article->getMainDetailId());
    }

    /**
     * Gets the query to test.
     * @return \LeadCommerce\Shopware\SDK\Query\ArticleQuery
     */
    public function getQuery()
    {
        if (!$this->query) {
            $this->query = new ArticleQuery($this->getMockClient());
        }
        return $this->query;
    }

    public function testFindOne()
    {
        $this->mockHandler = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/files/get_article.json')),
        ]);
        
        /** @var Article $entity */
        $entity = $this->getQuery()->findOne(1);
        $this->assertInstanceOf(Article::class, $entity);

        $this->assertEquals(1, $entity->getId());
        $this->assertEquals('Glastisch quadratisch', $entity->getName());
        $this->assertEquals(1, $entity->getMainDetailId());
    }

    public function testCreate()
    {
        $this->mockHandler = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/files/get_article.json')),
        ]);

        $attributes = json_decode(file_get_contents(__DIR__ . '/files/create_article.json'), true);

        $entity = new Article();
        $entity->setEntityAttributes($attributes['data']);

        $response = $this->getQuery()->create($entity);

        $entity->setId($response->getId());

        $this->assertEquals($entity->getArrayCopy(), $response->getArrayCopy());
    }

    public function testUpdate()
    {
        $this->mockHandler = new MockHandler([
            new Response(200, [], file_get_contents(__DIR__ . '/files/updated_article.json')),
        ]);

        $attributes = json_decode(file_get_contents(__DIR__ . '/files/update_article.json'), true);

        $entity = new Article();
        $entity->setEntityAttributes($attributes);
        /** @var Article $updatedEntity */
        $updatedEntity = $this->getQuery()->update($entity);
        $this->assertInstanceOf(Article::class, $updatedEntity);
        $this->assertEquals($entity->isActive(), $updatedEntity->isActive());
        $this->assertEquals($entity->getName(), $updatedEntity->getName());
    }


}
