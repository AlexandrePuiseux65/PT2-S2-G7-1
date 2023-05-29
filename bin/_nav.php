<?php require_once('bin/function.php');?>

<ul id="nav">
    <?php if (!isset($_SESSION['utilisateur']) && !isset($_SESSION['administrateur'])) { ?>
        <div class="nav-logo">
            <li><a href="index.php"><img src="img/logo1.png" /></a></li>
        </div>
        <div class="nav-links">
            <li><a href="Product.php">Produits</a></li>
            <li><a href="aboutus.php">À propos</a></li>
            <li><a href="register.php">Créer un compte</a></li>
            <li><a href="login.php">Connexion</a></li>
            <li><a href="shopping.php"><img src="img/panier.png" /></a></li>
        </div>

    <?php } elseif (isset($_SESSION['utilisateur'])) { ?>

        <div class="nav-logo">
            <li><a href="index.php"><img src="img/logo1.png" /></a></li>
        </div>
        <div class="nav-links">
            <li><a href="Product.php">Produits</a></li>
            <li><a href="aboutus.php">À propos</a></li>
            <li><a href="user.php"><?php echo $_SESSION['utilisateur']['Adresse_email'] ?></a></li>
            <li><a href="logout.php">Déconnexion</a></li>
            <li><a href="shopping.php"><img src="img/panier.png" /></a></li>
        </div>

    <?php } elseif (isset($_SESSION['administrateur'])) { ?>

        <div class="nav-logo">
            <li><a href="index.php"><img src="img/logo1.png" /></a></li>
        </div>
        <div class="nav-links">
            <li><a href="Product.php">Produits</a></li>
            <li><a href="add_product.php">Ajouter un produit</a></li>
            <li><a href="remove_product.php">Retirer un produit</a></li>
            <li><a href="logout.php">Déconnexion</a></li>
        </div>

    <?php } ?>
</ul>