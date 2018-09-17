<?php
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=calendas;charset=utf8', 'yesid_marquez', 'Matias.2014');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
