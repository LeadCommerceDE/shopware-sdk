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
 * Class CustomerGroup
 * @package LeadCommerce\Shopware\SDK\Entity
 */
class CustomerGroup extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $tax;
    /**
     * @var bool
     */
    protected $taxInput;
    /**
     * @var bool
     */
    protected $mode;
    /**
     * @var double
     */
    protected $discount;
    /**
     * @var double
     */
    protected $minimumOrder;
    /**
     * @var double
     */
    protected $minimumOrderSurcharge;
    /**
     * @var double
     */
    protected $basePrice;
    /**
     * @var double
     */
    protected $percent;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return CustomerGroup
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return CustomerGroup
     */
    public function setKey($key)
    {
        $this->key = $key;
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
     * @return CustomerGroup
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isTax()
    {
        return $this->tax;
    }

    /**
     * @param boolean $tax
     * @return CustomerGroup
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isTaxInput()
    {
        return $this->taxInput;
    }

    /**
     * @param boolean $taxInput
     * @return CustomerGroup
     */
    public function setTaxInput($taxInput)
    {
        $this->taxInput = $taxInput;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isMode()
    {
        return $this->mode;
    }

    /**
     * @param boolean $mode
     * @return CustomerGroup
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     * @return CustomerGroup
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinimumOrder()
    {
        return $this->minimumOrder;
    }

    /**
     * @param float $minimumOrder
     * @return CustomerGroup
     */
    public function setMinimumOrder($minimumOrder)
    {
        $this->minimumOrder = $minimumOrder;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinimumOrderSurcharge()
    {
        return $this->minimumOrderSurcharge;
    }

    /**
     * @param float $minimumOrderSurcharge
     * @return CustomerGroup
     */
    public function setMinimumOrderSurcharge($minimumOrderSurcharge)
    {
        $this->minimumOrderSurcharge = $minimumOrderSurcharge;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * @param float $basePrice
     * @return CustomerGroup
     */
    public function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @param float $percent
     * @return CustomerGroup
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }
}
