<?php
     session_start();  // Continuar la sesión
     if( isset($_SESSION['sesion_iniciada']) == true )
    {
        echo "COMPROBAR LOS VALORES<br />";
        echo "=======================<p />";
        print_r( $_SESSION );
        echo "<p />";
        echo "Identificador de la sesión: [".session_id()."]<br/>";
        echo "Nombre de la sesión: [".session_name()."]<p/>";
        echo "<p/>";
        echo "Nombre: ".$_SESSION['nombre']."<br/>";
        echo "Edad: ".$_SESSION['edad']."<p/>";
        echo "Nombre (en array): ".$_SESSION['aDatos']['nombre']."<br/>";
        echo "Edad (en array): ".$_SESSION['aDatos']['edad']."<p/>";
    }
    else
    {
         echo "<p>No has pasado por la página principal</p>";
    }
    echo "<a href='02_sesion1.php'>Volver a la página principal</a>";
?>