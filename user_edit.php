<?php require_once('bin/function.php'); 

$bdd = connect();

if (!isset($_SESSION['utilisateur'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST["send"])) {
    if ($_POST['Nom'] != "" && $_POST['Prenom'] != "" && $_POST['Adresse_postale'] != "") {

        $sql = "UPDATE utilisateur SET Nom = :Nom, Prenom = :Prenom, Adresse_postale = :Adresse_postale WHERE ID = :ID;";

        $sth = $bdd->prepare($sql);

        $sth->execute([
            'Nom' => $_POST['Nom'],
            'Prenom' => $_POST['Prenom'],
            'Adresse_postale' => $_POST['Adresse_postale'],
            'ID' => $_SESSION['utilisateur']['ID']
        ]);

        header('Location: user.php');
        exit();
    }
}

$userID = $_SESSION['utilisateur']['ID'];

$sql = "SELECT Nom, Prenom, Adresse_postale FROM utilisateur WHERE ID = :ID;";
$sth = $bdd->prepare($sql);
$sth->execute([
    'ID' => $userID
]);
$userData = $sth->fetch();

// $bdd = connect();

// if (!isset($_SESSION['utilisateur'])) {
//     header('Location: login.php');
//     exit();
// }

// if (isset($_POST["send"])) {
//     if ($_POST['Nom'] != "" && $_POST['Prenom'] != "" && $_POST['Adresse_postale'] != "") {

//         $sql = "UPDATE utilisateur SET Nom = :Nom, Prenom = :Prenom, Adresse_postale = :Adresse_postale /*WHERE ID=:ID*/;";

//         $sth = $bdd->prepare($sql);

//         $sth->execute([
//             'Nom' => $_POST['Nom'],
//             'Prenom' => $_POST['Prenom'],
//             'Adresse_postale' => $_POST['Adresse_postale'],
//             // 'ID' => $_SESSION['utilisateur']['ID']
//         ]);

//         header('Location: user.php');
//         exit();
//     }
// }

// $userID = $_SESSION['utilisateur']['ID'];

// $sql = "SELECT Nom, Prenom, Adresse_postale FROM utilisateur WHERE ID=:ID;";
// $sth = $bdd->prepare($sql);
// $sth->execute([
//     'ID' => $userID
// ]);
// $userData = $sth->fetch();


?>

<?php require_once('bin/_header.php');?>

<div class="userEdit-main">

    <form class="" action="" method="post">
        <h1 class="center_text">Modifier vos informations</h1>

        <p class="center_text_p">Pour que vos informations soient changés il faut vous déconnecter et vous reconnecter.</p>

        <div >
            <label for="Nom">Nom :</label>
            <input type="text" name="Nom" id="Nom" placeholder="Entrez votre nom" required
                value="<?php echo $userData['Nom'] ?>">
        </div>

        <div class="register-form-element2">
            <label for="Prenom">Prénom :</label>
            <input type="text" name="Prenom" id="Prenom" placeholder="Entrez votre prénom" required
                value="<?php echo $userData['Prenom'] ?>">
        </div>

        <div class="register-form-element3">
            <label for="Adresse_postale">Adresse postale :</label>
            <input type="text" name="Adresse_postale" id="Adresse_postale" placeholder="Entrez votre adresse postale"
                value="<?php echo $userData['Adresse_postale'] ?>">
        </div>

        <div class="center_element">
            <input type="submit" name="send" value="Modifier" style="width:130px">
        </div>
    </form>

</div>


<?php require_once('bin/_footer.php'); ?>