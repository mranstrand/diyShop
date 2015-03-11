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
$STH = $DBH->prepare("INSERT INTO tbl_kunder (persnr, fornamn, efternamn, telnr, adress, postnr, postadress, epost, password) value (:persnr, :fornamn, :efternamn, :telnr, :adress, :postnr, :postadress, :epost, :password)");

//Ersätt placeholders med värden från variabler
$STH->bindParam(':persnr', $_POST["persnr"]);
$STH->bindParam(':fornamn', $_POST["fnamn"]);
$STH->bindParam(':efternamn', $_POST["enamn"]);
$STH->bindParam(':telnr', $_POST["tel"]);
$STH->bindParam(':adress', $_POST["adress"]);
$STH->bindParam(':postnr', $_POST["postnr"]);
$STH->bindParam(':postadress', $_POST["postadress"]);
$STH->bindParam(':epost', $_POST["epost"]);
$STH->bindParam(':password', $_POST["pass"]);

//Utför frågan
$STH->execute();

//Stänger databaskopplingen
$DBH = null;
?>