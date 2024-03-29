<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    
    <link rel="stylesheet" href="./style/header.css">
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./includes/slider/slide.css">
    <link rel="stylesheet" href="./includes/formSearch/form.css">
    <link rel="stylesheet" href="./style/footer.css">
</head>

<body>

    <section class="section1">

        <?php include_once './includes/header.php'; ?>


        <h1>Le very best trip de ta </br> vie commence ici</h1>

        <?php include_once './includes/formSearch/form.php'; ?>

    </section>

    <?php include_once './includes/slider/slide.php'; ?>

    <div class="offer"><img src="images/offres.png" alt=""></div>
    <section class="travel">
        <h2>Nos voyages les plus écolos</h2>
        <h2>Les villes les plus populaires de France</h2>
    </section>
    <section class="avantage">
        <h3>Les avantages d'utiliser écolotrip</h3>
        <div class="avantages">
            <div class="possible">
                <img src="./images/avion.svg" alt="">
                <p>Des destinations de voyages variées et attractives</p>
            </div>
            <div class="possible">
                <img src="./images/écologie-non-3d.svg" alt="">
                <p>Possibilité de rembourser son empreinte carbone</p>
            </div>
            <div class="possible">
                <img src="./images/photos-non-3d.svg" alt="">
                <p>Enregistrer ses photos sur son profil et faire profiter ses amis avec une présentation personnalisée</p>
            </div>
        </div>
    </section>
    <section class="newsletter">
        <form class="news" action="" method="post">
            <p>Recevez les dernières informations voyages sur votre boite mail<img src="./images/Mail.svg" alt=""></p>

            <input type="text" name="mail" placeholder="Saisissez votre adresse e-mail">
            <button>S'inscrire</button>
        </form>
    </section>

    <?php require "includes/footer.php"; ?>

    
</body>

</html>