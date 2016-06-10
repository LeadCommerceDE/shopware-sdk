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
 * Class Price
 */
class Price extends Base
{
    /**
     * @var string
     */
    protected $customerGroupKey;
    /**
     * @var CustomerGroup
     */
    protected $customerGroup;
    /**
     * @var int
     */
    protected $articleDetailsId;
    /**
     * @var int
     */
    protected $articleId;
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $from;
    /**
     * @var string
     */
    protected $to;
    /**
     * @var float
     */
    protected $price;
    /**
     * @var float
     */
    protected $pseudoPrice;
    /**
     * @var float
     */
    protected $basePrice;
    /**
     * @var float
     */
    protected $percent;

    /**
     * @return string
     */
    public function getCustomerGroupKey()
    {
        return $this->customerGroupKey;
    }

    /**
     * @param string $customerGroupKey
     *
     * @return Price
     */
    public function setCustomerGroupKey($customerGroupKey)
    {
        $this->customerGroupKey = $customerGroupKey;

        return $this;
    }

    /**
     * @return CustomerGroup
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup;
    }

    /**
     * @param CustomerGroup $customerGroup
     *
     * @return Price
     */
    public function setCustomerGroup($customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return int
     */
    public function getArticleDetailsId()
    {
        return $this->articleDetailsId;
    }

    /**
     * @param int $articleDetailsId
     *
     * @return Price
     */
    public function setArticleDetailsId($articleDetailsId)
    {
        $this->articleDetailsId = $articleDetailsId;

        return $this;
    }

    /**
     * @return int
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * @param int $articleId
     *
     * @return Price
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;

        return $this;
    }

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
     * @return Price
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param int $from
     *
     * @return Price
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param string $to
     *
     * @return Price
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return Price
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return float
     */
    public function getPseudoPrice()
    {
        return $this->pseudoPrice;
    }

    /**
     * @param float $pseudoPrice
     *
     * @return Price
     */
    public function setPseudoPrice($pseudoPrice)
    {
        $this->pseudoPrice = $pseudoPrice;

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
     *
     * @return Price
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
     *
     * @return Price
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }
}
