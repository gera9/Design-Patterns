<?php include 'includes/header.php';

class MenuRestaurant {
    public $name;
    public $price;

    public function __construct($name, $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$food = new MenuRestaurant('Fruit');
echo $food->getName();
echo ' with price: $';
echo $food->getPrice();