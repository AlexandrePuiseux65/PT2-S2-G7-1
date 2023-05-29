<?php
/* 
1-  tout d'abord le premier require_once nous permet d'appeler le fichier function.php qui contient le code necéssaire pour se connecter à la base de données
2-  Ensuite on vérifie que la personne connecté est bien l'administrateur, si ce n'est pas le cas elle est redirigé vers la page login.php
3-  Quand le bouton 'Validation' est cliqué, le code à l'intérieur s'exécute :

            - En bref ce code vérifie que tous les champs sont bien remplis pour envoyer le reste.

4- Une requête Sql prépare l'ajout du produit à la page show_produit.php, une fois cela fait nous sommes redirigés sur la page show_produit.php



*/


require_once('bin/function.php');

if (!isset($_SESSION['administrateur'])) { 
    header('Location: login.php');
    exit();
}

if (isset($_POST["send"])) { 
    if ($_POST['Nom'] != "" && $_POST['Prix'] != "" && $_POST['Description'] != "" && $_POST['Stock'] != "") {
        $bdd = connect();

        $sql = "INSERT INTO produit (`Nom`, `Description`, `Prix`, `Stock`, `Categorie`, `Image`)  
        VALUES (:Nom, :Description, :Prix, :Stock, :Categorie, 'img/basic_picture.jpg');";

        $sth = $bdd->prepare($sql);

        $sth->execute([
            'Nom' => $_POST['Nom'],
            'Description' => $_POST['Description'],
            'Prix' => $_POST['Prix'],
            'Stock' => $_POST['Stock'],
            'Categorie' => 1
        ]);

        header('Location: show_produit.php');
        exit();

    }
}
?>

<?php
require_once('bin/_header.php');
?>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
        <h1 class="center_text">Ajouter un Produit</h1>
        <div>
            <label for="Nom">Nom :</label>
            <input type="text" id="Nom" name="Nom" placeholder="Entrez un nom" required />
        </div>
        <div>
            <label for="Description">Description :</label>
            <textarea name="Description" id="Description" cols="66" rows="5"
                placeholder="Remplir la description du produit" class="add-product-textarea"></textarea>
        </div>
        <div>
            <label for="Prix">Prix de vente :</label>
            <input type="number" step="0.01" id="Prix" name="Prix" placeholder="Entrez le prix du produit" required />
        </div>
        <div>
            <label for="Stock">Nombre de Produits en stock :</label>
            <input type="number" id="Stock" name="Stock" placeholder="Entrez le nombre de produits en stock" required />
        </div>
    

        <div class="center_element">
            <input type="submit" name="send" value="Validation" style="width:130px" />
        </div>
    </form>

</body>

</html>

<?php require_once('bin/_footer.php')?>