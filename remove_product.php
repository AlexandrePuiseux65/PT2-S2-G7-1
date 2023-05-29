<?php 
    require_once('bin/function.php');

    if (!isset($_SESSION['administrateur'])) {
        header('Location: login.php');
        exit(); 
    }

    if (!isset($_GET['ID'])) {
        header('Location: Product.php?msg=id non passé !');
    }

    $bdd = connect();

    $sql="DELETE FROM produit WHERE ID = :ID";

    $sth = $bdd->prepare($sql);
        
    $sth->execute([
        'ID'          => $_GET['ID'],
    ]);

    header('Location: Product.php?msg=Le produit est bien supprimé !');