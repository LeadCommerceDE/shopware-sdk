<?php

namespace LeadCommerce\Shopware\SDK\Entity;

/**
 * Class Base
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 */
class Base
{
    /**
     * @var int
     */
    protected $id;

    /**
     * Gets the attributes of this entity.
     *
     * @return array
     */
    public function getArrayCopy()
    {
        $array = get_object_vars($this);

        foreach ($array as $key => &$value) {
            if ($value instanceof Base) {
                $array[$key] = $value->getArrayCopy();
            } else if (is_array($value)) {
                foreach ($value as $k => $v) {
                    if ($v instanceof Base) {
                        $value[$k] = $v->getArrayCopy();
                    }
                }
            }
        }

        $array = array_filter($array, function ($value) {
            return $value !== null;
        });

        return $array;
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
     * @return Base
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
