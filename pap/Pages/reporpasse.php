<?php 
    include "../Components/navbar.php";
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
        <h1>Repor Password</h1>

    <form method="post">
            <div class="password_txt">
                Insira o seu email para repor a password</a>
            </div>

            <div class="password_txt2">
                Será-lhe enviado um email caso este seja válido <br> Será reencaminhado para o inicio</a>
            </div>

            <div class="txt_field">
                <input type="text" id="email" name="email" required>
                <span></span>
                <label>Email</label>
            </div>

            <input type="submit"  class="submit_login" value="Repor palavra passe">
            <div class="signup_link">
               
            </div>
        </form>
    </div>

</body>
</html>