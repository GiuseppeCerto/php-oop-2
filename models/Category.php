<?php
require_once "./models/Product.php";
trait Category{
    public $type;
    public $image;

    public function setType($newValue) {
        if ($this->type === "Dog") {
           return $this->image = "<i class=\"fa-solid fa-dog\>";
            
        }elseif($this->type === "Cat"){
            return $this->image = "<i class=\"fa-solid fa-cat\>";
        }
        return $this->type
    }

    public function getType() {
        return $this->type;
    }
}
?>