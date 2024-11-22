<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina</title>
    <link rel="icon" href="./assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/bienvenido.css">
</head>
<body>
<header class="header">
    <div class="menu container">
        <a href="#" class="logo"><img src="./assets/images/logo.png" alt="Logo"></a> 
        <input type="checkbox" id="menu" />
        <label for="menu">
            <img src="./assets/images/menu.png" class="menu-icono" alt="menu">
        </label>
        <nav class="navbar">
            <ul>
                <!-- Botones con enlaces en lugar de formularios -->
                <li><a href="php/close_session.php" class="menu-button">Cerrar sesión</a></li>
                <li><a href="change_password.php" class="menu-button">Cambiar contraseña</a></li>
                <li><a href="php/delete_account.php" class="menu-button">Eliminar cuenta</a></li>
                <!-- Resto del menú -->
                <li><a href="#informacion">Información</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#reservas">Reservas</a></li>
            </ul>
        </nav>
    </div>
</header>