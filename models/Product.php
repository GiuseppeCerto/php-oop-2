<?php

class Product {
    private $name;
    private $description;
    private $price;
    private $image;
    private $category;

    public function __construct($id, $name, $description, $price, $image, $category) {

        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }

    public function getName($newValue) {
        return $this->name;
    }

    public function setName($newValue) {
        return $this->name;
    }

    public function getDescription($description) {
        return $this->description;
    }


    public function setDescription($newValue) {
        return $this->description;
    }

    public function getPrice($price) {
        return $this->price;
    }

    public function setPrice($newValue) {
        return $this->price;
    }

    public function getImage($image) {
        return $this->image;
    }

    public function setImage($newValue) {
        return $this->image;
    }

    public function getCategory($category) {
        return $this->category;
    }

    public function setCategory($newValue) {
        return $this->category;
    }
}

?>