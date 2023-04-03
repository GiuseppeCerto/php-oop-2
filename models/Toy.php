<?php
require_once "./models/Product.php";
require_once "./models/Category.php";

class Toy extends Product {

    use Category;
    private $brand;
    private $material;
    
    public function __construct($name, $description, $price, $brand, $material) {
        $this->brand = $brand;
        $this->material = $material;

        parent::__construct($name, $description, $price);
    }

    public function setBrand($newValue) {
        return $this->brand;
    }

    public function setMaterial($newValue) {
        return $this->material;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getMaterial() {
        return $this->material;
    }


    public function printCardHTML() {
        ?>
        <div class="col-4 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $this->getName() ?></h5>
                    <ul>
                        <li><strong>Product Name:</strong> <?php echo $this->getName() ?></li>
                        <li><strong>Description:</strong> <?php echo $this->getDescription() ?></li>
                        <li><strong>Price:</strong> <?php echo $this->getPrice() ?></li>
                        <li><strong>Category:</strong> <?php echo $this->getType() . ' ' ?><i class= "<?php echo $this->image?>" ></i></li>
                        <li><strong>Brand:</strong> <?php echo $this->getMaterial() ?></li>
                        <li><strong>Material:</strong> <?php echo $this->getBrand() ?></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php
    }
}
?>