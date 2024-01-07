<?php
    $host = "localhost";
    $user = "root";
    //$user = "root";
    $pass = "root";
    //$pass = "root";
    $db = "bitrustbnk";
    //$db = "swiftBankDatabase3";
    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        die("Database Could not be reaached".mysqli_connect_error());
    }
?>