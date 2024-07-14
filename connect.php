<?php

$server="localhost";
$user="root";
$pwd="";

try{
$cnx= new PDO("mysql:host=$server;dbname=projet_php",$user,$pwd);


}
catch(PDOException $e){

       
}




?>