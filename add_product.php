<?php
require_once('bin/function.php');

if (!isset($_SESSION['administrateur'])) {
    header('Location: login.php');
    exit(); 
}

if (isset($_POST["send"])) {
    if ($_POST['Nom'] != "" && $_POST['Prix'] != "" && $_POST['Description'] != "" && $_POST['Stock'] != "") {
        $bdd = connect();

        $sql = "INSERT INTO produit (`Nom`, `Description`, `Prix`, `Stock`, `Categorie`)  
            VALUES (:Nom, :Description, :Prix, :Stock, :Categorie);";

        $sth = $bdd->prepare($sql);

        $sth->execute([
            'Nom' => $_POST['Nom'],
            'Description' => $_POST['Description'],
            'Prix' => $_POST['Prix'],
            'Stock' => $_POST['Stock'],
            'Categorie' => 1,

        ]);

        header('Location: Product.php');
        exit(); 
    }
}
?>

<?php
require_once('bin/_header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h1 class="center_text">Ajouter un Produit</h1>
        <div>
            <label for="Nom">Nom :</label>
            <input type="text" id="Nom" name="Nom" placeholder="Entrez un nom" required />
        </div>
        <div>
            <label for="Description">Description :</label>
            <textarea name="Description" id="Description" cols="66" rows="5" placeholder="Remplir la description du produit"></textarea>
        </div>
        <div>
            <label for="Prix">Prix de vente :</label>
            <input type="number" step="0.01" id="Prix" name="Prix" placeholder="Entrez le prix du produit" required />
        </div>
        <div>
            <label for="Stock">Nombre de Produits en stock :</label>
            <input type="number" id="Stock" name="Stock" placeholder="Entrez le nombre de produits en stock" required />
        </div>
        <!-- <div>
            <label for="Categorie">Catégorie du produit :</label>
            <input type="text" id="Categorie" name="Categorie" placeholder="Entrez la catégorie du produit" required />
        </div> -->

        <div class="center_element">
            <input type="submit" name="send" value="Validation" style="width:130px" />
        </div>
    </form>

</body>

</html>