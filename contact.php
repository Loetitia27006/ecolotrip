<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./style/contact.css">
    <link rel="stylesheet" href="./style/header.css">
    <link rel="stylesheet" href="./style/footer.css">
</head>
<body>
    <?php include_once './includes/header.php';?>
    <h1>Contactez nous</h1>
    <div class="form">
        <form action="" method="post">
            <p><input type="text" name="email" id="" placeholder="ton adresse mail"></p>
            <p><input type="text" name="mail" id="" placeholder="ton nom"></p>
            <p><input type="text" name="subject" id="" placeholder="sujet"></p>
            <p><textarea name="message" id="" cols="30" rows="10" placeholder="message"></textarea></p>
            <p><button type="submit">  Envoyer</button></p>
        </form>
    </div>
    
    <?php include_once './includes/footer.php';?>
</body>
</html>