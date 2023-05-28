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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="center_text">
    <?php
    echo $_SESSION['utilisateur']['Nom'];
    echo $_SESSION['utilisateur']['Prenom'];
    echo $_SESSION['utilisateur']['Adresse_postale'];
    echo $_SESSION['utilisateur']['Adresse_email'];
    echo $_SESSION['utilisateur']['Avatar'];
    ?>
</body>

</html>