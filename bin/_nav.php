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
        <li><a href="index.php"><img src="img/logo1.png" height="40px" width="40px" /></a></li>
        <li><a href="Product.php"> Nos Produits </a></li>
        <li><a href="register.php">Créer un compte</a></li>
        <li><a href="login.php">Connexion</a></li>
        <li><a href="shopping.php"><img src="img/panier.png" height="20px" width="20px" /></a></li>
    <?php } else { ?>
        <li><a href="user.php"><?php echo $_SESSION['user']['email'] ?></a></li>
        <li><a href="logout.php">Logout</a></li>
    <?php } ?>
</ul>
</body>
</html>
