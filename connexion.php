
<?php 
include_once './includes/header.php'; 
$title = 'ECOLOTRIP'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="./style/connexion.css">
    <link rel="stylesheet" href="./style/header.css">
    <link rel="stylesheet" href="./style/footer.css">
</head>
<body>
    
    <h1>Bon retour Triper !</h1>
    <div class="form">
        <form action="" method="post">
            
            <p><input type="email" name="email" id="" placeholder="ton adresse mail/pseudo"></p>
        
            </p><input type="password" name="password" id="" placeholder="ton mot de passe"></p>
            <p class="connection"><button type="submit">  Se connecter</button></p>
            <div class="inscription">
                <p class="mdp"><a href="#">mot de passe oublié</a></p>
                <p >pas de compte ?<a href="inscription.php">s'inscrire</a></p>
            </div>
        </form>
    </div>
 
    <?php include_once './includes/footer.php'; ?>
</body>
</html>