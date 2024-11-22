<footer class="footer">
    <div class="footer-content container">
        <div class="link">
            <a href="#" class="logo">
                <img src="./assets/images/logo.png" alt="Logo" style="width: 100px; height: auto;">
            </a>
            <div class="link">
                <ul>
                    <li><a href="#informacion">Información</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#reservas">Reservas</a></li>
                    <!-- Botones con enlaces en lugar de formularios -->
                <li><a href="php/close_session.php" class="menu-button">Cerrar sesión</a></li>
                <li><a href="change_password.php" class="menu-button">Cambiar contraseña</a></li>
                <li><a href="php/delete_account.php" class="menu-button">Eliminar cuenta</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php include("php/send.php"); ?>
<script>
    function enviar() {
        window.location.href = "http://localhost/prueba2";
    }
</script>
</body>
</html>
