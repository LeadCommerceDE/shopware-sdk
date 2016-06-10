<?php

namespace LeadCommerce\Shopware\SDK\Query;

class VersionQuery extends Base
{
    /**
     * @return mixed
     */
    protected function getClass()
    {
        return 'stdClass';
    }

    public function getVersion()
    {
        return $this->fetchJson('/version');
    }
}
