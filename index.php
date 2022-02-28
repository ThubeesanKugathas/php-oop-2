<?php 

require_once __DIR__ . "/cart1.php";
require_once __DIR__ . "/users.php";
require_once __DIR__ . "/classes/products.php";

$tot = $food1->getPrice() * $food1->getQuantity();
$tot += $food2->getPrice() * $food2->getQuantity();
$tot += $toy1->getPrice() * $toy1->getQuantity();
$tot += $bed1->getPrice() * $bed1->getQuantity();

if ($user1->getDiscount()) {
    $discountedPrice = $tot - ($tot * (20 / 100));
    
    var_dump("Prezzo totale: " . round($discountedPrice, 2) . " EUR");
} else {
    var_dump("Prezzo totale: " . round($tot, 2) . " EUR");
}



?>