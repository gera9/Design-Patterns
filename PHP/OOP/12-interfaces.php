 <?php include 'includes/header.php';

interface MenuRestaurantInterface {
    public function getName();
    public function getPrice();
} 


class MenuRestaurant implements MenuRestaurantInterface { 
    public $name; 
    protected $price;

    public function __construct( $name, $price ) { 
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