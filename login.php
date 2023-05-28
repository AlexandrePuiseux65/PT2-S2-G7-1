<?php
require_once('bin/_header.php');
require_once('bin/function.php');

if (isset($_POST["send"])) {
    $bdd = connect();
    $sql = "SELECT * FROM utilisateur INNER JOIN administrateur ON utilisateur.Adresse_email = administrateur.Adresse_email WHERE utilisateur.Adresse_email = :Adresse_email;";

    $sth = $bdd->prepare($sql);

    $sth->execute([
        'Adresse_email' => $_POST['Adresse_email']
    ]);

    $user = $sth->fetch();

    $email_admin = "admin@admin.com";
    $mdp_admin = "admin1234";

    if ($user && password_verify($_POST['Mot_de_passe'], $user['Mot_de_passe'])) {
        // dd($user);
        $_SESSION['utilisateur'] = $user;
        header('Location: user.php');
        exit;
    } elseif ($_POST['Adresse_email']== $email_admin && $_POST['Mot_de_passe']==$mdp_admin) {
        $_SESSION['administrateur'] = $user;
        header('Location: admin/index_admin.php');
        exit;
    } 
    else {
        $msg = "Email ou mot de passe incorrect !";
    }
    header('Location: ../user.php');
}
?>

<?php require_once('bin/_header.php'); ?>
<form action="" method="post">
    <div class="center_text">
        <h1>Connexion</h1>
    </div>

    <?php if (isset($msg)) {
        echo "<div>" . $msg . "</div>";
    } ?>

    <div>
        <label for="Adresse_email">Email</label>
        <input type="email" placeholder="Entrez votre email" name="Adresse_email" id="Adresse_email" />
    </div>
    <div>
        <label for="Mot_de_passe">Mot de passe</label>
        <input type="password" placeholder="Entrez votre mot de passe" name="Mot_de_passe" id="Mot_de_passe" />
    </div>
    <div class="center_element">
        <input type="submit" name="send" value="Connexion" style="width:130px" />
    </div>
</form>
</body>

</html>