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

    <section class="section_int">
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
            <a href="#submit">Fazer uma receita</a>  
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

        <!-- Checkbox -->
    </section>

    <section class="section_lista">

        
        <?php
            include("../Login/conexaologin.php"); 
            
            $query = "SELECT * FROM ingredientes"; 
            $query2 = "SELECT * FROM grupo_ing"; 

            $result = $mysqli->query($query); 
            $result2 = $mysqli->query($query2);
            
            $quantidade_grupos = $result2->fetch_all(); 

            $linha = $result->fetch_array(); 

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

                <?php
                

                // print_r($quantidade_grupos);


                // O primeiro indice indica a linha, o segundo indica o campo
                // [linha][grupo]
                // print $quantidade_grupos[1][1];    
                for($i = 0; $i<count($quantidade_grupos); $i++){
                    

                    $id_grupo = $quantidade_grupos[$i][0];
                    $nome_grupo = $quantidade_grupos[$i][1];
                    
                    echo "<h1 class='nome-grupo'>$nome_grupo</h1>";
                    // print_r($quantidade_grupos);

                    echo "<div class='caixa'>"; 
                    
                    while($list = $result ->fetch_array()) { 

                        $id_grupo_ingredientes =  $list["idgrupo"]; 
                        $ingrediente = $list["ingrediente"]."\n";   

                        if($id_grupo_ingredientes == $id_grupo){?>
                             

                            <div class="item">
                                <div class="checkbox-rect2">
                                    <!-- "Id" e "For" atribuir a checkbox á label / "value" para mostrar as boxes selecionadas-->
                                    <!-- check= "checked"-->
                                    <?php if(in_array($list, $arr)){

                                    ?> <input type="checkbox" checked id="<?php echo $ingrediente?>" value="<?php echo $ingrediente?>" name="ing[]"> <!-- [] para contar o array-->
                                    <label for="<?php echo $ingrediente?>"> <?php echo $ingrediente?> </label>

                                <?php } else { ?>

                                    <input type="checkbox"  id="<?php echo $ingrediente?>" value="<?php echo $ingrediente?>" name="ing[]"> <!-- [] para contar o array-->
                                    <label for="<?php echo $ingrediente?>"> <?php echo $ingrediente?> </label>

                                    <?php } ?>
                                </div>
                            </div>
                       <?php }
                     }

                     echo "</div>";


                }
                // Precorre o primeiro query

              ?>


            <div class="submit">
            <input type="submit" value="Submit" name="submit" class="submit_btn"/> 
            </div>

        </div>
        </form>
        
        <section class="puxa"></section>
        
    </section>
    </body>
</html>



