<?php
/**
 * Created by Michael Ranstrand
 * Date: 2015-03-06
 */

session_start();

$_SESSION["cart"][] = array("productId" => $_GET["productId"], "antal" => $_POST["antal"]);

?>

<html>
<body>

Du lade till <?php echo $_POST["antal"]?> st. av produkt med id: <?php echo $_GET["productId"?>

<a href="visaKorg.php">Visa varukorg</a>

</body>

</html>