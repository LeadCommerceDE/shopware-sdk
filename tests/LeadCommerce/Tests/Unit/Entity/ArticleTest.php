<?php

namespace LeadCommerce\Tests\Unit;

use LeadCommerce\Shopware\SDK\Entity\Article;
use PHPUnit\Framework\TestCase;

/**
 * Class ArticleTest
 * @package LeadCommerce\Tests\Unit
 */
class ArticleTest extends BaseTest
{
    public function testThatArrayCopyDoesNotReturnArrayElementsWithNullValue()
    {
        $attributes['id'] = 1;
        $attributes['name'] = 'foo';
        $attributes['taxId'] = null;

        $entity = new Article();
        /** @var Article $entity */
        $entity = $this->getMockClient()->getJsonMapper()->map($attributes, $entity);
        $arrayCopy = $entity->getArrayCopy();

        static::assertArrayNotHasKey('taxId', $arrayCopy);
        static::assertArrayHasKey('name', $arrayCopy);
        static::assertArrayHasKey('id', $arrayCopy);
    }
}
