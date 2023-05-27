<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul id="nav">
    <?php if (!isset($_SESSION['user'])) { ?>
        <li><a href="index.php"> Accueil</a></li>
        <li><a href="sign_in_up.php">Connexion</a></li>
        <li><a href="shopping_basket.php">Pannier</a></li>
    <?php } else { ?>
        <li><a href="persos.php"><?php echo $_SESSION['user']['email'] ?></a></li>
        <li><a href="logout.php">Logout</a></li>
    <?php } ?>
</ul>
</body>
</html>
