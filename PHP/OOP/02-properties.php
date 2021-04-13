<?php include 'includes/header.php';

class MenuRestaurant {   
    public $name;
    public $price;

    public function __construct(){
        $this->name = 'Product name';
        $this->price = 0;
    }
}

$fruit = new MenuRestaurant();

var_dump($fruit);

$drink = new MenuRestaurant();
$drink->name = 'xD';
$drink->price = 20;

var_dump($drink);

$dessert = new MenuRestaurant();
$dessert->name = 'xC';
$dessert->price = 25;

var_dump($dessert);