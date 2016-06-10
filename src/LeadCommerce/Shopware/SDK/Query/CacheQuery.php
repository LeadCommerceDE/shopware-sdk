<?php

namespace LeadCommerce\Shopware\SDK\Query;


class CacheQuery extends Base
{

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