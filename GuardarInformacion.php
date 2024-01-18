<?php
include("conexion.php");
$conn->select_db("tiendacafe");

$nombre = $_POST['nom'];
$email = $_POST['email'];
$pass = $_POST['pass'];

?>