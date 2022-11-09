<?php

$hostname = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "pap"; 

# Conecta á BD 
$bd = mysqli_connect( $hostname, $user, $password ) or die( "Erro na conexão" ); 

mysqli_select_db($bd, $database) or die( "Erro na seleção da bd" );

$query = "SELECT * FROM receitas"; 
$result_query = mysqli_query( $bd, $query ) or die("Erro na query");

while ($row = mysqli_fetch_array( $result_query )) 
{ 
    echo $row['id'] . " -- " . $row['ingredientes'] . " -- " . $row['preparacao'] ."<br>"; 
}



?>