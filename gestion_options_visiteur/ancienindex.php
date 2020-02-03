<?php
    if(isset($_GET['page']))
    {
        $page = htmlspecialchars($_GET['page']);
    }
    else
    {
        $page = 'principale';
    }
    if($page == 'principale')
    {
        if(isset($_POST['email']) AND isset($_POST['mot_de_passe']))
        {
            $email = htmlspecialchars($_POST['email']);
            $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);
            $timestamp_expiration = time() + 60*60*24*7*2;
            setcookie("email", $email, $timestamp_expiration);
            setcookie("mot_de_passe", $mot_de_passe, $timestamp_expiration);
        }
    }
    elseif($page == 'inscription')
    {
        if(isset($_COOKIE['email']) AND isset($_COOKIE['mot_de_passe']))
        {
            header('Location: ./index.php?page=principale');
            exit();
        }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

    <head>
        <title>Dekra Amarka - Contrôle Technique Automobile d’Orly</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="content-language" content="fr" />
        <meta name="Author" lang="fr" content="Draack" />
        <meta name="Publisher" content="Amarka" />
        <meta name="Description" content="Informez vous et prenez rendez-vous sur le site web du contrôle technique automobile d’Orly" />
        <meta name="Date" content="2008-04-28" />
        <meta name="Identifier-URL" content="http://www.amarka.fr" />
        <meta name="Keywords" lang="fr" content="Orly, Thiais, Villeneuve-le-Roi, Choisy-le-Roi, Vitry-sur-seine, Planning, rendez-vous, contrôle, technique, automobile" />
        <meta name="Robots" content="all" />
        <meta name="Generator" content="Debian, LAMP, Vim, The Gimp" />
        <meta name="Copyright" content="Amarka 2008" />
        <link rel="shortcut icon" type="image/png" href="./img/favicon.png" />
        <link rel="stylesheet" media="screen" type="text/css" title="Design par défaut" href="./../css/defaut.css" />
    </head>

    <body>
        <div id="contenu">
            <div id="banniere"> <!-- Bannière et éventuellement le nom et la description du site web -->
                <img src="./../img/camion.png" title="Bannière Dekra Amarka 2001" alt="Amarka — Planning pour le contrôle technique automobile d’Orly" />
            </div>

            <div id="menu"> <!-- Menu, liste des pages disponibles -->
                <ul>
                    <li class="listeMenuHaut" <?php
                    if($page == 'accueil')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Page d’Accueil"><a href="./../index.php">Accueil</a></li>
                    <li class="listeMenu" <?php
                    if($page == 'points-de-controle')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Les 116 points de contrôles a effectués"><a href="./../index.php?page=points-de-controle">Les 116 points de contrôles</a></li>
                    <li class="listeMenu" <?php
                    if($page == 'controle-pass')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Le contrôle pass, un avantage pour vous"><a href="./../index.php?page=controle-pass">Le Contrôle Pass</a></li>
                    <li class="listeMenu" <?php
                    if($page == 'eviter-la-contre-visite')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Évitez la contre visite"><a href="./../index.php?page=eviter-la-contre-visite">Éviter la contre visite</a></li>
                    <li class="listeMenu" <?php
                    if($page == 'rendez-vous')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Prenez rendez-vous rapidemant et facilement"><a href="./../index.php?page=rendez-vous"><strong>Prendre rendez-vous</strong></a></li>
                    <li class="listeMenu" <?php
                    if($page == 'acces')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Aidez-vous du plan d’accès pour venir au garage"><a href="./../index.php?page=acces">Plan d’accès</a></li>
                    <li class="listeMenu" <?php
                    if($page == 'tarifs')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Jetez un coup d’œil à nos tarifs"><a href="./../index.php?page=tarifs">Nos Tarifs</a></li>
                    <li class="listeMenu" <?php
                    if($page == 'partenariat' OR $page == 'validation_partenariat')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Devenez Partenaire et bénéficiez de conditions préférencielles"><a href="./../index.php?page=partenariat">Devenez Partenaire</a></li>
                    <li class="listeMenu" <?php
                    if($page == 'contact')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Contactez nous par tous les moyens possible"><a href="./../index.php?page=contact">Contactez nous</a></li>
                </ul>
                <p id="boiteAInfosGauche">
                <span id="titre">Adresse :</span><br /><br />
                <strong>Dekra Amarka 2001</strong><br />
                34 Avenue de la victoire<br />
                94310 Orly<br /><br />

                Tél : 01 58 42 91 85<br />
                Fax : 01 58 42 35 70
                </p>
            </div>

            <div id="corp"> <!-- Corp du site web, articles -->
                <?php
                    include('./' . $page . '.php');
                ?>
            </div>

            <div id="piedPage"> <!-- Pied de la page, copyright --> 
                <span id="copyright">© Amarka 2008</span>
                <span id="separateur"> — </span>
                <span id="reseau">Dekra Amarka 2001 est membre du réseau <a href="http://www.dekra-norisko.fr/">Dekra - Norisko</a></span>
            </div>
        </div>
    </body>

</html>
