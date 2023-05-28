<ul id="nav">
    <?php if (!isset($_SESSION['utilisateur'])) { ?>
        <div class="nav-logo">
            <li><a href="index.php"><img src="img/logo1.png"/></a></li>
        </div>
        <div class="nav-links">
            <li><a href="Product.php"> Nos Produits </a></li>
            <li><a href="aboutus.php">À propos</a></li>
            <li><a href="register.php">Créer un compte</a></li>
            <li><a href="login.php">Connexion</a></li>
            <li><a href="shopping.php"><img src="img/panier.png"/></a></li>
        </div>
        
    <?php } else { ?>
        <div class="nav-logo">
            <li><a href="index.php"><img src="img/logo1.png"/></a></li>
        </div>
        <div class="nav-links">
            <li><a href="Product.php">Produits</a></li>
            <li><a href="aboutus.php">À propos</a></li>
            <li><a href="user.php"><?php echo $_SESSION['utilisateur']['Adresse_email'] ?></a></li>
            <li><a href="logout.php">Déconnexion</a></li>
            <li><a href="shopping.php"><img src="img/panier.png"/></a></li>
        </div>
       
    <?php } ?>
</ul>
