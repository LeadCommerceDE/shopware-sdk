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
 * Class ShippingAttribute
 */
class ShippingAttribute extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $customerShippingId;
    /**
     * @var string
     */
    protected $text1;
    /**
     * @var string
     */
    protected $text2;
    /**
     * @var string
     */
    protected $text3;
    /**
     * @var string
     */
    protected $text4;
    /**
     * @var string
     */
    protected $text5;
    /**
     * @var string
     */
    protected $text6;

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
     * @return ShippingAttribute
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerShippingId()
    {
        return $this->customerShippingId;
    }

    /**
     * @param int $customerShippingId
     *
     * @return ShippingAttribute
     */
    public function setCustomerShippingId($customerShippingId)
    {
        $this->customerShippingId = $customerShippingId;

        return $this;
    }

    /**
     * @return string
     */
    public function getText1()
    {
        return $this->text1;
    }

    /**
     * @param string $text1
     *
     * @return ShippingAttribute
     */
    public function setText1($text1)
    {
        $this->text1 = $text1;

        return $this;
    }

    /**
     * @return string
     */
    public function getText2()
    {
        return $this->text2;
    }

    /**
     * @param string $text2
     *
     * @return ShippingAttribute
     */
    public function setText2($text2)
    {
        $this->text2 = $text2;

        return $this;
    }

    /**
     * @return string
     */
    public function getText3()
    {
        return $this->text3;
    }

    /**
     * @param string $text3
     *
     * @return ShippingAttribute
     */
    public function setText3($text3)
    {
        $this->text3 = $text3;

        return $this;
    }

    /**
     * @return string
     */
    public function getText4()
    {
        return $this->text4;
    }

    /**
     * @param string $text4
     *
     * @return ShippingAttribute
     */
    public function setText4($text4)
    {
        $this->text4 = $text4;

        return $this;
    }

    /**
     * @return string
     */
    public function getText5()
    {
        return $this->text5;
    }

    /**
     * @param string $text5
     *
     * @return ShippingAttribute
     */
    public function setText5($text5)
    {
        $this->text5 = $text5;

        return $this;
    }

    /**
     * @return string
     */
    public function getText6()
    {
        return $this->text6;
    }

    /**
     * @param string $text6
     *
     * @return ShippingAttribute
     */
    public function setText6($text6)
    {
        $this->text6 = $text6;

        return $this;
    }
}
