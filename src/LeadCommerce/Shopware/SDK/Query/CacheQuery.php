<?php

namespace LeadCommerce\Shopware\SDK\Query;

use LeadCommerce\Shopware\SDK\Util\Constants;

/**
 * Class CacheQuery
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 */
class CacheQuery extends Base
{
    /**
     * @var array
     */
    protected $methodsAllowed = [
        Constants::METHOD_GET,
        Constants::METHOD_GET_BATCH,
        Constants::METHOD_DELETE,
        Constants::METHOD_DELETE_BATCH,
    ];

    /**
     * @return mixed
     */
    protected function getClass()
    {
        return 'LeadCommerce\\Shopware\\SDK\\Entity\\Cache';
    }

    /**
     * @return string
     */
    protected function getQueryPath()
    {
        return 'caches';
    }
}
