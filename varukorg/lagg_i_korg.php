<?php
/**
 * Created by Michael Ranstrand
 * Date: 2015-03-06
 */

session_start();

$_SESSION["cart"][] = array("produkt_id" => $_GET["produkt_id"], "antal" => $_POST["antal"]);

include "../db/connect.php";

// Förbered databasfråga med placeholders (markerade med : i början)
$STH = $DBH->prepare("INSERT INTO tbl_orderrader(titel, beskrivning, pris, bildfil, lagersaldo) VALUES (:titel, :beskrivning, :pris, :bildfil, :lagersaldo)");

//Ersätt placeholders med värden från variabler

$STH->bindParam(':titel', $_POST["titel"]);
$STH->bindParam(':beskrivning', $_POST["beskrivning"]);
$STH->bindParam(':pris', $_POST["pris"]);
$STH->bindParam(':bildfil', $_POST["bild"]);
$STH->bindParam(':lagersaldo', $_POST["lagersaldo"]);

//Utför frågan
$STH->execute();

?>

<html>
<head>
    <title>Lägg produkt i korg</title>
    <meta charset="utf-8">
</head>
<body>

Du lade till <?php echo $_POST["antal"]?> st. av produkten <?php echo $_GET["produkt_titel"]?>, med id: <?php echo $_GET["produkt_id"]?>

<a href="visa_korg.php">Visa varukorg</a>

</body>

</html>