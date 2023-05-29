<?php
    require_once('bin/function.php');

    $bdd = connect();

    $sql = "SELECT * FROM produit";

    $sth = $bdd->prepare($sql);
    $sth->execute();

    $produit = $sth->fetchAll();

?>

<?php require_once('bin/_header.php'); ?>

<div class="shproduct-main">


    <?php if (!empty($produit) && !isset($_SESSION['administrateur'])) { ?>

        <?php foreach ($produit as $produit) { ?>
            <div class="shproduct-container">

                <img src=<?php echo $produit['Image'] ?> alt="">

                <div class="shproduct-container-element1">
                    <h3>
                        <?php echo $produit['Nom']; ?>
                    </h3>

                    <p>
                        <?php echo $produit['Description']; ?>
                    </p>

<<<<<<< HEAD
                <a href="details_product.php?id=<?php echo $produit['ID']?>">En savoir plus</a>
=======
                    <a href="">En savoir plus</a>
>>>>>>> 202e3f9 (Supprimer fonctionnelle / Alex)

                    <p class="shproduct-container-element1-price">
                        <?php echo $produit['Prix']; ?>€
                    </p>
                </div>
            </div>
        <?php } ?>
    <?php } elseif (!empty($produit)) {

        foreach ($produit as $produit) { ?>
            <div class="shproduct-container">

                <img src="<?php echo $produit['Image']; ?>" alt="">

                <div class="shproduct-container-element1">
                    <h3>
                        <?php echo $produit['Nom']; ?>
                    </h3>

                    <p>
                        <?php echo $produit['Description']; ?>
                    </p>

                    <a href="">En savoir plus</a>

                    <p class="shproduct-container-element1-price">
                        <?php echo $produit['Prix']; ?>€
                    </p>
                    <a href="remove_product.php?ID=<?php echo $produit['ID']; ?>" onClick="return confirm('Etes-vous sûr ?');">Supprimer</a>
                </div>
            </div>
        <?php }
    } else {

    } ?>

    <?php require_once('bin/_footer.php'); ?>