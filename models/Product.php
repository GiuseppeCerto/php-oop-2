<?php

class Product {

    use Category;
    private $name;
    private $description;
    private $price;
    private $category;

    public function __construct($id, $name, $description, $price, $image) {

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