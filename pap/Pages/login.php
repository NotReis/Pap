<?php

$is_invalid = false;

 include "../Components/navbar.php";

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//get conexaologin.php info
    $mysqli = require __DIR__ . "../../Login/conexaologin.php";

//check that email matches db
    $sql = sprintf("SELECT * FROM user 
                    WHERE email = '%s'",
                    $mysqli -> real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

//get get data
    $user = $result -> fetch_assoc();

//if user is valid check password
    if ($user) {

        if (password_verify($_POST["password"], $user["password_hash"])) {
            
           //die("Login efetuado com sucesso!");
           session_start();

           session_regenerate_id();
        
           $_SESSION["user_id"] = $user["id"];

           header("Location: inicio.php");
           exit();
        }
    }

    $is_invalid = true;
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../Pages/css/login.css">
</head>
<body>

    <div class ="caixa">
        <h1>Login</h1>

        <?php if ($is_invalid):?>
        <div class="txt_error"> 
          Login Inválido
        </div>
        <?php endif; ?>

    <form method="post">
            <div class="txt_field">
                <input type="text" id="email" name="email" 
                value="<?= htmlspecialchars( $_POST["email"] ?? "") ?>" required>
                <span></span>
                <label>Email</label> 
            </div>

            <div class="txt_field">
                <input type="password" id="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>

            <div class="pass"> 
            <a href="reporpasse.php">Esqueceu-se da Password?</a>
            </div>

            <input type="submit" class="submit_login" value="Login">
            
            <div class="signup_link">
                Não é membro? <a href="signup.php">Registar</a>
            </div>
        </form>
    </div>

</body>
</html>