<?php
require_once('bin/function.php');
$bdd = connect();

$sql = "SELECT * FROM utilisateur WHERE user_id = :user_id";

$sth = $bdd->prepare($sql);

?>
<?php require_once('bin/function.php');
require_once('bin/_header.php');
?>
<h1>Mon compte client</h1>
<!--  -->
<div class=center_text>

    <h2>Mes informations</h2>

</div>

<h4>
    Nom :
    <?php echo $_SESSION['utilisateur']['Nom']; ?>
</h4>

<h4>
    Prenom :
    <?php echo $_SESSION['utilisateur']['Prenom']; ?>
</h4>

<h4>
    Adresse mail :
    <?php echo $_SESSION['utilisateur']['Adresse_email']; ?>
</h4>

<h4>
    Adresse postale :
    <?php echo $_SESSION['utilisateur']['Adresse_postale']; ?>
</h4>

<h4>
    Mot de passe :
    <?php echo $_SESSION['utilisateur']['Mot_de_passe']; ?>
</h4>

<?php require_once('bin/_footer.php'); ?>

</html>