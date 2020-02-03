<?php
    if(isset($_GET['page']) AND !empty($_GET['page']))
    {
        $page = htmlspecialchars($_GET['page']);
    }
    else
    {
        $page = 'accueil';
    }

    if($page == 'validation_partenariat')
    {
        include('header_validation_partenariat.php');
    }
    elseif($page == 'confirmation_annuler')
    {
        include('header_confirmation_annuler.php');
    }
    elseif($page == 'gestion_options_visiteur/principale' OR $page == 'gestion_options_visiteur/inscription')
    {
        include('gestion_options_visiteur/header_principale.php');
    }

    /*function pageActuelle($nomPage)
    {
        if($page == $nomPage)
        {
            echo 'id="pageActuelle" ';
        }
    }*/
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
        <link rel="stylesheet" media="screen" type="text/css" title="Design par défaut" href="./css/defaut.css" />
    </head>

    <body>
        <span id="top"></span>
        <div id="contenu">
            <div id="banniere"> <!-- Bannière, nom et description du site web -->
                <img src="./img/camion.png" title="Bannière Dekra Amarka 2001" alt="Amarka — Planning pour le contrôle technique automobile d’Orly" />
            </div>

            <div id="menu"> <!-- Menu, liste des pages disponibles -->
                <p id="options">
                <a href="./index.php?page=gestion_options_visiteur/principale" title="Vos Options">Vos options</a>
                </p>
                <ul>
                    <li class="listeMenuHaut" <?php
                    if($page == 'accueil')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Page d’Accueil"><a href="./index.php">Accueil</a></li>
                    <li class="listeMenu" <?php
                    if
                    (
                        $page == 'points-de-controle' OR
                        $page == 'points-de-controle/id-vehicule' OR
                        $page == 'points-de-controle/auto-ecoles' OR
                        $page == 'points-de-controle/direction' OR
                        $page == 'points-de-controle/equipements' OR
                        $page == 'points-de-controle/freinage' OR
                        $page == 'points-de-controle/liaison-au-sol' OR
                        $page == 'points-de-controle/organes-mecaniques' OR
                        $page == 'points-de-controle/pollution-sonorite' OR
                        $page == 'points-de-controle/structure-carrosserie' OR
                        $page == 'points-de-controle/taxis' OR
                        $page == 'points-de-controle/vehicule-depannage' OR
                        $page == 'points-de-controle/vehicule-transport-sanitaire' OR
                        $page == 'points-de-controle/visibilite' OR
                        $page == 'points-de-controle/vltp' OR
                        $page == 'points-de-controle/eclairage-signalisation'
                    )
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Les 116 points de contrôles a effectués"><a href="./index.php?page=points-de-controle">Les 116 points de contrôles</a></li>
                    <li class="listeMenu" <?php
                    if($page == 'controle-pass')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Le contrôle pass, un avantage pour vous"><a href="./index.php?page=controle-pass">Le Contrôle Pass</a></li>
                    <li class="listeMenu" <?php
                    if($page == 'eviter-la-contre-visite')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Évitez la contre visite"><a href="./index.php?page=eviter-la-contre-visite">Éviter la contre visite</a></li>
                    <li class="listeMenu" <?php
                    if($page == 'rendez-vous')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Prenez rendez-vous rapidement et facilement"><a href="./index.php?page=rendez-vous"><strong>Prendre rendez-vous</strong></a></li>
                    <li class="listeMenu" <?php
                    if($page == 'tarifs')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Jetez un coup d’œil à nos tarifs"><a href="./index.php?page=tarifs">Nos Tarifs</a></li>
                    <li class="listeMenu" <?php
                    if($page == 'partenariat' OR $page == 'validation_partenariat')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Devenez Partenaire et bénéficiez de conditions préférencielles"><a href="./index.php?page=partenariat">Devenez Partenaire</a></li>
                    <li class="listeMenu" <?php
                    if($page == 'contact')
                    {
                        echo 'id="pageActuelle" ';
                    }
                    ?>title="Contactez nous par tous les moyens possible"><a href="./index.php?page=contact">Contactez nous</a></li>
                </ul>
                <p id="boiteAInfosGauche" title="Aidez-vous du plan d’accès pour venir au garage">
                <a href="./index.php?page=acces" id="acces">
                    <span id="titre">Adresse :</span><br /><br />
                    <strong>Dekra Amarka 2001</strong><br />
                    34 Avenue de la victoire<br />
                    94310 Orly<br /><br />

                    Tél : 01 58 42 91 85<br />
                    Fax : 01 58 42 35 70<br /><br />

                    <span id="acces">→ Voir le plan d’accès</span>
                </a>
                </p>
            </div>

            <div id="corp"> <!-- Corp du site web, articles -->
                <?php
                    include('./' . $page . '.php');
                ?>
            </div>

            <div id="piedPage"> <!-- Pied de la page, copyright --> 
                <span id="copyright">© Amarka 2008</span>
                <span id="separateur">  —  </span>
                <span id="reseau">Dekra Amarka 2001 est membre du réseau  <a href="http://www.dekra-norisko.fr/">Dekra - Norisko</a></span>
            </div>
        </div>
        <?
            if
            (
                $page == 'points-de-controle/id-vehicule' OR
                $page == 'points-de-controle/auto-ecoles' OR
                $page == 'points-de-controle/direction' OR
                $page == 'points-de-controle/equipements' OR
                $page == 'points-de-controle/freinage' OR
                $page == 'points-de-controle/liaison-au-sol' OR
                $page == 'points-de-controle/organes-mecaniques' OR
                $page == 'points-de-controle/pollution-sonorite' OR
                $page == 'points-de-controle/structure-carrosserie' OR
                $page == 'points-de-controle/taxis' OR
                $page == 'points-de-controle/vehicule-depannage' OR
                $page == 'points-de-controle/vehicule-transport-sanitaire' OR
                $page == 'points-de-controle/visibilite' OR
                $page == 'points-de-controle/eclairage-signalisation'
            )
            {
                ?>
        <a href="#top" title="Remonter" id="remonter">↑↑↑</a>
                <?
            }
        ?>
    </body>

</html>
