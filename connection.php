<?php
$host="localhost";
$database = "msit_techxtra_db";
$uname= "root";
$pwd = "";
try {
    $pdoconn = new PDO("mysql:host=$host; dbname=$database", $uname, $pwd);

}
catch(PDOException $e)
{
    die("Can not access DB ".$database.", ".$e->getMessage());
}
?>