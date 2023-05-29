<?php
require_once('bin/function.php');

$bdd = connect();

$sql = "SELECT * FROM produit";

$sth = $bdd->prepare($sql);
$sth->execute();

$produit = $sth->fetchAll();

?>


<?php require_once('bin/_header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h1 class="center_text">Liste de nos produit</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>Categorie</th>
            </tr>
        </thead>

    </table>
    <?php if (!empty($produit)) { ?>
        <table>
            <tbody>
                <?php foreach ($produit as $produit) { ?>
                    <tr>
                        <td>
                            <?php echo $produit['Nom']; ?>
                        </td>
                        <td>
                            <?php echo $produit['Description']; ?>
                        </td>
                        <td>
                            <?php echo $produit['Prix']; ?>
                        </td>
                        <td>
                            <?php echo $produit['Stock']; ?>
                        </td>
                        <td>
                            <?php echo $produit['Categorie']; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>Aucun produit trouvé.</p>
    <?php } ?>
    </tbody>
    </table>
</body>

</html>