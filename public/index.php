<?php

include "../engine/Autoload.php";
use app\engine\{Db, Autoload};
use app\models\{Product, User};
use app\models\example\{DigitalProduct, WeightProduct};

spl_autoload_register([new Autoload(), 'loadClass']);


$product = new Product(new Db());
$product->name = "Чай";




echo $product->getOne(2) . "<br>";
echo $product->getAll() . "<br>";

$user = new User(new Db());
echo $user->getOne(1) . "<br>";
echo $user->getAll();

var_dump($user);

echo "<br>";
$weightProduct1 = new WeightProduct('Печенье', 100, 300);

echo WeightProduct::$amount . "<br>";

$weightProduct2 = new WeightProduct('Говядина', 35, 2000);

echo WeightProduct::$amount;




die();
/*
//CREATE
$product = new Product(new Db());
$product->name = "Чай"; //....
$product->insert();

//READ
$product = new Product();
$product->getOne(5);
$product->getAll();

//DELETE
$product = new Product();
$product->getOne(5);
$product->delete();

//UPDATE
$product = new Product();
$product->getOne(5);
$product->name = "Чай!2";
$product->update();

*/