<?php

//validação

if (empty($_POST["name"])) {
    die("O nome é obrigatório");
}

if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Um email válido é obrigatório");
} 

if (strlen($_POST["password"]) < 8 ) {
    die("A password tem de ter mais de 8 caracteres");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("A password deve conter pelo menos uma letra");
}

if ( ! preg_match("/[0-9]/i", $_POST["password"])) {
    die("A password deve conter pelo menos um numero");
}

if ($_POST["password"] !== $_POST["password_conf"]){
    die("As passwords devem ser iguais");
}

//encriptação da passe
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

//get info from conexaologin
$mysqli = require __DIR__ . "/conexaologin.php";

//add users to db
$sql = "INSERT INTO user(nome, email, password_hash)
    VALUES (?, ?, ?)";

//check for errors
$stmt = $mysqli->stmt_init();

if ( ! $stmt -> prepare($sql)){
    die("Erro no SQL" . $mysqli->error);
}

//post to db
$stmt-> bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash);

//verify if data is valid to login
if ($stmt->execute()){

    echo "Signed in";
    header("Location: ../Pages/login.php");
    exit;

} else {

    if ($mysqli->errno === 1062){
        die("Email em utilização");
    } else {
    die($mysqli->error . " Nº " . $mysqli->errno);
    } 
}

?>