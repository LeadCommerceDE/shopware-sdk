<?php
/**
 * LeadCommerce\Shopware\SDK\Query
 *
 * Copyright 2016 LeadCommerce
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 */
namespace LeadCommerce\Shopware\SDK\Query;

use LeadCommerce\Shopware\SDK\Util\Constants;

class GenerateArticleImagesQuery extends Base
{
    /**
     * @var array
     */
    protected $methodsAllowed = [
        Constants::METHOD_UPDATE,
    ];

    /**
     * Gets the class for the entities.
     *
     * @return string
     */
    protected function getClass()
    {
        return 'stdClass';
    }

    /**
     * Gets the query path to look for entities.
     * E.G: 'variants' or 'articles'
     *
     * @return string
     */
    protected function getQueryPath()
    {
        return 'generateArticleImages';
    }
}
