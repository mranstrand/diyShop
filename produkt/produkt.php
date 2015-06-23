<?php
/**
 * Visar en produkt för användaren
 * Skapad av Michael Ranstrand
 * Datum: 2014-12-02
 *
 */

include "../db/connect.php";

// Förbered databasfråga med placeholders (markerade med : i början)
$STH = $DBH->prepare("SELECT * FROM tbl_produkter WHERE id = :id");

//Ersätt placeholders med värden från variabler
$STH->bindParam(':id', $_GET["produkt_id"]);

//Utför frågan
$STH->execute();

//Stänger databaskopplingen
$DBH = null;

//Undersök om nåfon användare matchar frågan
$row = $STH->fetch();

?>

<html>
<head>
    <meta charset="UTF-8"/>
</head>
<body>
<h1><?php echo $row["titel"]; ?></h1>
<br/>
<img src="<?php echo $row["bildfil"]; ?>" /> <br/>
<h2>Pris: <?php echo $row["pris"]; ?> kr</h2>
<?php echo $row["beskrivning"]; ?>
<p>I lager: <?php echo $row["lagersaldo"] ?></p>


<form action="../varukorg/lagg_i_korg.php?produkt_id=<?php echo $_GET["produkt_id"]. "&produkt_titel=" .$row["titel"]  ?>" method="post">

    Köp antal: <input type="text" name="antal">
    <input type="submit">

</form>
<a href="produktlista.php">Tillbaka till listan</a>
</body>
</html>