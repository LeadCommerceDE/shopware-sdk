<?php

namespace LeadCommerce\Shopware\SDK\Entity;


/**
 * Class Base
 * @package LeadCommerce\Shopware\SDK\Entity
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 */
/**
 * Class Base
 * @package LeadCommerce\Shopware\SDK\Entity
 */
class Base
{
    /**
     * Sets the attributes of this entity.
     * @param array $attributes
     * @return $this
     */
    public function setEntityAttributes(array $attributes)
    {
        foreach ($attributes as $attribute => $value) {
            $setter = 'set' . ucfirst($attribute);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
        return $this;
    }

    /**
     * Gets the attributes of this entity.
     * @return array
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
}
