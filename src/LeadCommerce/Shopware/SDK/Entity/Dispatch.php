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
 * Class Dispatch
 */
class Dispatch extends Base
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
     * @var int
     */
    protected $type;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $comment;
    /**
     * @var bool
     */
    protected $active;
    /**
     * @var int
     */
    protected $position;
    /**
     * @var int
     */
    protected $calculation;
    /**
     * @var int
     */
    protected $surchargeCalculation;
    /**
     * @var int
     */
    protected $taxCalculation;
    /**
     * @var float
     */
    protected $shippingFree;
    /**
     * @var int
     */
    protected $multiShopId;
    /**
     * @var int
     */
    protected $customerGroupId;
    /**
     * @var int
     */
    protected $bindShippingFree;
    /**
     * @var int
     */
    protected $bindTimeFrom;
    /**
     * @var int
     */
    protected $bindTimeTo;
    /**
     * @var int
     */
    protected $bindInStock;
    /**
     * @var int
     */
    protected $bindWeekdayFrom;
    /**
     * @var int
     */
    protected $bindPriceTo;
    /**
     * @var string
     */
    protected $bindSql;
    /**
     * @var string
     */
    protected $statusLink;
    /**
     * @var string
     */
    protected $calculationSql;

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
     * @return Dispatch
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
     *
     * @return Dispatch
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     *
     * @return Dispatch
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Dispatch
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     *
     * @return Dispatch
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return Dispatch
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return Dispatch
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return int
     */
    public function getCalculation()
    {
        return $this->calculation;
    }

    /**
     * @param int $calculation
     *
     * @return Dispatch
     */
    public function setCalculation($calculation)
    {
        $this->calculation = $calculation;

        return $this;
    }

    /**
     * @return int
     */
    public function getSurchargeCalculation()
    {
        return $this->surchargeCalculation;
    }

    /**
     * @param int $surchargeCalculation
     *
     * @return Dispatch
     */
    public function setSurchargeCalculation($surchargeCalculation)
    {
        $this->surchargeCalculation = $surchargeCalculation;

        return $this;
    }

    /**
     * @return int
     */
    public function getTaxCalculation()
    {
        return $this->taxCalculation;
    }

    /**
     * @param int $taxCalculation
     *
     * @return Dispatch
     */
    public function setTaxCalculation($taxCalculation)
    {
        $this->taxCalculation = $taxCalculation;

        return $this;
    }

    /**
     * @return float
     */
    public function getShippingFree()
    {
        return $this->shippingFree;
    }

    /**
     * @param float $shippingFree
     *
     * @return Dispatch
     */
    public function setShippingFree($shippingFree)
    {
        $this->shippingFree = $shippingFree;

        return $this;
    }

    /**
     * @return int
     */
    public function getMultiShopId()
    {
        return $this->multiShopId;
    }

    /**
     * @param int $multiShopId
     *
     * @return Dispatch
     */
    public function setMultiShopId($multiShopId)
    {
        $this->multiShopId = $multiShopId;

        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }

    /**
     * @param int $customerGroupId
     *
     * @return Dispatch
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
    }

    /**
     * @return int
     */
    public function getBindShippingFree()
    {
        return $this->bindShippingFree;
    }

    /**
     * @param int $bindShippingFree
     *
     * @return Dispatch
     */
    public function setBindShippingFree($bindShippingFree)
    {
        $this->bindShippingFree = $bindShippingFree;

        return $this;
    }

    /**
     * @return int
     */
    public function getBindTimeFrom()
    {
        return $this->bindTimeFrom;
    }

    /**
     * @param int $bindTimeFrom
     *
     * @return Dispatch
     */
    public function setBindTimeFrom($bindTimeFrom)
    {
        $this->bindTimeFrom = $bindTimeFrom;

        return $this;
    }
}
