<?php 
$localhost    = "localhost";
$username     = "root";
$password     = "";
$dbname       = "samueldb"; 
$con = mysqli_connect("$localhost","$username","$password","$dbname"); // Aqui irá conectar no host, username, password e no banco de dados.
if($con->connect_error) {    die("connection failed". $con->connect_error); } // Caso de erro, essa linha irá se executar.