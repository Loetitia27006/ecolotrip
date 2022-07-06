

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./style/inscription.css">
    <link rel="stylesheet" href="./style/header.css">
    <link rel="stylesheet" href="./style/footer.css">
</head>
<body>
    <?php include_once './includes/header.php';?>

    <h1>Deviens un triper !</h1>
    <div class="form">
        <form action="" method="post">
            
            <p><input type="email" name="email" id="" placeholder="ton adresse mail"></p>
        
            </p><input type="password" name="password" id="" placeholder="ton mot de passe"></p>
            </p><input type="password" name="password" id="" placeholder="confirme ton mot de passe"></p>
            <p class="cross" ><input class="check"type="checkbox" name="check" id="">recevoir la newsletter</p>
            <p ><button type="submit">  S'inscrire</button></p>
            <p class="connection">déjà un compte ? <a href="connexion.php">Se connecter</a></p>
        </form>
    </div>



    <?php include_once './includes/footer.php';?>
</body>
</html>