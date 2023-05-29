<?php
require_once('bin/function.php');
$bdd = connect();

$sql = "SELECT * FROM utilisateur WHERE user_id = :user_id";

$sth = $bdd->prepare($sql);

?>
<?php 
    require_once('bin/function.php');
    require_once('bin/_header.php');
?>



<div class="user-main">

    <h1 class="user-main-h1">Mon compte client</h1>


    <div class="user-main-container1">

            <h2 class="user-main-container1-h2">Mes informations</h2>

        <div class="user-main-container1-element1">
            <p>
                <span class="info">Nom :</span>  
                <?php echo $_SESSION['utilisateur']['Nom']; ?>
            </p>    
        </div>
        <div class="user-main-container1-element1">
            <p>
                <span class="info">Prenom :</span>
                <?php echo $_SESSION['utilisateur']['Prenom']; ?>
            </p>    
        </div>

        <div class="user-main-container1-element1">
            <p>
                <span class="info">Adresse mail :</span> 
                <?php echo $_SESSION['utilisateur']['Adresse_email']; ?>
            </p>    
        </div>

        <div class="user-main-container1-element1">
            <p>
                <span class="info">Adresse postale</span>
                <?php echo $_SESSION['utilisateur']['Adresse_postale']; ?>
            </p>    
        </div>

        <div class="user-main-container1-element1">
            <p>
                <span class="info">Mot de passe :</span> 
                <?php echo $_SESSION['utilisateur']['Mot_de_passe']; ?>
            </p>    
        </div>
    </div>
   

</div>




<?php require_once('bin/_footer.php'); ?>

</html>