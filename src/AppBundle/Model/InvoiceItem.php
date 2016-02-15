<?php
/**
 * Created by PhpStorm.
 * User: xabier
 * Date: 13/02/16
 * Time: 22:36
 */

namespace AppBundle\Model;


class InvoiceItem
{
    /**
     * @var Invoice
     */
    protected $invoice;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var integer
     */
    protected $quantity;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var float
     */
    protected $discount;

    /**
     * @var TaxRate
     */
    protected $taxe;

    /**
     * @var float
     */
    protected $total;
    /**
     * @var integer
     */
    protected $order;

    /**
     * @return Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param Invoice $invoice
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;
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
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
     * @return TaxRate
     */
    public function getTaxe()
    {
        return $this->taxe;
    }

    /**
     * @param TaxRate $taxe
     */
    public function setTaxe($taxe)
    {
        $this->taxe = $taxe;
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
     * @return int
     */
    public function getOrder()
    {
        if($this->order == null){
            return 1;
        }
        return $this->order;
    }

    /**
     * @param int $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

}