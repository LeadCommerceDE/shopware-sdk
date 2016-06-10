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
 * Class Shop
 */
class Shop extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $mainId;
    /**
     * @var int
     */
    protected $categoryId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var int
     */
    protected $position;
    /**
     * @var string
     */
    protected $host;
    /**
     * @var string
     */
    protected $basePath;
    /**
     * @var string
     */
    protected $baseUrl;
    /**
     * @var string
     */
    protected $hosts;
    /**
     * @var bool
     */
    protected $secure;
    /**
     * @var bool
     */
    protected $alwaysSecure;
    /**
     * @var string
     */
    protected $secureHost;
    /**
     * @var string
     */
    protected $secureBasePath;
    /**
     * @var bool
     */
    protected $default;
    /**
     * @var bool
     */
    protected $active;
    /**
     * @var bool
     */
    protected $customerScope;
    /**
     * @var Locale
     */
    protected $locale;

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
     * @return Shop
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getMainId()
    {
        return $this->mainId;
    }

    /**
     * @param int $mainId
     *
     * @return Shop
     */
    public function setMainId($mainId)
    {
        $this->mainId = $mainId;

        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     *
     * @return Shop
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

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
     * @return Shop
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Shop
     */
    public function setTitle($title)
    {
        $this->title = $title;

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
     * @return Shop
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     *
     * @return Shop
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * @return string
     */
    public function getBasePath()
    {
        return $this->basePath;
    }

    /**
     * @param string $basePath
     *
     * @return Shop
     */
    public function setBasePath($basePath)
    {
        $this->basePath = $basePath;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     *
     * @return Shop
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    /**
     * @param string $hosts
     *
     * @return Shop
     */
    public function setHosts($hosts)
    {
        $this->hosts = $hosts;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSecure()
    {
        return $this->secure;
    }

    /**
     * @param bool $secure
     *
     * @return Shop
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAlwaysSecure()
    {
        return $this->alwaysSecure;
    }

    /**
     * @param bool $alwaysSecure
     *
     * @return Shop
     */
    public function setAlwaysSecure($alwaysSecure)
    {
        $this->alwaysSecure = $alwaysSecure;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecureHost()
    {
        return $this->secureHost;
    }

    /**
     * @param string $secureHost
     *
     * @return Shop
     */
    public function setSecureHost($secureHost)
    {
        $this->secureHost = $secureHost;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecureBasePath()
    {
        return $this->secureBasePath;
    }

    /**
     * @param string $secureBasePath
     *
     * @return Shop
     */
    public function setSecureBasePath($secureBasePath)
    {
        $this->secureBasePath = $secureBasePath;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDefault()
    {
        return $this->default;
    }

    /**
     * @param bool $default
     *
     * @return Shop
     */
    public function setDefault($default)
    {
        $this->default = $default;

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
     * @return Shop
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }
}
