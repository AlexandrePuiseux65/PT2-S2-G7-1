<?php 
require_once('bin/function.php');

if (!isset($_GET['ID'])) {
    header('Location: show_produit.php?msg=id non passé !');
    exit(); 
}

$produitID = $_GET['ID']; 

$bdd = connect();

$sql = "DELETE FROM produit WHERE ID = :ID";

$sth = $bdd->prepare($sql);
$sth->bindValue(':ID', $produitID, PDO::PARAM_INT); 

if ($sth->execute()) {
    header('Location: show_produit.php?msg=Le produit est bien supprimé !');
    exit(); 
} else {
    var_dump($sth->errorInfo());
    exit(); 
}
?>
