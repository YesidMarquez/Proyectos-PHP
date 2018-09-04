<?php

    if (isset($_POST["subir"]) && empty($_POST["archivo"])) {
        foreach($_FILES["archivo"] as $archivo => $valor){
           
        }

        $archivo = $_FILES["archivo"]["tmp_name"];
        $destino = "files/".$_FILES["archivo"]["name"];

        if (($_FILES["archivo"]["type"]=="image/jpeg") || ($_FILES["archivo"]["type"]=="image/png")
            && ($_FILES["archivo"]["size"]<="2097152")){
            include_once("conexion.php");
            
        else{
        
        }
    }
?>