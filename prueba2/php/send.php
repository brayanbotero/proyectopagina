<?php
include("php/conexion.php");
if(isset($_POST['send'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['number']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['fecha']) >= 1 &&
        strlen($_POST['mensaje']) >= 1 
    ){
        $name = trim($_POST['name']);
        $number = trim($_POST['number']);
        $email = trim($_POST['email']);
        $fecha = trim($_POST['fecha']);
        $mensaje = trim($_POST['mensaje']);
        $reserva = "INSERT INTO datos(nombre, telefono, email, fecha, mensaje) 
        values ('$name', '$number', '$email', '$fecha', '$mensaje') ";
        $resultado = mysqli_query ($conexion, $reserva);



    }
}
?>