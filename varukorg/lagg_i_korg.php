<?php
/**
 * Created by Michael Ranstrand
 * Date: 2015-03-06
 */

session_start();

$_SESSION["cart"][] = array("produkt_id" => $_GET["produkt_id"], "antal" => $_POST["antal"]);

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