<?php

$hostname = "localhost"; 
$database = "pap";
$user = "root"; 
$password = ""; 
 

$mysqli = new mysqli(
$hostname,
$user, 
$password,
$database);

 
//verificar erros
if ($mysqli -> connect_errno){
    die("Erro de conexão:" . $mysqli -> connect_error);
}
 
return $mysqli;

?>