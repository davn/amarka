<?php
    if(!isset($_GET['annuler']) AND !isset($_POST['annuler']))
    {
        header('Location: ./index.php?page=partenariat');
        exit();
    }
?>
