<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'aathiran_fin_2021';

$conn = new mysqli($servername,$username,$password,$db);

if($conn->connect_error){
    die("Connectionfailed :". $conn->connect_error);
}
echo "connection success";

?>