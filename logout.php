<?php
    require_once('bin/function.php');
    

    unset($_SESSION['utilisateur']);
    session_destroy();

    header('Location: index.php');
?>