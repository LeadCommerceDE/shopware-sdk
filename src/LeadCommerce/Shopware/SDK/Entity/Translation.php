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
 * Class Translation
 */
class Translation extends Base
{
    /**
     * @var string
     */
    protected $metaTitle;
    /**
     * @var string
     */
    protected $attr1;
    /**
     * @var string
     */
    protected $attr2;
    /**
     * @var string
     */
    protected $attr3;
    /**
     * @var string
     */
    protected $attr4;
    /**
     * @var string
     */
    protected $attr5;
    /**
     * @var string
     */
    protected $attr6;
    /**
     * @var string
     */
    protected $attr7;
    /**
     * @var string
     */
    protected $attr8;
    /**
     * @var string
     */
    protected $attr9;
    /**
     * @var string
     */
    protected $attr10;
    /**
     * @var string
     */
    protected $attr11;
    /**
     * @var string
     */
    protected $attr12;
    /**
     * @var string
     */
    protected $attr13;
    /**
     * @var string
     */
    protected $attr14;
    /**
     * @var string
     */
    protected $attr15;
    /**
     * @var string
     */
    protected $attr16;
    /**
     * @var string
     */
    protected $attr17;
    /**
     * @var string
     */
    protected $attr18;
    /**
     * @var string
     */
    protected $attr19;
    /**
     * @var string
     */
    protected $attr20;
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
    protected $keywords;
    /**
     * @var string
     */
    protected $packUnit;
    /**
     * @var int
     */
    protected $shopId;

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
     * @return Translation
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttr1()
    {
        return $this->attr1;
    }

    /**
     * @param string $attr1
     *
     * @return Translation
     */
    public function setAttr1($attr1)
    {
        $this->attr1 = $attr1;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttr2()
    {
        return $this->attr2;
    }

    /**
     * @param string $attr2
     *
     * @return Translation
     */
    public function setAttr2($attr2)
    {
        $this->attr2 = $attr2;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttr3()
    {
        return $this->attr3;
    }

    /**
     * @param string $attr3
     *
     * @return Translation
     */
    public function setAttr3($attr3)
    {
        $this->attr3 = $attr3;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttr4()
    {
        return $this->attr4;
    }

    /**
     * @param string $attr4
     *
     * @return Translation
     */
    public function setAttr4($attr4)
    {
        $this->attr4 = $attr4;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttr5()
    {
        return $this->attr5;
    }

    /**
     * @param string $attr5
     *
     * @return Translation
     */
    public function setAttr5($attr5)
    {
        $this->attr5 = $attr5;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttr6()
    {
        return $this->attr6;
    }

    /**
     * @param string $attr6
     *
     * @return Translation
     */
    public function setAttr6($attr6)
    {
        $this->attr6 = $attr6;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttr7()
    {
        return $this->attr7;
    }

    /**
     * @param string $attr7
     *
     * @return Translation
     */
    public function setAttr7($attr7)
    {
        $this->attr7 = $attr7;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttr8()
    {
        return $this->attr8;
    }

    /**
     * @param string $attr8
     *
     * @return Translation
     */
    public function setAttr8($attr8)
    {
        $this->attr8 = $attr8;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttr9()
    {
        return $this->attr9;
    }

    /**
     * @param string $attr9
     *
     * @return Translation
     */
    public function setAttr9($attr9)
    {
        $this->attr9 = $attr9;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttr10()
    {
        return $this->attr10;
    }

    /**
     * @param string $attr10
     *
     * @return Translation
     */
    public function setAttr10($attr10)
    {
        $this->attr10 = $attr10;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttr11()
    {
        return $this->attr11;
    }

    /**
     * @param string $attr11
     *
     * @return Translation
     */
    public function setAttr11($attr11)
    {
        $this->attr11 = $attr11;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttr12()
    {
        return $this->attr12;
    }

    /**
     * @param string $attr12
     *
     * @return Translation
     */
    public function setAttr12($attr12)
    {
        $this->attr12 = $attr12;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttr13()
    {
        return $this->attr13;
    }

    /**
     * @param string $attr13
     *
     * @return Translation
     */
    public function setAttr13($attr13)
    {
        $this->attr13 = $attr13;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttr14()
    {
        return $this->attr14;
    }

    /**
     * @param string $attr14
     *
     * @return Translation
     */
    public function setAttr14($attr14)
    {
        $this->attr14 = $attr14;

        return $this;
    }
}
