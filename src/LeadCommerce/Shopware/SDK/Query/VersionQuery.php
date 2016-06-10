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

    /**
     * @return string
     */
    protected function getQueryPath()
    {
        return 'version';
    }
    
    public function getVersion()
    {
        return $this->fetchJson('/version');
    }

}