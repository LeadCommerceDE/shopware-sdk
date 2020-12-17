<?php
namespace LeadCommerce\Shopware\SDK\Entity;

/**
 * Class Order
 *
 * @package Portrino\LeadCommerce\Shopware\SDK\Entity
 */
class Order extends \LeadCommerce\Shopware\SDK\Entity\Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var mixed
     */
    protected $customerId;
    /**
     * @var string
     */
    protected $invoiceAmount;
    /**
     * @var string
     */
    protected $invoiceAmountNet;
    /**
     * @var string
     */
    protected $invoiceShipping;
    /**
     * @var string
     */
    protected $invoiceShippingNet;
    /**
     * @var string
     */
    protected $currency;
    /**
     * @var string
     */
    protected $remoteAddress;
    /**
     * @var string
     */
    protected $orderTime;
    /**
     * @var string
     */
    protected $transactionId;

    /**
     * @var OrderBilling
     */
    protected $billing;
    /**
     * @var Customer[]
     */
    protected $customer;

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
     * @return Order
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return Order
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     *
     * @return Order
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param string $customerId
     *
     * @return Order
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceAmount()
    {
        return $this->invoiceAmount;
    }

    /**
     * @param string $invoiceAmount
     *
     * @return Order
     */
    public function setInvoiceAmount($invoiceAmount)
    {
        $this->invoiceAmount = $invoiceAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceAmountNet()
    {
        return $this->invoiceAmountNet;
    }

    /**
     * @param string $invoiceAmountNet
     *
     * @return Order
     */
    public function setInvoiceAmountNet($invoiceAmountNet)
    {
        $this->invoiceAmountNet = $invoiceAmountNet;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceShipping()
    {
        return $this->invoiceShipping;
    }

    /**
     * @param string $invoiceShipping
     *
     * @return Order
     */
    public function setInvoiceShipping($invoiceShipping)
    {
        $this->invoiceShipping = $invoiceShipping;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceShippingNet()
    {
        return $this->invoiceShippingNet;
    }

    /**
     * @param string $invoiceShippingNet
     *
     * @return Order
     */
    public function setInvoiceShippingNet($invoiceShippingNet)
    {
        $this->invoiceShippingNet = $invoiceShippingNet;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return Order
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemoteAddress()
    {
        return $this->remoteAddress;
    }

    /**
     * @param string $remoteAddress
     *
     * @return Order
     */
    public function setRemoteAddress($remoteAddress)
    {
        $this->remoteAddress = $remoteAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderTime()
    {
        return $this->orderTime;
    }

    /**
     * @param string $orderTime
     *
     * @return Order
     */
    public function setOrderTime($orderTime)
    {
        $this->orderTime = $orderTime;

        return $this;
    }

    /**
     * @return OrderBilling
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * @param OrderBilling $billing
     *
     * @return Order
     */
    public function setBilling($billing)
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * @return Customer[]
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer[] $customer
     *
     * @return Order
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }
}