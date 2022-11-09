
<?php
 include "../Components/navbar.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <link rel="stylesheet" href="../Pages/css/login.css">
</head>
<body>

    
    <div class ="caixa">
        <h1>Registar</h1>
        <form action="../Login/validar-signup.php" method="post" novalidade>
            <div class="txt_field">
                <input type="text" id="name" name="name" required>
                <span></span>
                <label>Nome próprio</label>
            </div>

            <div class="txt_field">
                <input type="email" id="email" name="email" required>
                <span></span>
                <label>Email</label>
            </div>

            <div class="txt_field">
                <input type="password" id="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>

            <div class="txt_field">
                <input type="password" id="password_conf" name="password_conf" required>
                <span></span>
                <label>Confirmação Password</label>
            </div>

            <input type="submit" class="submit_login" value="Registar">
                
            <div class="signup_link">
                <a href="login.php">Voltar</a>
            </div>  
            </div>
        </form>
    </div>

</body>
</html>