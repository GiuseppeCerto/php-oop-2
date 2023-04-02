<?php
require_once "./models/Product.php";

class Toy extends Product {

    private $brand;
    private $material;
    
    public function __construct($id, $name, $description, $price, $image, $category, $brand, $material) {
        $this->brand = $brand;
        $this->material = $material;

        parent::__construct($id, $name, $description, $price, $image, $category);
    }

    public function setBrand($brand) {
        return $this->brand;
    }

    public function setMaterial($material) {
        return $this->material;
    }
}
?>