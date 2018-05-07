<?php
ini_set('display_errors', 0);
session_start();
// My database Class called myDBC
class myDBC {
	// our mysqli object instance
	public $mysqli = null;
 	
 	// Class constructor override
	public function __construct() {
  
		include_once "dbconfig.php";        
    	$this->mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
 
		if ($this->mysqli->connect_errno) {
			echo "Error MySQLi: ("&nbsp. $this->mysqli->connect_errno.") " . $this->mysqli->connect_error;
			exit();
		}
		$this->mysqli->set_charset("utf8"); 
	}
 
	// Class deconstructor override
	public function __destruct() {
		$this->CloseDB();
	}
 
	// runs a sql query
    public function runQuery($qry) {
        $result = $this->mysqli->query($qry);
        return $result;
    }
  
	// Close database connection
    public function CloseDB() {
        $this->mysqli->close();
    }
 
	// Escape the string get ready to insert or update
    public function clearText($text) {
        $text = trim($text);
        return $this->mysqli->real_escape_string($text);
    } 
	
	public function logueo($usuario, $contrasenia){
		//El password obtenido se le aplica el crypt
		//Posteriormente se compara en el query
		$pass_c = crypt($contrasenia, '_er#.lop');
		$q = "select * from usuarios where usuario='$usuario' and password='$pass_c'";
		
		$result = $this->mysqli->query($q);
		//Si el resultado obtenido no tiene nada 
		//Muestra el error y redirige al index
		if( $result->num_rows == 0)
		{
			echo'<script type="text/javascript">
				alert("Usuario o Contraseña Incorrecta");
				window.location="httP://localhost/login/index.php"
				</script>';
		}
		
		//En otro caso
		//En $reg se guarda el resultado de la consulta
		//Al segundo posición de SESION se le asigna el id del usuario
		//Redirige a página logueada 
		else{
			$reg = mysqli_fetch_assoc($result);
			$_SESSION["session"][] = $reg["id"];
			header("location:principal.php");
		}
		
	}
	
	public function agregaUsuario($nombre, $apellidos, $mail, $contras){
		
		//Selecciona el correo ingresado para validarlo, en la variable valida
		//está el resultado de la consulta
		
		$nuevo_correo = "select correo from usuarios where correo='$mail'";
		$valida = $this->mysqli->query($nuevo_correo);
		
		//Como correo es UNIQUE si valida tiene más de un resultado,
		//el correo ya estaba en la base de datos
		if($valida->num_rows > 0)
		{
			  echo'<script type="text/javascript">
				alert("Error al registrar! - Correo Duplicado - Ingresa otro");
				window.location="http://localhost/login/php/registro.php"
				</script>';
		}
		//Sino hubo correo repetido
		else
		{
			//Inserta en la BD 
			$q = "INSERT INTO usuarios (nombre, apellidos, correo, password) VALUES ('$nombre','$apellidos', '$mail', '$contras'); ";
		
			$result = $this->mysqli->query($q);
			if($result){ //Si resultado es true, se agregó correctamente
					echo'<script type="text/javascript">
						alert("Agregado Exitosamente");
						window.location="http://localhost/login/index.php"
						</script>';
			}
			else{ //Si hubo error al insertar, se avisa
				echo'<script type="text/javascript">
					 alert("Algo fallo");
					 window.location="registro.php"
					 </script>';
				
			}
		}
	}
}
	
?>
