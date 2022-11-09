

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="css\style.css">
    <script src= "js\javaa.js" defer> </script>
   
</head>

<body>

    <div class="procurar-wrapper">
        <label for="procurar"> Procurar alimentos</label>
        <input type="procurar" id="procurar" data-procurar>
    </div>

    <div class="alimentos-btn" data-alimento-button-container>
        <template data-alimentos-template>
            <div class="btn">
                <form method="POST">  
                    <button type="submit" name="button" class="button" onclick="teste()" data-header></button>   
                </form>
            </div>
        </template>

        
    </div>

    <?php


$people_json = file_get_contents("json\aaa.json");
 
$decoded_json = json_decode($people_json, true);

$countries = $decoded_json['countries'];
 
foreach($countries as $country) {
    echo $country['name'] . " ";
}
?>
<br>
<?php 
include "conexao.php";
?>



</body>
</html>