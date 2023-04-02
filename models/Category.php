<?php

class Category{
    public $type = "Cat";
    public $image;

    public function __construct($image)  {
        $this->image = $image;
    }

    public function getType() {
        if ($this->type === "Dog") {
            return "Dog";
        }
        return $this->type;
    }

    public function setType() {
        return $this->type;
    }
}
?>