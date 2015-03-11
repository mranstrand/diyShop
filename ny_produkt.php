<?php

/**
 * Created by Michael Ranstrand
 * Date: 2015-03-06
 */

//Variabler för databaskoppling
$dbhost     = "localhost";
$dbname     = "diyShop";
$dbuser     = "root";
$dbpass     = "";

//Koppla till databasen
$DBH = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

// Välj felhantering (här felsökningsläge)
$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

// Förbered databasfråga med placeholders (markerade med : i början)
$STH = $DBH->prepare("INSERT INTO tbl_produkter(titel, beskrivning, pris, bildfil, lagersaldo) VALUES (:titel, :beskrivning, :pris, :bildfil, :lagersaldo)");

//Ersätt placeholders med värden från variabler

$STH->bindParam(':titel', $_POST["titel"]);
$STH->bindParam(':beskrivning', $_POST["beskrivning"]);
$STH->bindParam(':pris', $_POST["pris"]);
$STH->bindParam(':bildfil', $_POST["bild"]);
$STH->bindParam(':lagersaldo', $_POST["lagersaldo"]);

//Utför frågan
$STH->execute();

//Stänger databaskopplingen
$DBH = null;

?>


<a href="produktlista.php">Tillbaka till produktlistan</a>