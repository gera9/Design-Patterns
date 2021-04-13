<?php include 'includes/header.php';

class MenuRestaurant {
    public $name;
    protected $price;

    public function __construct( $name, $price ) 
    { 
        $this->name = $name;
        $this->price = $price;
    }

    public function __toString(): string
    {
        return 'Name: ' . $this->name . "\nPrice: " . $this->price;
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

class Drink extends MenuRestaurant {
    private $measure;

    public function __construct( $name, $price, $measure ) 
    { 
        parent::__construct($name, $price);
        $this->measure = $measure;
    }

    // Overwrite
    public function __toString(): string
    {
        return 'Name: ' . $this->name . "\nPrice: " . $this->price . "\nMeasure: " . $this->measure;
    }

    public function getMeasure()
    {
        return $this->measure;
    }
}

class Dessert extends MenuRestaurant {
    private $weight;

    public function __construct( $name, $price, $weight ) 
    { 
        parent::__construct($name, $price);
        $this->weight = $weight;
    }

    // Overwrite
    public function __toString(): string
    {
        return 'Name: ' . $this->name . "\nPrice: " . $this->price . "\nWeight: " . $this->weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}

$dessert = new Dessert('Chocolate', 50, '150g');

# Fine
echo $dessert->name;

# Error
echo $dessert->price;
echo $dessert->weight;
