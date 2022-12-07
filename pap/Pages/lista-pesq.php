<?php 
   include "../Components/navbar.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../Pages/css/lista-pesq.css">
</head>
<body>
    
<div class="demo-description">
    <h1 class="demo-description__title">Receitas Disponíveis:</h1>
</div>

    <div class="demo coursemeal">

        <!-- APPETIZERS-->
        <div class="coursemeal__div ">
            
            <picture class="responsive-img">
                <source media="(min-width: 992px)" srcset="https://i.postimg.cc/jSTZmp8H/appetizer-img-1.jpg">
                <source media="(min-width: 767px)" srcset="https://i.postimg.cc/1RTdCYhB/appetizer-img-2.jpg">
                <source srcset="https://i.postimg.cc/TwnctQr7/appetizer-img-3.jpg">
                <img src="https://i.postimg.cc/jSTZmp8H/appetizer-img-1.jpg" alt="Appetizer" >
            </picture>     
            
            <div class="coursemeal-info">
                <a href="#" class="coursemeal-info__link">exemplo</a>
            </div>
        </div>

        <!-- MAIN COURSE-->
        <div class="coursemeal__div">
            
            <picture class="responsive-img">
                <source media="(min-width: 992px)" srcset="https://i.postimg.cc/V6NCCRK0/maindish-img-1.jpg">
                <source media="(min-width: 767px)" srcset="https://i.postimg.cc/9XYj186s/maindish-img-2.jpg">
                <source srcset="https://i.postimg.cc/pLY8dt4q/maindish-img-3.jpg">
                <img src="https://i.postimg.cc/V6NCCRK0/maindish-img-1.jpg" alt="Main Course" >
            </picture> 

            <div class="coursemeal-info">
                <a href="#" class="coursemeal-info__link">exemplo</a>
            </div>            
        </div>

        <!-- DESSERTS-->
        <div class="coursemeal__div">
            
            <picture class="responsive-img">
                <source media="(min-width: 992px)" srcset="https://i.postimg.cc/9FfLh6ZZ/dessert-img-1.jpg">
                <source media="(min-width: 767px)" srcset="https://i.postimg.cc/FsRXBnKn/dessert-img-2.jpg">
                <source srcset="https://i.postimg.cc/ZKcFCVFZ/dessert-img-3.jpg">
                <img src="https://i.postimg.cc/ZKcFCVFZ/dessert-img-1.jpg" alt="Desserts">
            </picture>

            <div class="coursemeal-info">
                <a href="#" class="coursemeal-info__link">Dessert</a>
            </div>              
        </div>


    </div>
</body>
</html>