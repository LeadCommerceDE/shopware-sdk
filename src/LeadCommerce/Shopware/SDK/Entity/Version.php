<?php

namespace LeadCommerce\Shopware\SDK\Entity;

/**
 * Class Version
 */
class Version extends Base
{
    /**
     * @var string
     */
    protected $version;
    /**
     * @var string
     */
    protected $revision;

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return Version
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * @param string $revision
     *
     * @return Version
     */
    public function setRevision($revision)
    {
        $this->revision = $revision;

        return $this;
    }
}
