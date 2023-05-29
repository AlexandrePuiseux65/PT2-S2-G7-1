<?php require_once('bin/function.php');
 
$bdd = connect();

$sql = "SELECT * FROM produit";

$sth = $bdd->prepare($sql);
$sth->execute();

$produit = $sth->fetchAll();

?>

<?php require_once('bin/_header.php');?>

<div class="shopping-main">

    <h1>Mon pannier</h1>

    <h2>Mes articles</h2>

    <div class="shopping-main-content">

    
    

    </div>

</div>






<?php require_once('bin/_footer.php');?>