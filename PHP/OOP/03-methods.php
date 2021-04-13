<?php include 'includes/header.php';

class MenuRestaurant {
    public $name;
    public $price;

    public function __construct(){
        $this->name = 'Product name';
        $this->price = 0;
    }

    public function __toString(): string
    {
        return 'Name: ' . $this->name . "\nPrice: " . $this->price;
    }

    public function getProductAndName()
    {
        var_dump($this);
    }
}

$drink = new MenuRestaurant();
$drink->getProductAndName();

$dessert = new MenuRestaurant();
echo $dessert;