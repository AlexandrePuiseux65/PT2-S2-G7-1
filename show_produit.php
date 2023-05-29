<?php
require_once('bin/_header.php');
require_once('bin/function.php');

$bdd = connect();

$sql = "SELECT * FROM produit";

$sth = $bdd->prepare($sql);
$sth->execute();

$perso = $sth->fetchAll();
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
    <h1 class="center_text">Liste de nos produit</h1>

</body>

</html>