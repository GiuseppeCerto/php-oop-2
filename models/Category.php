<?php
require_once "./models/Product.php";
trait Category{
    public $type = "Cat";
    public $image;

    public function __construct($image)  {
        $this->image = $image;
    }

    public function setType($newValue) {
        if ($this->type === "Dog") {
           return $this->image = "<i class=\"fa-solid fa-dog\>";
            
        }elseif($this->type === "Cat"){
            return $this->image = "<i class=\"fa-solid fa-cat\>";
        }
    }

    public function getType($type) {
        return $this->type;
    }
}
?>