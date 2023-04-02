<?php

class Category{
    public $type = "Gatto";
    public $image;

    public function __construct($image)  {
        $this->image = $image;
    }

    public function getType() {
        if ($this->type === "Cane") {
            return "Cane";
        }
        return $this->type;
    }

    public function setType() {
        return $this->type;
    }
}
?>