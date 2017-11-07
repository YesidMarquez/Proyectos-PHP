
<?php

$server   = "localhost";
$username = "root";
$password = "12345";
$database = "medisys";


$mysqli = new mysqli($server, $username, $password, $database);


if ($mysqli->connect_error) {
    die('error'.$mysqli->connect_error);
}
?>