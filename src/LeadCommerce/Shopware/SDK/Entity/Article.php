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
 * Class Article
 */
class Article extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $mainDetailId;
    /**
     * @var int
     */
    protected $supplierId;
    /**
     * @var int
     */
    protected $taxId;
    /**
     * @var int
     */
    protected $priceGroupId;
    /**
     * @var int
     */
    protected $filterGroupId;
    /**
     * @var int
     */
    protected $configuratorSetId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $descriptionLong;
    /**
     * @var string
     */
    protected $added;
    /**
     * @var bool
     */
    protected $active;
    /**
     * @var int
     */
    protected $pseudoSales;
    /**
     * @var bool
     */
    protected $highlight;
    /**
     * @var string
     */
    protected $keywords;
    /**
     * @var string
     */
    protected $metaTitle;
    /**
     * @var string
     */
    protected $changed;
    /**
     * @var bool
     */
    protected $priceGroupActive;
    /**
     * @var bool
     */
    protected $lastStock;
    /**
     * @var bool
     */
    protected $crossBundleLook;
    /**
     * @var bool
     */
    protected $notification;
    /**
     * @var string
     */
    protected $template;
    /**
     * @var int
     */
    protected $mode;
    /**
     * @var string
     */
    protected $availableFrom;
    /**
     * @var string
     */
    protected $availableTo;
    /**
     * @var ArticleAttribute
     */
    protected $attribute;
    /**
     * @var Category[]
     */
    protected $categories;

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
     * @return Article
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getMainDetailId()
    {
        return $this->mainDetailId;
    }

    /**
     * @param int $mainDetailId
     *
     * @return Article
     */
    public function setMainDetailId($mainDetailId)
    {
        $this->mainDetailId = $mainDetailId;

        return $this;
    }

    /**
     * @return int
     */
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * @param int $supplierId
     *
     * @return Article
     */
    public function setSupplierId($supplierId)
    {
        $this->supplierId = $supplierId;

        return $this;
    }

    /**
     * @return int
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * @param int $taxId
     *
     * @return Article
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * @return int
     */
    public function getPriceGroupId()
    {
        return $this->priceGroupId;
    }

    /**
     * @param int $priceGroupId
     *
     * @return Article
     */
    public function setPriceGroupId($priceGroupId)
    {
        $this->priceGroupId = $priceGroupId;

        return $this;
    }

    /**
     * @return int
     */
    public function getFilterGroupId()
    {
        return $this->filterGroupId;
    }

    /**
     * @param int $filterGroupId
     *
     * @return Article
     */
    public function setFilterGroupId($filterGroupId)
    {
        $this->filterGroupId = $filterGroupId;

        return $this;
    }

    /**
     * @return int
     */
    public function getConfiguratorSetId()
    {
        return $this->configuratorSetId;
    }

    /**
     * @param int $configuratorSetId
     *
     * @return Article
     */
    public function setConfiguratorSetId($configuratorSetId)
    {
        $this->configuratorSetId = $configuratorSetId;

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
     * @return Article
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
     * @return Article
     */
    public function setDescriptionLong($descriptionLong)
    {
        $this->descriptionLong = $descriptionLong;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * @param string $added
     *
     * @return Article
     */
    public function setAdded($added)
    {
        $this->added = $added;

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
     * @return Article
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return int
     */
    public function getPseudoSales()
    {
        return $this->pseudoSales;
    }

    /**
     * @param int $pseudoSales
     *
     * @return Article
     */
    public function setPseudoSales($pseudoSales)
    {
        $this->pseudoSales = $pseudoSales;

        return $this;
    }

    /**
     * @return bool
     */
    public function isHighlight()
    {
        return $this->highlight;
    }

    /**
     * @param bool $highlight
     *
     * @return Article
     */
    public function setHighlight($highlight)
    {
        $this->highlight = $highlight;

        return $this;
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param string $keywords
     *
     * @return Article
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * @param string $metaTitle
     *
     * @return Article
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * @param string $changed
     *
     * @return Article
     */
    public function setChanged($changed)
    {
        $this->changed = $changed;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPriceGroupActive()
    {
        return $this->priceGroupActive;
    }

    /**
     * @param bool $priceGroupActive
     *
     * @return Article
     */
    public function setPriceGroupActive($priceGroupActive)
    {
        $this->priceGroupActive = $priceGroupActive;

        return $this;
    }

    /**
     * @return bool
     */
    public function isLastStock()
    {
        return $this->lastStock;
    }

    /**
     * @param bool $lastStock
     *
     * @return Article
     */
    public function setLastStock($lastStock)
    {
        $this->lastStock = $lastStock;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCrossBundleLook()
    {
        return $this->crossBundleLook;
    }

    /**
     * @param bool $crossBundleLook
     *
     * @return Article
     */
    public function setCrossBundleLook($crossBundleLook)
    {
        $this->crossBundleLook = $crossBundleLook;

        return $this;
    }

    /**
     * @return bool
     */
    public function isNotification()
    {
        return $this->notification;
    }

    /**
     * @param bool $notification
     *
     * @return Article
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param string $template
     *
     * @return Article
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param int $mode
     *
     * @return Article
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * @return string
     */
    public function getAvailableFrom()
    {
        return $this->availableFrom;
    }

    /**
     * @param string $availableFrom
     *
     * @return Article
     */
    public function setAvailableFrom($availableFrom)
    {
        $this->availableFrom = $availableFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getAvailableTo()
    {
        return $this->availableTo;
    }

    /**
     * @param string $availableTo
     *
     * @return Article
     */
    public function setAvailableTo($availableTo)
    {
        $this->availableTo = $availableTo;

        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attribute;
    }

    /**
     * @param ArticleAttribute $attributes
     *
     * @return Article
     */
    public function setAttributes($attributes)
    {
        $this->attribute = $attributes;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param Category[] $categories
     *
     * @return Article
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }
}
