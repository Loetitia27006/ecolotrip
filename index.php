<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="./style/header.css">
    <link rel="stylesheet" href="./style/index.css">
</head>
<body>

    <section class="section1">
        
    <?php include_once './includes/header.php';?>


        <h1>Le very best trip de ta </br> vie commence ici</h1>
        
         
        <div class="subtext">
            <a class="typeTravel" href="#">Séjours</a>
            <a class="typeTravel2" href="#">Hébergement </a>
            <a class="typeTravel2" href="#">Transport</a> 
        </div>
        <div class="form">

 

            <form action="index.php" method="post">
                <div class="search">
                    <input type="text" name="search" placeholder="Départ">
                    <input type="text" name="search" placeholder="Destination">
                </div>
                <div class="date">
                    <input type="text" name="date" placeholder="Date de départ">
                    <input type="text" name="date" placeholder="Date de retour">
                    <input type="number" name="voyageurs" id="" min="1" placeholder="voyageur">
                </div>
                <div class="button">
                    <button>Valider</button>
                </div>
            </form>
        </div>


    </section>
    
    <div class="wrapper">
        
        <div class="slider">
        <div class="arrowLeft"></div>
            <div class="slide">
                <img src="./images/campagne.svg" alt="">
                <img src="./images/mer.svg" alt="">            
                <img src="./images/voiture.svg" alt="">
                <img src="./images/ville.svg" alt="">
                <img src="./images/montagne.svg" alt="">
                <img src="./images/foret.svg" alt="">
                <img src="./imgages/bus.svg" alt="">
                <img src="./images/avion.svg" alt="">
                <img src="./images/bateau.svg" alt="">
                <img src="./images/velo.svg" alt="">
                <img src="./images/camping.svg" alt="">
            </div>
            <div class="slide">
                <img src="./images/campagne.svg" alt="">
                <img src="./images/mer.svg" alt="">      
                <img src="./images/voiture.svg" alt="">
                <img src="./images/ville.svg" alt="">
                <img src="./images/montagne.svg" alt="">
                <img src="./images/foret.svg" alt="">
                <img src="./imgages/bus.svg" alt="">
                <img src="./images/avion.svg" alt="">
                <img src="./images/bateau.svg" alt="">
                <img src="./images/velo.svg" alt="">
                <img src="./images/camping.svg" alt="">
            </div>
            <div class="arrowRight"></div>
        </div>
        
        
        
        
    </div>
        
        

<?php require "includes/footer.php";?>


</body>
</html>
