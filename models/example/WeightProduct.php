<?php


namespace app\models\example;


class WeightProduct extends Product
{
    protected $weightProduct;
    protected $discount = 1;
    const MIN_WEIGHT_DISCOUNT = 1000;

    public function __construct($title, $price, $weightProduct)
    {
        parent::__construct($title, $price);
        $this->weightProduct = $weightProduct;
        $this->calculationOfAmount();
    }

    public function getWeightProduct()
    {
        return $this->weightProduct;
    }


    protected function calculationOfAmount()
    {
        if ($this->getWeightProduct() > self::MIN_WEIGHT_DISCOUNT) {
            $this->discount = 0.9;
        }

        self::$amount += $this->weightProduct / 100 * $this->price * $this->discount;

    }
}