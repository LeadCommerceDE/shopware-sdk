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
 * Class PropertyGroupAttribute
 */
class PropertyGroupAttribute extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $propertyGroupId;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return PropertyGroupAttribute
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getPropertyGroupId()
    {
        return $this->propertyGroupId;
    }

    /**
     * @param int $propertyGroupId
     *
     * @return PropertyGroupAttribute
     */
    public function setPropertyGroupId($propertyGroupId)
    {
        $this->propertyGroupId = $propertyGroupId;

        return $this;
    }
}
