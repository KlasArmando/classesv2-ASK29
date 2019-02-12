<?php
class Person{
    public $name;
    public $email;
    public $adres;
}

$persoon1= new Person();
$persoon1->name ='Henk';
$persoon1->email = 'henk@live.nl';
$persoon1->adres = 'Fuutlaan 109';

//---------------ECHO----------------//
echo $persoon1->name . "<br>";
echo $persoon1->email . "<br>";
echo $persoon1->adres . "<br>";


class Auto{
    public $merk;
    public $model;
    public $kenteken;
    public $kleur;
    public $laatsteapk;
}

$newauto= new Auto();
$newauto->merk ='Nissan';
$newauto->model = 'qaskai';
$newauto->kenteken = 'DP-234-JF';
$newauto->kleur ='blauw';
$newauto->laatsteapk ='5-2-2019';

//---------------ECHO----------------//

echo $newauto->merk . "<br>";
echo $newauto->model . "<br>";
echo $newauto->kenteken . "<br>";
echo $newauto->kleur . "<br>";
echo $newauto->laatsteapk . "<br>";

//---------------VAR_DUMP-----------//
//var_dump($persoon1);
//var_dump($newauto);



?>