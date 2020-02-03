<?php
    if
    (
        !isset($_POST['titre']) AND
        !isset($_POST['nom']) AND
        !isset($_POST['prenom']) AND
        !isset($_POST['mot_de_passe']) AND
        !isset($_POST['telephone']) AND
        !isset($_POST['societe']) AND
        !isset($_POST['adresse']) AND
        !isset($_POST['ville']) AND
        !isset($_POST['codepostale'])
    )
    {
        header('Location: ./index.php?page=partenariat');
        exit();
    }
?>
