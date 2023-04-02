<?php

class Product {
    private $id;
    private $name;
    private $description;
    private $price;
    private $image;
    private $category;

    public function __construct($id, $name, $description, $price, $image, $category) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }

    public function getId($id) {
        return $this->id;
    }

    public function setId() {
        return $this->id;
    }

    public function getName($name) {
        return $this->name;
    }

    public function setName() {
        return $this->name;
    }

    public function getDescription($description) {
        return $this->description;
    }


    public function setDescription() {
        return $this->description;
    }

    public function getPrice($price) {
        return $this->price;
    }

    public function setPrice() {
        return $this->price;
    }

    public function getImage($image) {
        return $this->image;
    }

    public function setImage() {
        return $this->image;
    }

    public function getCategory($category) {
        return $this->category;
    }

    public function setCategory() {
        return $this->category;
    }
}

?>