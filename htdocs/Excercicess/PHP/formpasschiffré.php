<?php

$Email= $_POST["email"];
$Password= $_POST["password"];


$hash= password_hash($Password,PASSWORD_BCRYPT);

//connecting mysql to php
$conn = new mysqli("localhost","root","","log_in");

$req= " INSERT INTO log_in_chiffree (EMAIL, PASSWORD) values ('$Email','$hash')";

$conn->query($req);

//verification chiffrage

$req= "SELECT * FROM  log_in_chiffree WHERE Email='$Email' ";
$result= $conn->query($req);
$ligne= mysqli_fetch_assoc($result);

if(password_verify($Password,$ligne['Password'])){
    echo " The password is valid";
}
else{
    echo "Not valid";
}




?>