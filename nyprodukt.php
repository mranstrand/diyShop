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
$STH = $DBH->prepare("INSERT INTO tbl_produkter(id, titel, beskrivning, pris, bildfil, lagersaldo) VALUES (:id, :titel, :beskrivning, :pris, :bildfil, :lagersaldo)");

//Ersätt placeholders med värden från variabler

$STH->bindParam(':id', $_POST["id"]);
$STH->bindParam(':img', $img);
$STH->bindParam(':description', $descrip);
$STH->bindParam(':price', $price);
$STH->bindParam(':status', $status);

//Utför frågan
$STH->execute();

//Stänger databaskopplingen
$DBH = null;

//header("Location: productList.php");

?>


