<?php

namespace LeadCommerce\Shopware\SDK\Query;


use LeadCommerce\Shopware\SDK\Util\Constants;

/**
 * Class VariantsQuery
 * @package LeadCommerce\Shopware\SDK\Query
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 */
class VariantsQuery extends Base
{

    /**
     * @var array
     */
    protected $methodsAllowed = [
        Constants::METHOD_CREATE,
        Constants::METHOD_GET,
        Constants::METHOD_UPDATE,
        Constants::METHOD_DELETE,
    ];

    /**
     * @return mixed
     */
    protected function getClass()
    {
        return 'LeadCommerce\\Shopware\\SDK\\Entity\\ArticleDetail';
    }

    /**
     * @return string
     */
    protected function getQueryPath()
    {
        return 'variants';
    }
}