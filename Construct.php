<?php

class Product{
    public $name;
    public $price;

    public function __construct($name,$price)
    {
        $this->name = $name;
        $this->price =$price;
    }
}

$product1= new Product($name='henk',$price= '21');

echo $product1->name . "<br>";
echo $product1->price . "<br>";


class Klant{
    public $name;
    public $age;
    public $clientnr;

    public function __construct($name,$age,$clientnr)
    {
        $this->name = $name;
        $this->age = $age;
        $this->clientnr = $clientnr;
    }
}

$client1= new Klant('David', '69', '3637894');

echo $client1->name . "<br>";
echo $client1->age . "<br>";
echo $client1->clientnr . "<br>";
?>