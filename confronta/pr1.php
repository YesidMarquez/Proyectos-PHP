<?php
    require("../mod_config/conexion.php");
    //Iniciar Sesión
    session_start();
       
    //Validar si se está ingresando con sesión correctamente
    if (!$_SESSION){
    echo '<script language = javascript>
    alert("usuario no autenticado")
    self.location = "../../index.html"
    </script>';
    }    
     
    $id=$_SESSION['cedula'];
    $nombre = $_SESSION['nombre'];
    $apellido=$_SESSION['apellido']; 
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript">
    function validate_password()
    {
        //Cogemos los valores actuales del formulario
        pasActual=document.formName.passwordActual;
        pasNew1=document.formName.passwordNew1;
        pasNew2=document.formName.passwordNew2;
        //Cogemos los id's para mostrar los posibles errores
        id_epassActual=document.getElementById("epasswordActual");
        id_epassNew=document.getElementById("epasswordNew1");

        //Patron para los numeros
        var patron1=new RegExp("[0-9]+");
        //Patron para las letras
        var patron2=new RegExp("[a-zA-Z]+");

        if(pasNew1.value==pasNew2.value && pasNew1.value.length>=6 && pasActual.value!="" && pasNew1.value.search(patron1)>=0 && pasNew1.value.search(patron2)>=0){
            //Todo correcto!!!
            return true;
        }else{
            if(pasNew1.value.length<6)
                id_epassNew.innerHTML="La longitud mínima tiene que ser de 6 caracteres";
            else if(pasNew1.value!=pasNew2.value)
                id_epassNew.innerHTML="La copia de la nueva contraseña con coincide";
            else if(pasNew1.value.search(patron1)<0 || pasNew1.value.search(patron2)<0)
                id_epassNew.innerHTML="La contraseña tiene que tener numeros y letras";
            else
                id_epassNew.innerHTML="";
            if(pasActual.value=="")
                id_epassActual.innerHTML="Indicar tu contraseña actual";
            else
                id_epassActual.innerHTML="";
            return false;
        }
    }
  </script>
</head>
<body>
  <form name="../config/cambiopw.php" action="" method="POST" onsubmit='return validate_password()'>
  
    <div>Cedula: <input value="<?php echo  $id ?>" readonly="readonly"/></div>
    <div>Nombres: <input value="<?php echo $nombre." ".$apellido ?>" readonly="readonly"/></div>
    <div id="epasswordActual" style="color:#f00;"></div>
    <div>Password Actual: <input type="password" name="oldPw"/></div>
    <div>Nuevo Passowrd: <input type="password" name="newPw"/></div>
    <div>Repite Passowrd: <input type="password" name="newPw1"/></div>
    <div id="epasswordNew1" style="color:#f00;"></div>
    <div><input type="submit" value="enviar"/></div>
  </form>
</body>
</html>