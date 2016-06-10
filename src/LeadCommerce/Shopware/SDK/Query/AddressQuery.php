<?php

namespace LeadCommerce\Shopware\SDK\Query;

class AddressQuery extends Base
{
    protected $singleQueryPath = 'address';

    /**
     * @return mixed
     */
    protected function getClass()
    {
        return 'LeadCommerce\\Shopware\\SDK\\Entity\\Address';
    }

    /**
     * @return string
     */
    protected function getQueryPath()
    {
        return 'addresses';
    }
}
