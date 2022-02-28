<?php 
    require_once __DIR__ . "/classes/food.php";
    require_once __DIR__ . "/classes/toys.php";
    require_once __DIR__ . "/classes/dog-bed.php";

    $cart1 = [];

    $food1 = new Food ([
        "productPrice" => 6.39,
        "productName" => "Cibo per cani 1",
        "productDescription" => "Cibo per cani molto buono",
        "foodType" => "Tipo 1",
        "foodBrand" => "Marca 1",
        "foodWeight" => 200,
        "productQuantity" => 3
    ]);

    $food2 = new Food ([
        "productPrice" => 9.99,
        "productName" => "Cibo per cani 2",
        "productDescription" => "Cibo per cani molto gustoso",
        "foodType" => "Tipo 4",
        "foodBrand" => "Marca 2",
        "foodWeight" => 250,
        "productQuantity" => 1
    ]);

    array_push($cart1, $food1, $food2);
    var_dump($cart1);
?>