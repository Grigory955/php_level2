<?php


namespace app\models\example;


class DigitalProduct extends Product
{

    protected $quantity;

    public function __construct($title, $price, $quantity)
    {
        parent::__construct($title, $price);
        $this->quantity = $quantity;
        $this->calculationOfAmount();

    }

    public function getQuantity()
    {
        return $this->quantity;
    }


    public function setPrice($price)
    {
        $this->price = $price;
        $this->calculationOfAmount();
    }

    public function setSale($discount)
    {
        $this->discount = $discount;
        $this->calculationOfAmount();
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->calculationOfAmount();
    }


    protected function calculationOfAmount()
    {
        self::$amount += ($this->getPrice() * $this->getQuantity() / 2);
    }

}