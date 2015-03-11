<?php

/**
 * Created by Michael Ranstrand
 * Date: 2015-03-06
 */

    session_start();

    //include "login/admin_auth.php";
?>

<html>

<head>

    <title>Registrera produkt</title>
    <meta charset="utf-8">

</head>

<body>
    <h1>Registrera produkt</h1>
    <form action="nyprodukt.php" method="post"><br>
       Pris: <input type="text" name="titel"><br>
       Bildlänk: <input type="text" name="prodImg"><br>
       Lagerstatus: <input type="text" name="prodStatus"><br>
        Beskrivning: <input type="text" name="prodDescrip"><br>
        <input type="submit">

    </form>

</body>
</html>