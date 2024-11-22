<!-- bienvenido.php -->
<?php  
    session_start();

    //si no existe session//
    if(!isset($_SESSION['user'])){
        echo '
            <script> 
                alert("Inicia sesion para ingresar");
                window.location = "index.php";
            </script>
        '; 
        session_destroy();
        die();
    }
?>
<?php



include 'views/header.php';


include 'views/container.php';


include 'views/footer.php';
?>


