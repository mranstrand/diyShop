<?php
/**
 * Created by Michael Ranstrand
 * Date: 2015-03-06
 */
session_start();

include "../db/connect.php";

// Förbered databasfråga med placeholders (markerade med : i början)
$STH = $DBH->prepare("SELECT * FROM tbl_kunder WHERE epost = :epost AND password = :password");

//Ersätt placeholders med värden från variabler
$STH->bindParam(':epost', $_POST["epost"]);
$STH->bindParam(':password', $_POST["pass"]);

//Utför frågan
$STH->execute();

//Stänger databaskopplingen
$DBH = null;

//Undersök om någon användare matchar frågan
if($row = $STH->fetch()){

    $_SESSION["kund"]["fnamn"] = $row["fornamn"];
    $_SESSION["kund"]["enamn"] = $row["efternamn"];
    $_SESSION["kund"]["id"] = $row["id"];
    print_r($_SESSION);
    //header("Location: index.php");
}else{
    echo "Fail!";

}

?>