<?php


namespace app\models;


class Cart extends Model
{
    public $countProducts;
    public $products = [];
    public $sum;



    public function getTableName() {
        return 'Cart';
    }

}