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
 * Class PropertyGroupOption
 * @package LeadCommerce\Shopware\SDK\Entity
 */
class PropertyGroupOption extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $filterable;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return PropertyGroupOption
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return PropertyGroupOption
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isFilterable()
    {
        return $this->filterable;
    }

    /**
     * @param boolean $filterable
     * @return PropertyGroupOption
     */
    public function setFilterable($filterable)
    {
        $this->filterable = $filterable;
        return $this;
    }
}
