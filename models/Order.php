<?php


namespace app\models;


class Order extends Model
{
    public $orderNumber;
    public $customer;
    public $deliveryAddress;
    public $costOfGoods;
    public $costOfDelivery;
    public $amountToPay;

    public function getTableName()
    {
        return "Order";
    }
}