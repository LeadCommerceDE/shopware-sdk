<?php

namespace LeadCommerce\Shopware\SDK\Query;

class OrdersQuery extends Base
{
    /**
     * @return mixed
     */
    protected function getClass()
    {
        return 'LeadCommerce\\Shopware\\SDK\\Entity\\Order';
    }
}
