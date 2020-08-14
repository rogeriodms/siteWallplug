<?php

$nome = $_GET['nome'];
$email = $_GET['email'];

$con= new PDO("mysql:host=wallplug.mysql.dbaas.com.br;dbname=wallplug","wallplug","mero2309");

$stmt = $con->prepare("INSERT INTO describe(email, nome) VALUES(:nome,:email)");
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":email", $email);
$stmt->execute();

header('location: httpd://www.wallplug.com.br');


?>