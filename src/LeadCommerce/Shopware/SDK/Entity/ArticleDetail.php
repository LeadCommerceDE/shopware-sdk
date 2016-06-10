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
 * Class ArticleDetail
 */
class ArticleDetail extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var string
     */
    protected $supplierNumber;
    /**
     * @var string
     */
    protected $additionalText;
    /**
     * @var string
     */
    protected $weight;
    /**
     * @var string
     */
    protected $width;
    /**
     * @var string
     */
    protected $len;
    /**
     * @var string
     */
    protected $height;
    /**
     * @var string
     */
    protected $ean;
    /**
     * @var string
     */
    protected $purchaseUnit;
    /**
     * @var string
     */
    protected $descriptionLong;
    /**
     * @var string
     */
    protected $referenceUnit;
    /**
     * @var string
     */
    protected $packUnit;
    /**
     * @var string
     */
    protected $shippingTime;
    /**
     * @var Price[]
     */
    protected $prices;
    /**
     * @var ConfiguratorOption[]
     */
    protected $configuratorOptions;
    /**
     * @var ArticleAttribute
     */
    protected $attribute;
    /**
     * @var int
     */
    protected $articleId;
    /**
     * @var int
     */
    protected $unitId;
    /**
     * @var int
     */
    protected $kind;
    /**
     * @var int
     */
    protected $inStock;
    /**
     * @var int
     */
    protected $position;
    /**
     * @var int
     */
    protected $minPurchase;
    /**
     * @var int
     */
    protected $purchaseSteps;
    /**
     * @var int
     */
    protected $maxPurchase;
    /**
     * @var string
     */
    protected $releaseDate;
    /**
     * @var bool
     */
    protected $active;
    /**
     * @var bool
     */
    protected $shippingFree;

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
     * @return ArticleDetail
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     *
     * @return ArticleDetail
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getSupplierNumber()
    {
        return $this->supplierNumber;
    }

    /**
     * @param string $supplierNumber
     *
     * @return ArticleDetail
     */
    public function setSupplierNumber($supplierNumber)
    {
        $this->supplierNumber = $supplierNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalText()
    {
        return $this->additionalText;
    }

    /**
     * @param string $additionalText
     *
     * @return ArticleDetail
     */
    public function setAdditionalText($additionalText)
    {
        $this->additionalText = $additionalText;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     *
     * @return ArticleDetail
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param string $width
     *
     * @return ArticleDetail
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return string
     */
    public function getLen()
    {
        return $this->len;
    }

    /**
     * @param string $len
     *
     * @return ArticleDetail
     */
    public function setLen($len)
    {
        $this->len = $len;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string $height
     *
     * @return ArticleDetail
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     *
     * @return ArticleDetail
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseUnit()
    {
        return $this->purchaseUnit;
    }

    /**
     * @param string $purchaseUnit
     *
     * @return ArticleDetail
     */
    public function setPurchaseUnit($purchaseUnit)
    {
        $this->purchaseUnit = $purchaseUnit;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionLong()
    {
        return $this->descriptionLong;
    }

    /**
     * @param string $descriptionLong
     *
     * @return ArticleDetail
     */
    public function setDescriptionLong($descriptionLong)
    {
        $this->descriptionLong = $descriptionLong;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceUnit()
    {
        return $this->referenceUnit;
    }

    /**
     * @param string $referenceUnit
     *
     * @return ArticleDetail
     */
    public function setReferenceUnit($referenceUnit)
    {
        $this->referenceUnit = $referenceUnit;

        return $this;
    }

    /**
     * @return string
     */
    public function getPackUnit()
    {
        return $this->packUnit;
    }

    /**
     * @param string $packUnit
     *
     * @return ArticleDetail
     */
    public function setPackUnit($packUnit)
    {
        $this->packUnit = $packUnit;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingTime()
    {
        return $this->shippingTime;
    }

    /**
     * @param string $shippingTime
     *
     * @return ArticleDetail
     */
    public function setShippingTime($shippingTime)
    {
        $this->shippingTime = $shippingTime;

        return $this;
    }

    /**
     * @return Price[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @param Price[] $prices
     *
     * @return ArticleDetail
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * @return ConfiguratorOption[]
     */
    public function getConfiguratorOptions()
    {
        return $this->configuratorOptions;
    }

    /**
     * @param ConfiguratorOption[] $configuratorOptions
     *
     * @return ArticleDetail
     */
    public function setConfiguratorOptions($configuratorOptions)
    {
        $this->configuratorOptions = $configuratorOptions;

        return $this;
    }

    /**
     * @return ArticleAttribute
     */
    public function getAttributes()
    {
        return $this->attribute;
    }

    /**
     * @param ArticleAttribute $attribute
     *
     * @return ArticleDetail
     */
    public function setAttributes($attribute)
    {
        $this->attribute = $attribute;

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
     * @return ArticleDetail
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @return int
     */
    public function getUnitId()
    {
        return $this->unitId;
    }

    /**
     * @param int $unitId
     *
     * @return ArticleDetail
     */
    public function setUnitId($unitId)
    {
        $this->unitId = $unitId;

        return $this;
    }

    /**
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param int $kind
     *
     * @return ArticleDetail
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * @return int
     */
    public function getInStock()
    {
        return $this->inStock;
    }

    /**
     * @param int $inStock
     *
     * @return ArticleDetail
     */
    public function setInStock($inStock)
    {
        $this->inStock = $inStock;

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
     * @return ArticleDetail
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinPurchase()
    {
        return $this->minPurchase;
    }

    /**
     * @param int $minPurchase
     *
     * @return ArticleDetail
     */
    public function setMinPurchase($minPurchase)
    {
        $this->minPurchase = $minPurchase;

        return $this;
    }

    /**
     * @return int
     */
    public function getPurchaseSteps()
    {
        return $this->purchaseSteps;
    }

    /**
     * @param int $purchaseSteps
     *
     * @return ArticleDetail
     */
    public function setPurchaseSteps($purchaseSteps)
    {
        $this->purchaseSteps = $purchaseSteps;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxPurchase()
    {
        return $this->maxPurchase;
    }

    /**
     * @param int $maxPurchase
     *
     * @return ArticleDetail
     */
    public function setMaxPurchase($maxPurchase)
    {
        $this->maxPurchase = $maxPurchase;

        return $this;
    }

    /**
     * @return string
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param string $releaseDate
     *
     * @return ArticleDetail
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

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
     * @return ArticleDetail
     */
    public function setActive($active)
    {
        $this->active = $active;

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
     * @return ArticleDetail
     */
    public function setShippingFree($shippingFree)
    {
        $this->shippingFree = $shippingFree;

        return $this;
    }
}
