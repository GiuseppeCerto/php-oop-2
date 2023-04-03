<?php 
    require_once "./models/Product.php";
    require_once "./models/Food.php";
    require_once "./models/Accessories.php";
    require_once "./models/Toy.php";
    require_once "./models/Category.php";

    $food1 = new Food(3687,"Croccantini","Croccanti e gustose",15.55,"12/05/25","Sana");
    $food1->$type = "Cat";
    $food2 = new Food(2356,"Scatoletta umido","Spaziate al pollo",23.99,"22/10/23","AniSalu");
    $food3 = new Food(6541,"Scatoletta umido","Gusto manzo e tacchino",20.99,"10/09/23","AniSalu");

    $toy1 = new Toy(2456,"Pallina gommosa","Pallina ricreativa per animali",15.99,"PetFun","100% Plastic");
    $toy2 = new Toy(2785,"Corda per cani","Corda robusta per cani",10.99,"Doggy","100% Coton");

    $accessory1 = new Accessories(8569,"Guinzaglio","Guinzaglio in nylon",22.00,"Doggy","L","100% Nylon");
    $accessory2 = new Accessories(3759,"Cuccia","Cuccetta per gatti",32.99,"PetFun","One Size","100% Nylon");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cc81025709.js" crossorigin="anonymous"></script>
    <title>PHO OOP 2</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <?php 
                $food1->printCardHTML();
                $food2->printCardHTML();
                $food3->printCardHTML();

                $toy1->printCardHTML();
                $toy2->printCardHTML();

                $accessory1->printCardHTML();
                $accessory2->printCardHTML();
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>