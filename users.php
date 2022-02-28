<?php 
    require_once __DIR__ . "/classes/user.php";


    $user1 = new User([
        "userName" => "Pippo",
        "userSurname" => "Grigi",
        "userEmail" => "grigibelli@outlook.it",
        "userRegistered" => true,
        "userCardNumber" => "XXXX-XXXX-XXXX-XXXX",
        "userCardExpire" => "2028-04-23",
        "userCardCVV" => 999
    ]);

    $user2 = new User([
        "userName" => "Augusto",
        "userSurname" => "Renna",
        "userEmail" => "vivalerenne@gmail.com",
        "userRegistered" => false,
        "userCardNumber" => "XXXX-XXXX-XXXX-XXXX",
        "userCardExpire" => "2021-04-23",
        "userCardCVV" => 999
    ]);

    var_dump($user1, $user2);

?>