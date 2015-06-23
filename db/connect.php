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

?>