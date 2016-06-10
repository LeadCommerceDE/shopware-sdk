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
 * Class Currency
 * @package LeadCommerce\Shopware\SDK\Entity
 */
class Currency extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $currency;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $default;
    /**
     * @var double
     */
    protected $factor;
    /**
     * @var string
     */
    protected $symbol;
    /**
     * @var int
     */
    protected $symbolPosition;
    /**
     * @var int
     */
    protected $position;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Currency
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return Currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
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
     * @return Currency
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isDefault()
    {
        return $this->default;
    }

    /**
     * @param boolean $default
     * @return Currency
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * @return float
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * @param float $factor
     * @return Currency
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return Currency
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return int
     */
    public function getSymbolPosition()
    {
        return $this->symbolPosition;
    }

    /**
     * @param int $symbolPosition
     * @return Currency
     */
    public function setSymbolPosition($symbolPosition)
    {
        $this->symbolPosition = $symbolPosition;
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
     * @return Currency
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }
}
