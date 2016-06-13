<?php

namespace LeadCommerce\Shopware\SDK\Query;


class ShopsQuery extends Base
{

    protected $methodsAllowed = [
        
    ];

    /**
     * @return mixed
     */
    protected function getClass()
    {
        return 'LeadCommerce\\Shopware\\SDK\\Entity\\Shop';
    }

    /**
     * @return string
     */
    protected function getQueryPath()
    {
        return 'shops';
    }
}