<?php
$host="localhost";
$username="root";
$password="";
$databasename="akademikk";
$con=@mysqli_connect($host, $username, $password, $databasename);

if(!$con){
    echo"EROR: " . mysqli_connect_eror();
    exit();
}
?>