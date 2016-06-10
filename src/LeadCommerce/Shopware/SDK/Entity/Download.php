<?php
/**
 * LeadCommerce\Shopware\SDK\Entity
 *
 * Copyright 2016 LeadCommerce
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 */

namespace LeadCommerce\Shopware\SDK\Entity;


/**
 * Class Download
 * @package LeadCommerce\Shopware\SDK\Entity
 */
class Download extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $articleId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $file;
    /**
     * @var int
     */
    protected $size;
}
