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
    <form action="ny_produkt.php" method="post"><br>
        Titel: <input type="text" name="titel"><br>
        Beskrivning: <input type="text" name="beskrivning"><br>
        Pris: <input type="text" name="pris"><br>
        Sökväg till bildfil: <input type="text" name="bild"><br>
        Lagersaldo: <input type="text" name="lagersaldo"><br>

        <input type="submit">

    </form>

</body>
</html>