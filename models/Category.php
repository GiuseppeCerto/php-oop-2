<?php
require_once "./models/Product.php";
trait Category{
    public $type;
    public $image;

    public function setType($newValue) {
        if ($newValue === "Dog") {
           $this->image ="fa-solid fa-dog";
           $this->type = "Dog";

            
        }elseif($newValue === "Cat"){
            $this->image ="fa-solid fa-cat";
            $this->type = "Cat";

        }elseif($newValue != "Cat" || $newValue != "Dog"){
            $this->type = "Non valido";
            throw new Exception("La categoria inserita non ha prodotto risultati");
        }
        return;
    }

    public function getType() {
        return $this->type;
    }
}
?>