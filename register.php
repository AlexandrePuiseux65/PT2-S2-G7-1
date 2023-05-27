<?php
require_once('bin/_header.php');
require_once('bin/function.php');

if (isset($_POST["send"])) {
    $bdd = connect();

    $sql = "INSERT INTO utilisateur (`Nom`, `Prenom`, `Adresse_email`, `Mot_de_passe`,`Adresse_postale`) VALUES (:Nom, :Prenom, :Adresse_email, :Mot_de_passe, :Adresse_postale);";
    $sth = $bdd->prepare($sql);
    $sth->execute([
        'Nom' => $_POST['Nom'],
        'Prenom' => $_POST['Prenom'],
        'Adresse_email' => $_POST['Adresse_email'],
        'Mot_de_passe' => password_hash($_POST['Mot_de_passe'], PASSWORD_DEFAULT),
        'Adresse_postale' => $_POST['Adresse_postale'],

    ]);


}

?>


<?php require_once('bin/_header.php'); ?>

<!-- 
    Pour la syntaxe du code css, je préfère mettre le nom du fichier concerné puis l'élement concerné
-->
<div class="background"> <!-- Pour appliquer l'effet de glass, a modifier -->

<form class="register-form" action="" method="post">
    <h1 class="register-form-h1">Création de votre compte</h1>

    <div class="register-form-element1">
        <label for="Nom">Nom :</label>
        <input type="text" name="Nom" id="Nom" placeholder="Entrez votre nom">
    </div>

    <div class="register-form-element2">
        <label for="Prenom">Prénom :</label>
        <input type="text" name="Prenom" id="Prenom" placeholder="Entrez votre prenom">
    </div>


    <div class="register-form-element3">
        <label for="Adresse_email">Email :</label>
        <input type="email" name="Adresse_email" id="Adresse_email" placeholder="Entrez votre mail">
    </div>

    <div class="register-form-element4">
        <label for="Mot_de_passe">Mot de passe :</label>
        <input type="password" name="Mot_de_passe" id="Mot_de_passe" placeholder="Entrez votre mot de passe">
    </div>

    <div class="register-form-element5">
        <label for="Adresse_postale">Adresse postale</label>
        <input type="text" name="Adresse_postale" id="Adresse_postale" placeholder="Entrez votre adresse postale">
    </div>

    <div class="register-form-element6">
        <input type="submit" name="send" value="Créer">
    </div>

    </div>

</form>


</body>

</html>