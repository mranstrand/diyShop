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
    
    // Skapar ny order
    $STH = $DBH->prepare("INSERT INTO tbl_order (kundID, status, regdat) value (:kundID, :status, CURRENT_DATE())");
    $status = "varukorg";
    //Ersätt placeholders med värden från variabler
    $STH->bindParam(':kundID', $_SESSION["kundid"]);
    $STH->bindParam(':status', $status);
    //Utför frågan
    $STH->execute();
    
    //Förbereder ny fråga
    $STH = $DBH->prepare("SELECT LAST_INSERT_ID()");
    
    //Utför frågan
    $STH->execute();
    
    //Hämdar orderid
    $result = $STH->fetch();
    $_SESSION["orderID"] = $result[0];
//header("Location: index.php");
}else{
    echo "Fel!";

}

?>