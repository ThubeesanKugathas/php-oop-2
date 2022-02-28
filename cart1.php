<?php 
    require_once __DIR__ . "/classes/food.php";
    require_once __DIR__ . "/classes/toys.php";
    require_once __DIR__ . "/classes/dog-bed.php";

    $cart1 = [];

    $food1 = new Food ([
        "productPrice" => 6.39,
        "productName" => "Cibo per cani 1",
        "productDescription" => "Cibo per cani molto buono",
        "productQuantity" => 3,
        "foodType" => "Tipo 1",
        "foodBrand" => "Marca 1",
        "foodWeight" => 200,
    ]);

    $food2 = new Food ([
        "productPrice" => 9.99,
        "productName" => "Cibo per cani 2",
        "productDescription" => "Cibo per cani molto gustoso",
        "productQuantity" => 1,
        "foodType" => "Tipo 4",
        "foodBrand" => "Marca 2",
        "foodWeight" => 250,
    ]);

    $toy1 = new Toys ([
        "productPrice" => 14.99,
        "productName" => "Giocattolo per cani 1",
        "productDescription" => "un giocattolo molto colorato",
        "productQuantity" => 1,
        "gameType" => "Tipo 7",
        "gameMaterial" => "Materiale 1",
    ]);

    array_push($cart1, $food1, $food2, $toy1);
    var_dump($cart1);
?>