<?php

require_once __DIR__ . "/Models/User.php";
require_once __DIR__ . "/Models/Address.php";
require_once __DIR__ . "/Models/UserMultiAddress.php";

// $address = new Address("via Roma", 12, "Roma", "65432");
// // var_dump($address);
// 
// $olga = new User("olga");
// // $olga->nome = "Olga";
// // $olga->email = "olga@gmail.com";
// // $olga->eta = 70;
// $olga->setSconto(70);
// var_dump($olga);
// var_dump($olga->getSconto());
// echo $olga->printUserInfo();
// 
// echo $olga->indirizzo?->print();

// $ottavio = new User("Ottavio", new Address("via Palermo", 2, "Pescara", "65100"));
// // $ottavio->nome = "Ottavio";
// // $ottavio->email = "ottavio@gmail.com";
// var_dump($ottavio);
// 
// // var_dump($ottavio->indirizzo);
// echo $ottavio->indirizzo->print();
// echo $ottavio->nome;
// 
// $address = new Address("via Roma", 12, "Roma", "65432");
// // var_dump($address);
// 
// echo Address::$defaultCitta;
// echo $address->defaultCitta();
// 
// User::sayHello();

$addresses = [
    new Address("via Roma", 12, "Roma", "89765"),
    new Address("via Palermo", 1, "Palermo", "92100")
];

$user = new UserMultiAddress("Luigi", $addresses, "luigi@email.com");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <h2>Dati utente</h2>
        <p>Nome: <?php echo $user->nome; ?></p>
        <p>Email: <?php echo $user->email; ?></p>
        <ul>
            <?php foreach ($user->indirizzi as $address) { ?>
                <!-- <li><?php echo $address->print(); ?></li> -->
                <li>
                    <h4><?php echo $address->stato ?></h4>
                    <p><?php echo $address->via ?>, <?php echo $address->numero ?></p>
                </li>
            <?php } ?>
        </ul>
    </section>

</body>

</html>