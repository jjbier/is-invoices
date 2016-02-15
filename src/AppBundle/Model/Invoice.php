<?php
/**
 * Created by PhpStorm.
 * User: xabier
 * Date: 13/02/16
 * Time: 22:36
 */

namespace AppBundle\Model;


class Invoice
{
    /**
     * @var Customer
     */
    protected $customer;

    /**
     * @var string
     */
    protected $number;

    /**
     * @var \DateTime
     */
    protected $date;

    /**
     * @var \DateTime
     */
    protected $dueDate;

    /**
     * @var PaymentTerms
     */
    protected $paymentTerms;

    /**
     * @var InvoiceStatus
     */
    protected $status;

    /**
     * @var InvoiceItem[]
     */
    protected $items;

    /**
     * @var string
     */
    protected $customerNotes;

    /**
     * @var PaymentMethod
     */
    protected $paymentMethod;

    /**
     * @var string[]
     */
    protected $attachments;

    /**
     * @var float
     */
    protected $total;

    /**
     * @var float
     */
    protected $subTotal;

    /**
     * @var float
     */
    protected $taxes;

    /**
     * @var float
     */
    protected $discount;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
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
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param \DateTime $dueDate
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
    }

    /**
     * @return PaymentTerms
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * @param PaymentTerms $paymentTerms
     */
    public function setPaymentTerms($paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
    }

    /**
     * @return InvoiceStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param InvoiceStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return InvoiceItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param InvoiceItem[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return string
     */
    public function getCustomerNotes()
    {
        return $this->customerNotes;
    }

    /**
     * @param string $customerNotes
     */
    public function setCustomerNotes($customerNotes)
    {
        $this->customerNotes = $customerNotes;
    }

    /**
     * @return PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param PaymentMethod $paymentMethod
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return \string[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param \string[] $attachments
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return float
     */
    public function getSubTotal()
    {
        return $this->subTotal;
    }

    /**
     * @param float $subTotal
     */
    public function setSubTotal($subTotal)
    {
        $this->subTotal = $subTotal;
    }

    /**
     * @return float
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * @param float $taxes
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }


}