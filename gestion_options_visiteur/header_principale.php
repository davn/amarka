<?php
    if(isset($_GET['action']) AND $_GET['action'] == 'deconnecter' AND $page == 'gestion_options_visiteur/principale')
    {
        $supprimer = time() - 3600;
        setcookie("email", "", $supprimer);
        setcookie("mot_de_passe", "", $supprimer);
        header('Location: ./index.php?page=gestion_options_visiteur/principale');
        exit();
    }
    elseif($page == 'gestion_options_visiteur/principale' AND isset($_POST['email']) AND isset($_POST['mot_de_passe']))
    {
        mysql_connect("localhost", "", ""); // Connection
        mysql_select_db("amarka");
        $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
        $mot_de_passe = mysql_real_escape_string(htmlspecialchars($_POST['mot_de_passe'])); // On récupere les variables
        $retour = mysql_query("SELECT COUNT(*) AS bon_identifiants FROM partenariat WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "'");
        $donnees_partenariat = mysql_fetch_array($retour); // On compte le nombre d’entrée ayant comme mail le mail du visiteur
        $reponse = mysql_query("SELECT COUNT(*) AS bon_identifiants FROM rendez_vous WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "'");
        $donnees_rendez_vous = mysql_fetch_array($reponse); // Pareil, on compte, mais dans une autre table.
        if($donnees_partenariat['bon_identifiants'] >= 1 OR $donnees_rendez_vous['bon_identifiants'] >= 1)
        {
            $timestamp_expiration = time() + 60*60*24*7*2;
            setcookie("email", $email, $timestamp_expiration);
            setcookie("mot_de_passe", $mot_de_passe, $timestamp_expiration);
            header('Location: ./index.php?page=gestion_options_visiteur/principale');
            exit();
        }
    }
    elseif($page == 'inscription' AND isset($_COOKIE['email']) AND isset($_COOKIE['mot_de_passe']))
    {
        header('Location: ./index.php?page=gestion_options_visiteur/principale&amp;from=inscription');
        exit();
    }
?>
