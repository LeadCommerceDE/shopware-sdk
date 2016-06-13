<?php
/**
 * LeadCommerce\Shopware\SDK\Exception
 *
 * Copyright 2016 LeadCommerce
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 */
namespace LeadCommerce\Shopware\SDK\Exception;

/**
 * Class MethodNotAllowedException
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 LeadCommerce <amahrt@leadcommerce.de>
 */
class MethodNotAllowedException extends \Exception
{
    /**
     * MethodNotAllowedException constructor.
     *
     * @param string     $message
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct($message = 'Method is not allowed.', $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
