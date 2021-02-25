<?php


namespace app\models\example;


class PieceProduct extends Product
{
    protected $quantity;

    public function __construct($title, $price)
    {
        parent::__construct($title, $price);
        $this->calculationOfAmount();

    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    protected function calculationOfAmount()
    {
        self::$amount += ($this->getPrice() * $this->getQuantity());
    }
}