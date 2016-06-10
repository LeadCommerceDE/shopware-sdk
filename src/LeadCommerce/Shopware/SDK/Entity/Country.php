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
 * Class Country
 */
class Country extends Base
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
     * @var string
     */
    protected $iso;
    /**
     * @var string
     */
    protected $isoName;
    /**
     * @var int
     */
    protected $position;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var bool
     */
    protected $shippingFree;
    /**
     * @var bool
     */
    protected $taxFree;
    /**
     * @var bool
     */
    protected $taxFreeUstId;
    /**
     * @var bool
     */
    protected $taxFreeUstIdChecked;
    /**
     * @var bool
     */
    protected $active;
    /**
     * @var string
     */
    protected $iso3;
    /**
     * @var bool
     */
    protected $displayStateInRegistration;
    /**
     * @var bool
     */
    protected $forceStateInRegistration;
    /**
     * @var int
     */
    protected $areaId;
    /**
     * @var State[]
     */
    protected $states;

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
     * @return Country
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
     * @return Country
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getIso()
    {
        return $this->iso;
    }

    /**
     * @param string $iso
     *
     * @return Country
     */
    public function setIso($iso)
    {
        $this->iso = $iso;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsoName()
    {
        return $this->isoName;
    }

    /**
     * @param string $isoName
     *
     * @return Country
     */
    public function setIsoName($isoName)
    {
        $this->isoName = $isoName;

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
     * @return Country
     */
    public function setPosition($position)
    {
        $this->position = $position;

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
     * @return Country
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return bool
     */
    public function isShippingFree()
    {
        return $this->shippingFree;
    }

    /**
     * @param bool $shippingFree
     *
     * @return Country
     */
    public function setShippingFree($shippingFree)
    {
        $this->shippingFree = $shippingFree;

        return $this;
    }

    /**
     * @return bool
     */
    public function isTaxFree()
    {
        return $this->taxFree;
    }

    /**
     * @param bool $taxFree
     *
     * @return Country
     */
    public function setTaxFree($taxFree)
    {
        $this->taxFree = $taxFree;

        return $this;
    }

    /**
     * @return bool
     */
    public function isTaxFreeUstId()
    {
        return $this->taxFreeUstId;
    }

    /**
     * @param bool $taxFreeUstId
     *
     * @return Country
     */
    public function setTaxFreeUstId($taxFreeUstId)
    {
        $this->taxFreeUstId = $taxFreeUstId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isTaxFreeUstIdChecked()
    {
        return $this->taxFreeUstIdChecked;
    }

    /**
     * @param bool $taxFreeUstIdChecked
     *
     * @return Country
     */
    public function setTaxFreeUstIdChecked($taxFreeUstIdChecked)
    {
        $this->taxFreeUstIdChecked = $taxFreeUstIdChecked;

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
     * @return Country
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return string
     */
    public function getIso3()
    {
        return $this->iso3;
    }

    /**
     * @param string $iso3
     *
     * @return Country
     */
    public function setIso3($iso3)
    {
        $this->iso3 = $iso3;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDisplayStateInRegistration()
    {
        return $this->displayStateInRegistration;
    }

    /**
     * @param bool $displayStateInRegistration
     *
     * @return Country
     */
    public function setDisplayStateInRegistration($displayStateInRegistration)
    {
        $this->displayStateInRegistration = $displayStateInRegistration;

        return $this;
    }

    /**
     * @return bool
     */
    public function isForceStateInRegistration()
    {
        return $this->forceStateInRegistration;
    }

    /**
     * @param bool $forceStateInRegistration
     *
     * @return Country
     */
    public function setForceStateInRegistration($forceStateInRegistration)
    {
        $this->forceStateInRegistration = $forceStateInRegistration;

        return $this;
    }

    /**
     * @return int
     */
    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * @param int $areaId
     *
     * @return Country
     */
    public function setAreaId($areaId)
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * @return State[]
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     * @param State[] $states
     *
     * @return Country
     */
    public function setStates($states)
    {
        $this->states = $states;

        return $this;
    }
}
