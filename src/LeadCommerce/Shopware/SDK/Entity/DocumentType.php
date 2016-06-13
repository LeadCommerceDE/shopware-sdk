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
 * Class DocumentType
 */
class DocumentType extends Base
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
    protected $template;
    /**
     * @var string
     */
    protected $numbers;
    /**
     * @var int
     */
    protected $left;
    /**
     * @var int
     */
    protected $right;
    /**
     * @var int
     */
    protected $top;
    /**
     * @var int
     */
    protected $bottom;
    /**
     * @var int
     */
    protected $pageBreak;

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
     * @return DocumentType
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
     * @return DocumentType
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * @return DocumentType
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumbers()
    {
        return $this->numbers;
    }

    /**
     * @param string $numbers
     *
     * @return DocumentType
     */
    public function setNumbers($numbers)
    {
        $this->numbers = $numbers;

        return $this;
    }

    /**
     * @return int
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * @param int $left
     *
     * @return DocumentType
     */
    public function setLeft($left)
    {
        $this->left = $left;

        return $this;
    }

    /**
     * @return int
     */
    public function getRight()
    {
        return $this->right;
    }

    /**
     * @param int $right
     *
     * @return DocumentType
     */
    public function setRight($right)
    {
        $this->right = $right;

        return $this;
    }

    /**
     * @return int
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * @param int $top
     *
     * @return DocumentType
     */
    public function setTop($top)
    {
        $this->top = $top;

        return $this;
    }

    /**
     * @return int
     */
    public function getBottom()
    {
        return $this->bottom;
    }

    /**
     * @param int $bottom
     *
     * @return DocumentType
     */
    public function setBottom($bottom)
    {
        $this->bottom = $bottom;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageBreak()
    {
        return $this->pageBreak;
    }

    /**
     * @param int $pageBreak
     *
     * @return DocumentType
     */
    public function setPageBreak($pageBreak)
    {
        $this->pageBreak = $pageBreak;

        return $this;
    }
}
