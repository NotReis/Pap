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

        <link rel="stylesheet" href="../Pages/css/inicio.css">
        <script src="../Components/js/navbar.js"></script>
        <script src="../Pages/js/inicio.js"></script>
    </head>
    <body>

    <section>
        <div class="big_circle"></div>
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>
        <div class="circle circle4"></div>
        <div class="circle circle5"></div>
        <div class="circle circle6"></div>
        <div class="circle circle7"></div>

    <div class="content">
        <div class="textbox">
            <h2>Make it! <br> <span> Drink </span>it!</h2>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
            </p>
            <a href="#">Fazer uma receita</a>  
        </div>

        <!-- Copo -->
        <div class="imgbox">
            <div>
                <img src="img/PngItem_7054181.png" class="copo"> 
            </div>

        </div>

    </div>
    <!-- Wave -->
    <div class="wave">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
    </div>

    </section>
    
     <!-- Checkbox -->

    <?php  
        $ingredientes = array('Ingrediente1', 'Ingrediente2', 'Ingrediente3', 'Ingrediente4', 'Ingrediente5');
        $arr = [];



        if(isset($_POST['submit'])){
           $arr = $_POST['ing'];

           //echo $arr;
           echo implode(", ", $arr);
        }

    ?>

     <form method="POST">
     
    <div class="grid-container">

        <div class="limpar">
        <input type="submit" onclick="uncheck()" class="limpar_btn" id="limparId" value="Limpar" name="Limpar"/> 
        </div>


        <div class="caixa">

            <?php foreach($ingredientes as $list) { ?>
                <!-- verifica se algum campo da $list está no $arr-->
  
                        <div class="item">
                            <div class="checkbox-rect2">
                                <!-- "Id" e "For" atribuir a checkbox á label / "value" para mostrar as boxes selecionadas-->
                                <!-- check= "checked"-->
                                <?php if(in_array($list, $arr)){

                                 ?> <input type="checkbox" checked id="<?php echo $list?>" value="<?php echo $list?>" name="ing[]"> <!-- [] para contar o array-->
                                  <label for="<?php echo $list?>"> <?php echo $list?> </label>

                               <?php } else { ?>

                                <input type="checkbox"  id="<?php echo $list?>" value="<?php echo $list?>" name="ing[]"> <!-- [] para contar o array-->
                                <label for="<?php echo $list?>"> <?php echo $list?> </label>

                                <?php } ?>
                            </div>
                        </div>
                        

            <?php } ?>

        </div>
    </div>
    
    <input type="submit" value="submit" name="submit"/> 

    </form>
    </body>
</html>



