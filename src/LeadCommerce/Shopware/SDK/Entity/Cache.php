<?php

namespace LeadCommerce\Shopware\SDK\Entity;

/**
 * Class Cache
 */
class Cache extends Base
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $dir;
    /**
     * @var string
     */
    protected $size;
    /**
     * @var int
     */
    protected $files;
    /**
     * @var string
     */
    protected $freeSpace;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $backend;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Cache
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * @param string $dir
     *
     * @return Cache
     */
    public function setDir($dir)
    {
        $this->dir = $dir;

        return $this;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $size
     *
     * @return Cache
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return int
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param int $files
     *
     * @return Cache
     */
    public function setFiles($files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * @return string
     */
    public function getFreeSpace()
    {
        return $this->freeSpace;
    }

    /**
     * @param string $freeSpace
     *
     * @return Cache
     */
    public function setFreeSpace($freeSpace)
    {
        $this->freeSpace = $freeSpace;

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
     * @return Cache
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackend()
    {
        return $this->backend;
    }

    /**
     * @param string $backend
     *
     * @return Cache
     */
    public function setBackend($backend)
    {
        $this->backend = $backend;

        return $this;
    }
}
