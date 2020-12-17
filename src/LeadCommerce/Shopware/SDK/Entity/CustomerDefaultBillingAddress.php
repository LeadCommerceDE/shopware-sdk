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
 * Class CustomerDefaultBillingAddress
 *
 * @package LeadCommerce\Shopware\SDK\Entity
 */
class CustomerDefaultBillingAddress extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $street;
    /**
     * @var string
     */
    protected $zipcode;
    /**
     * @var string
     */
    protected $city;

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
     * @return CustomerDefaultBillingAddress
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param $street
     * @return CustomerDefaultBillingAddress
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param $zipcode
     * @return CustomerDefaultBillingAddress
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param $city
     * @return CustomerDefaultBillingAddress
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }
}
