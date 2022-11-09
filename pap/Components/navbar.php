<?php 
    session_start();

    if (isset($_SESSION['user_id'])) {
        $mysqli = require __DIR__ . "../../Login/conexaologin.php";

        $sql = "SELECT * FROM user
            WHERE id =  {$_SESSION['user_id']}";
            
        $result = $mysqli->query($sql);

        $user = $result -> fetch_assoc();
    }

?>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Components/css/navbar.css">

    <script src="../Components/js/navbar.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
            <nav class="nav-bar"> 
                <div class="logo">
                    <h1>Logo</h1>
                    <!--<a href="#" class="nav-link">Inicio</a>-->

                </div>
                
                <div class="nav-list">
                <ul>
                    <li class="nav-item"> <a href="../../pap/Pages/inicio.php" class="nav-link">Inicio</a> </li>
                    <li class="nav-item"> <a href="#" class="nav-link">Favoritos</a> </li>
                    <li class="nav-item"> <a href="#" class="nav-link">Sobre</a> </li>
                </ul>  
                </div>

                <div class="login-btn">
                <?php if(isset($user)): ?>
                        <a href="#">
                        <input type="submit" class="button_login" value="<?= htmlspecialchars($user["nome"])?>"/>
                        </a>

                        <div class="dropdown-content">
                            <a href="../../pap/Pages/reporpasse.php"> 
                            <img class="dropdown-icon" src="../Components/img/key-outline.svg" alt="">
                            Repor Password</a>


                            <a href="../../pap/Login/logout.php" onclick="return confirm('Deseja realmente sair?');"> 
                            <img class="dropdown-icon" src="../Components/img/log-out-outline.svg" alt="">
                            Log out</a>
                        </div>


                <?php else: ?> 

                        <!--<button><a href="../../pap/Pages/login.php">Login</a></button>-->
                        <a href="../../pap/Pages/login.php">
                        <input type="submit" class="button_login" value="Login"/>
                        </a>
                        

                <?php endif; ?>
                    </div>
                    
                <div class="mobile-menu-icon">
                    <button onclick="menuShow()"><img class="nav-icon" src="../Components/img/menu_white_36dp.svg" alt=""></button>
                </div>
            </nav>

            <div class="mobile-menu">
                <ul>
                    <li class="nav-item"> <a href="#" class="nav-link">Inicio</a> </li>
                    <li class="nav-item"> <a href="#" class="nav-link">Favoritos</a> </li>
                    <li class="nav-item"> <a href="#" class="nav-link">Sobre</a> </li>
                </ul> 
                
                <div class="login-btn">

                <?php if(isset($user)): ?>
                        <a href="#">
                        <input type="submit" class="button_login" value="<?= htmlspecialchars($user["nome"])?>"/>
                        </a>
                        <div class="dropdown-content">
                         <a href="../../pap/Pages/login.php"> Definições</a>
                            <a href="../../pap/Pages/logout.php">Log out</a>
                        </div>
                    
                <?php else: ?> 
                    
                    <a href="../../pap/Pages/login.php">
                        <input type="submit" class="button_login" value="Login"/>
                    </a>

                <?php endif; ?> 
                </div>

                </div>
            </div>
        
    </header>


</body>

</html>