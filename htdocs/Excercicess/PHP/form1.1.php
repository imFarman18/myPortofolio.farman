<?php

$Username= $_POST ["name"];
$Email= $_POST ["email"];
$Password= $_POST ["password"];

//connecting mysql to php
$conn = new mysqli("localhost","root","","log_in");

$req= " INSERT INTO log_in_normal (USERNAME,EMAIL, PASSWORD) values ('$Username','$Email','$Password')";

$conn->query($req);




?>