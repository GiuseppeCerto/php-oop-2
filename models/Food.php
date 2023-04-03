<?php
require_once "./models/Product.php";

class Food extends Product{

    use Category;
    private $expiration;
    private $brand;
    
    public function __construct($id, $name, $description, $price, $image, $category, $expiration, $brand) {

        $this->expiration = $expiration;
        $this->brand = $brand;

        parent::__construct($id, $name, $description, $price, $image, $category);
    }

    public function setExpiration($newValue) {
        return $this->expiration;
    }

    public function setBrand($newValue) {
        return $this->brand;
    }

    public function getExpiration($expiration){
        return $this->expiration;
    }

    public function getBrand($brand){
        return $this->brand;
    }


    public function printCardHTML() {
        ?>
        <div class="col-4 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $this->getName('') ?></h5>
                    <ul>
                        <li><strong>Product Name:</strong> <?php echo $this->getName('') ?></li>
                        <li><strong>Description:</strong> <?php echo $this->getDescription('') ?></li>
                        <li><strong>Price:</strong> <?php echo $this->getPrice('') ?></li>
                        <li><strong>Category:</strong> <?php echo $this->getCategory('') . " " . $this->getImage('') ?></li>
                        <li><strong>Expiration:</strong> <?php echo $this->getExpiration('') ?></li>
                        <li><strong>Brand:</strong> <?php echo $this->getBrand('') ?></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php
    }
}
