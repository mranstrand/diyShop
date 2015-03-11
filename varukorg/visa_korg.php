<?php
/**
 * Created by PhpStorm.
 * User: michaelranstrand
 * Date: 15-01-12
 * Time: 13:48
 */

session_start();

$cart = $_SESSION["cart"];



?>

    <html>
    <head>
        <title>Lägg produkt i korg</title>
        <meta charset="utf-8">
    </head>
    <body>



<?php

// Loopa igenom produkter i varukorg
foreach ($cart as $product){

    echo  "<br>Id = " . $product["id"] . ". antal = " . $product["antal"];

}

?>

<a href="../produkt/produktlista.php">Visa varulista</a>

    </body>

    </html>