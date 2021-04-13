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

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}

$drink = new MenuRestaurant();
echo $drink->getName();
echo " with price: $";
echo $drink->getPrice();
echo "\n";
$dessert = new MenuRestaurant();
echo $dessert;