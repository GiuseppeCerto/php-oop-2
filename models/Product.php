<?php
require_once "./models/Category.php";
class Product {

    use Category;
    private $name;
    private $description;
    private $price;
    public function __construct($name, $description, $price) {

        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($newValue) {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }


    public function setDescription($newValue) {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($newValue) {
        return $this->price;
    }
}

?>