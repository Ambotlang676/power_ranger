<?php 

$servername = "localhost";
$user = "root";
$pass = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=wadt2", $user , $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(\Throwable $e){
    echo "Connection Failed" .$e->getMessage();
}


?>