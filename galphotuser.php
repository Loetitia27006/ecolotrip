<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallerie photo utilisateur</title>
    <link rel="stylesheet" href="./style/galphotuser.css">
    <link rel="stylesheet" href="./style/header.css">
    <link rel="stylesheet" href="./style/footer.css">
</head>
<body>
    <?php include_once './includes/header.php';?>
    <div class="profil">
        <h1>Ta gallerie </br>
        de souvenirs</h1>
        <div class="profil-photo">
            <div class="photouser"></div>
            <div class="pseudouser">pseudo</div>
        </div>
    </div>
    <div class="partage">
        <h1>Partage tes photos !</h1>
        <p ><button type="submit">Envoyer</button></p>
    </div>
    <section class="section1">
    <div class="container">
            <div class="card">
                <div class="photosouvenir"></div>
                <div class="lieusouvenir">lieu</div>
            </div>
            <div class="card">
                <div class="photosouvenir"></div>
                <div class="lieusouvenir">lieu</div>
            </div>
            <div class="card">
                <div class="photosouvenir"></div>
                <div class="lieusouvenir">lieu</div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="card">
                <div class="photosouvenir"></div>
                <div class="lieusouvenir">lieu</div>
            </div>
            <div class="card">
                <div class="photosouvenir"></div>
                <div class="lieusouvenir">lieu</div>
            </div>
            <div class="card">
                <div class="photosouvenir"></div>
                <div class="lieusouvenir">lieu</div>
            </div>
        
    </div>
    </section>
    <?php include_once './includes/footer.php';?>
</body>
</html>