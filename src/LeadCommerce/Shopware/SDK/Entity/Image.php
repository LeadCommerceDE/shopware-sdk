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
 * Class Image
 */
class Image extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $articleId;
    /**
     * @var int
     */
    protected $articleDetailId;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $path;
    /**
     * @var int
     */
    protected $main;
    /**
     * @var int
     */
    protected $position;
    /**
     * @var int
     */
    protected $width;
    /**
     * @var int
     */
    protected $height;
    /**
     * @var string
     */
    protected $relations;
    /**
     * @var string
     */
    protected $extension;
    /**
     * @var int
     */
    protected $parentId;
    /**
     * @var int
     */
    protected $mediaId;

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
     * @return Image
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * @return Image
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @return int
     */
    public function getArticleDetailId()
    {
        return $this->articleDetailId;
    }

    /**
     * @param int $articleDetailId
     *
     * @return Image
     */
    public function setArticleDetailId($articleDetailId)
    {
        $this->articleDetailId = $articleDetailId;

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
     * @return Image
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return Image
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return int
     */
    public function getMain()
    {
        return $this->main;
    }

    /**
     * @param int $main
     *
     * @return Image
     */
    public function setMain($main)
    {
        $this->main = $main;

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
     * @return Image
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     *
     * @return Image
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     *
     * @return Image
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelations()
    {
        return $this->relations;
    }

    /**
     * @param string $relations
     *
     * @return Image
     */
    public function setRelations($relations)
    {
        $this->relations = $relations;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     *
     * @return Image
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     *
     * @return Image
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * @return int
     */
    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * @param int $mediaId
     *
     * @return Image
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;

        return $this;
    }
}
