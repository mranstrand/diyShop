<?php

/**
 * Visar en lista med produkter för användaren
 * Skapad av Michael Ranstrand
 * Datum: 2014-12-02
 *
 */

include "../db/connect.php";

// Förbered databasfråga med placeholders (markerade med : i början)
$STH = $DBH->prepare("SELECT * FROM tbl_produkter");

//Utför frågan
$STH->execute();

//Stänger databaskopplingen
$DBH = null;

$arr = $STH->fetchAll();
?>


<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
foreach($arr as $value){

    echo "<a href='produkt.php?produkt_id=" . $value["id"] . "'>" . $value["titel"] . "</a><br>";

}
?>

<a href="ny_produkt_form.php">Lägg till ny produkt. </a>
</body>
</html>