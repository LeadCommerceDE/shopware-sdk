<?php

namespace LeadCommerce\Shopware\SDK\Query;

/**
 * Class ArticleQuery
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 */
class ArticleQuery extends Base
{
    /**
     * @return mixed
     */
    protected function getClass()
    {
        return 'LeadCommerce\\Shopware\\SDK\\Entity\\Article';
    }

    /**
     * @return string
     */
    protected function getQueryPath()
    {
        return 'articles';
    }
}
