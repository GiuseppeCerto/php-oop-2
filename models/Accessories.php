<?php
require_once "./models/Product.php";

class Accessories extends Product {

    private $size;
    private $material;
  
    public function __construct($id, $name, $description, $price, $image, $category, $brand, $size, $material)  {

        $this->size = $size;
        $this->material = $material;

        parent::__construct($id, $name, $description, $price, $image, $category);

    }

    public function setSize($size) {
        return $this->size;
    }

    public function setMaterial($material) {
        return $this->material;
    }
}
?>
