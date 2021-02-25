<?php


namespace app\models\example;


abstract class Product
{
    public $title;
    public $price;
    public static $amount = 0;


    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }


    public function getAmount()
    {
        return self::$amount;
    }

    abstract protected function calculationOfAmount();

}