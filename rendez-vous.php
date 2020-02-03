<?
    if(isset($_GET['horaire']) AND !empty($_GET['horaire']))
    {
        if(isset($_COOKIE['email']) AND isset($_COOKIE['mot_de_passe']))
        {
            $email = htmlspecialchars($_COOKIE['email']);
            $mot_de_passe = htmlspecialchars($_COOKIE['mot_de_passe']);
            $horaire = htmlspecialchars($_GET['horaire']);
            $controleur = htmlspecialchars($_GET['controleur']);
            ?>
<h2>Prendre rendez-vous</h2>
                <h3>Prenez rendez-vous grâce à cette interface.</h3>

                <form method="post" action="./index.php?page=rendez-vous&amp;action=ajouter_direct">
                    <input type="hidden" name="email" value="<? echo $email; ?>" />
                    <input type="hidden" name="mot_de_passe" value="<? echo $mot_de_passe; ?>" />
                    <input type="hidden" name="horaire" value="<? echo $horaire; ?>" />
                    <input type="hidden" name="controleur" value="<? echo $controleur; ?>" />
                    <table>
                        <tr>
                            <td class="nomcase">Modèle du Véhicule :</td>
                            <td>
                                <input type="text" name="vehicule" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Code Promo * :</td>
                            <td>
                                <input type="text" name="codepromo" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase"></td>
                            <td>
                                <input type="submit" value="Confirmer" class="bouton">
                            </td>
                        </tr>
                    </table>
                </form><br /><br />
                <p class="replacerLeFooter">
                    * Si vous ne possédez pas de code promo, laissez le champ vide.<br />
                    Sachez que vous pouvez aussi entrer votre code promo dans
                    <a href="./index.php?page=gestion_options_visiteur/principale" title="Vos Options">vos options</a> pour ne plus avoir à l’entrer par la suite.
                </p>
            <?
        }
        else
        {
            $horaire = htmlspecialchars($_GET['horaire']);
            $controleur = htmlspecialchars($_GET['controleur']);
            ?>
<h2>Prendre rendez-vous</h2>
                <h3>Prenez rendez-vous grâce à cette interface.</h3>

                <h4 class="tabuler">Formulaire simplifié :</h4><br />
                <p>
                    Si vous êtes déjà inscrit vous pouvez remplir le formulaire simple.
                </p><br /><br />
                <form method="post" action="./index.php?page=rendez-vous&amp;action=connecter_ajouter">
                    <input type="hidden" name="horaire" value="<? echo $horaire; ?>" />
                    <input type="hidden" name="controleur" value="<? echo $controleur; ?>" />
                    <table>
                        <tr>
                            <td class="nomcase">Email :</td>
                            <td>
                                <input type="text" name="email" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Mot de passe :</td>
                            <td>
                                <input type="password" name="mot_de_passe" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Modèle de Véhicule :</td>
                            <td>
                                <input type="text" name="vehicule" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Code Promo * :</td>
                            <td>
                                <input type="text" name="codepromo" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase"></td>
                            <td>
                                <input type="submit" value="Valider" class="bouton" />
                            </td>
                        </tr>
                    </table>
                </form>
                <p>
                    * Si vous ne possédez pas de code promo, laissez le champ vide.<br />
                    Sachez que vous pouvez aussi entrer votre code promo dans
                    <a href="./index.php?page=gestion_optinos_visiteur/principale" title="Vos Options">vos options</a> pour ne plus avoir à l’entrer par la suite.
                </p>
                <br /> 
                <hr />
                <br />
                <h4 class="tabuler">Formulaire complet :</h4><br />
                <p>
                    Si vous n’êtes pas inscrit vous pouvez remplir le formulaire complet.<br /><br />
                    Sachez que vous êtes inscrit dès lorsque vous prenez votre premier rendez-vous, que vous faites une demande de partenariat ou que vous remplissez un formulaire
                    de contact.
                </p><br /><br />
                <form method="post" action="./index.php?page=rendez-vous&amp;action=inscrire_ajouter">
                    <input type="hidden" name="horaire" value="<? echo $horaire; ?>" />
                    <table>
                        <tr>
                            <td class="nomcase">Titre :</td>
                            <td>
                                <select name="titre">
                                    <option value="Mr">Monsieur</option>
                                    <option value="Mlle">Mademoiselle</option>
                                    <option value="Mme">Madame</option>
                                    <option value="Dr">Docteur</option>
                                    <option value="Prof.">Professeur</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Nom :</td>
                            <td>
                                <input type="text" name="nom" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Prénom :</td>
                            <td>
                                <input type="text" name="prenom" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Mot de passe :</td>
                            <td>
                                <input type="password" name="mot_de_passe" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Modèle de véhicule :</td>
                            <td>
                                <input type="text" name="vehicule" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Code Promo :</td>
                            <td>
                                <input type="text" name="codepromo" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Téléphone :</td>
                            <td>
                                <input type="text" name="telephone" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">E-mail :</td>
                            <td>
                                <input type="text" name="email" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Adresse :</td>
                            <td>
                                <input type="text" name="adresse" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Ville :</td>
                            <td>
                                <input type="text" name="ville" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Code Postale :</td>
                            <td>
                                <input type="text" name="codepostale" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase"></td>
                            <td>
                                <input type="submit" value="Valider" class="bouton" />
                            </td>
                        </tr>
                    </table>
                </form>
                <p class="dessousformulaire">
                    Nous vous demandons toutes ces informations en partiepour que vous n’ayez plus à les taper lorsque vous remplirai un autre formulaire (rendez-vous, demande de
                    partenariat, contact…),
                </p>
            <?
        }
    }
    elseif(isset($_GET['action']))
    {
        mysql_connect("localhost", "", "");
        mysql_select_db("amarka");

        if($_GET['action'] == 'ajouter_direct')
        {
            $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
            $mot_de_passe = mysql_real_escape_string(htmlspecialchars($_POST['mot_de_passe']));
            $horaire = mysql_real_escape_string(htmlspecialchars($_POST['horaire']));
            $controleur = mysql_real_escape_string(htmlspecialchars($_POST['controleur']));
            $vehicule = mysql_real_escape_string(htmlspecialchars($_POST['vehicule']));
            $codepromo = mysql_real_escape_string(htmlspecialchars($_POST['codepromo']));
            $compte = mysql_query("SELECT COUNT(*) AS existe_deja FROM rendez_vous WHERE horaire='" . $horaire . "' AND controleur='" . $controleur . "'");
            $compteur = mysql_fetch_array($compte);
            $retour = mysql_query("SELECT email FROM rendez_vous WHERE horaire='" . $horaire . "' AND controleur='" . $controleur . "'");
            $qui = mysql_fetch_array($retour);
            if($compteur['existe_deja'] == 0) // Si le rendez-vous n’existe pas encore.
            {
                mysql_query("INSERT INTO rendez_vous VALUES('', '" . $email . "', '" . $mot_de_passe . "', '" . $horaire . "', '" . $controleur . "', '" . $vehicule . "',
                '" . $codepromo . "')");

                $retour = mysql_query("SELECT * FROM utilisateurs WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "'");
                $utilisateurs = mysql_fetch_array($retour);
                $reponse = mysql_query("SELECT * FROM rendez_vous WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "' AND horaire='" . $horaire . "' AND
                controleur='" . $controleur . "'");
                $rendez_vous = mysql_fetch_array($reponse);
                $timestamp = $rendez_vous['horaire'];
                ?>
<h2>Votre rendez-vous à été enregistré</h2>
                <h3>Votre rendez-vous à bien été enregistré sur calendrier</h3>
                <p class="tabuler">
                    Votre rendez à été enregistré avec succès.<br /><br />

                    Voici les informations que nous avons retenu :
                </p><br /><br />
                <table id="confirmation_rendez_vous">
                    <tr>
                        <td><strong>Utilisateurs</strong></td>
                        <td><? echo $utilisateurs['titre'] . ' ' . $utilisateurs['nom'];  ?></td>
                    </tr>
                    <tr>
                        <td><strong>Horaire</strong></td>
                        <td>Le <? echo date('d/m/Y', $timestamp) . ' à ' . date('H<\s\u\p>\H</\s\u\p>i', $timestamp); ?></td>
                    </tr>
                    <tr>
                        <td><strong>Durée</strong></td>
                        <td>45 Minutes</td>
                    <tr>
                        <td><strong>Véhicule</strong></td>
                        <td><? echo $rendez_vous['vehicule']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Code promo</strong></td>
                        <td><? echo $rendez_vous['codepromo']; ?></td>
                    </tr>
                </table><br /><br />
                <p class="tabuler">
                    Merci de votre confiance, et à bientôt !<br /><br />
                    → Retourner à l’<a href="./index.php" title="Page d’accueil">accueil</a> ?
                </p>
                <?
            }
            elseif($compteur['existe_deja'] > 0 AND $qui['nom'] == $nom)
            {
                ?>
<h2>Rendez-vous déjà enregistré</h2>
                <h3>Vous avez déjà enregistré ce rendez-vous</h3>
                <p>
                    Il semble que vous avez déjà enregistré ce rendez-vous précédemment.<br />
                    Cela est peut-être parce que :
                    <ul class="tabuler">
                        <li class="dansLeTexte">Vous avez envoyé deux fois d’affilé le formulaire ou rechargé la page</li>
                        <li class="dansLeTexte">Quelqu’un d’autre avec qui vous partagez ce compte a déjà enregistrer un rendez-vous à cette heure-ci.</li>
                    </ul><br />
                    Vous pouvez :
                    <ul class="tabuler">
                        <li class="dansLeTexte">Revenir à la page d’<a href="./index.php" title="Accueil">accueil</a></li>
                        <li class="dansLeTexte"><a href="./index.php?page=rendez-vous" title="Rendez-vous">Choisir une autre horaire</a></li>
                    </ul>
                </p><br /><br /><br />
                <?
            }
            elseif($compteur['existe_deja'] > 0 AND $qui['nom'] != $nom)
            {
                ?>
<h2>Rendez-vous déjà enregistré</h2>
                <h3>Quelqu’un à déjà enregistré ce rendez-vous.</h3>
                <p class="replacerLeFooter">
                    Désolé, quelqu’un à déjà pris rendez-vous à cette heure-ci, veuillez en choisir une autre.<br /><br />
                    Merci de votre compréhension.
                </p>
                <?
            }
        }
        elseif($_GET['action'] == 'connecter_ajouter')
        {
            $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
            $mot_de_passe = mysql_real_escape_string(htmlspecialchars($_POST['mot_de_passe']));
            $horaire = mysql_real_escape_string(htmlspecialchars($_POST['horaire']));
            $controleur = mysql_real_escape_string(htmlspecialchars($_POST['controleur']));
            $vehicule = mysql_real_escape_string(htmlspecialchars($_POST['vehicule']));
            $codepromo = mysql_real_escape_string(htmlspecialchars($_POST['codepromo']));
            $compte = mysql_query("SELECT COUNT(*) AS bon_mot_de_passe FROM utilisateurs WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "'");
            $utilisateurs = mysql_fetch_array($compte);
            $compte = mysql_query("SELECT COUNT(*) AS existe_deja FROM rendez_vous WHERE horaire='" . $horaire . "' AND controleur='" . $controleur . "'");
            $rendez_vous = mysql_fetch_array($compte);
            if($utilisateurs['bon_mot_de_passe'] >= 1)
            {
                if($rendez_vous['existe_deja'] == 0)
                {
                    mysql_query("INSERT INTO rendez_vous VALUES('', '" . $email . "', '" . $mot_de_passe . "', '" . $horaire . "', '" . $controleur . "', '" . $vehicule . "',
                    '" . $codepromo . "')");

                    $retour = mysql_query("SELECT * FROM utilisateurs WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "'");
                    $utilisateurs = mysql_fetch_array($retour);
                    $reponse = mysql_query("SELECT * FROM rendez_vous WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "' AND horaire='" . $horaire . "' AND
                    controleur='" . $controleur . "'");
                    $rendez_vous = mysql_fetch_array($reponse);
                    $timestamp = $rendez_vous['horaire'];
                    ?>
<h2>Votre rendez-vous à été enregistré</h2>
                <h3>Votre rendez-vous à bien été enregistré sur calendrier</h3>
                <p class="tabuler">
                    Votre rendez à été enregistré avec succès.<br /><br />

                    Voici les informations que nous avons retenu :
                </p><br /><br />
                <table id="confirmation_rendez_vous">
                    <tr>
                        <td><strong>Utilisateurs</strong></td>
                        <td><? echo $utilisateurs['titre'] . ' ' . $utilisateurs['nom'];  ?></td>
                    </tr>
                    <tr>
                        <td><strong>Horaire</strong></td>
                        <td>Le <? echo date('d/m/Y', $timestamp) . ' à ' . date('H<\s\u\p>\H</\s\u\p>i', $timestamp); ?></td>
                    </tr>
                    <tr>
                        <td><strong>Durée</strong></td>
                        <td>45 Minutes</td>
                    <tr>
                        <td><strong>Véhicule</strong></td>
                        <td><? echo $rendez_vous['vehicule']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Code promo</strong></td>
                        <td><? echo $rendez_vous['codepromo']; ?></td>
                    </tr>
                </table><br /><br />
                <p class="tabuler">
                    Merci de votre confiance, et à bientôt !<br /><br />
                    → Retourner à l’<a href="./index.php" title="Page d’accueil">accueil</a> ?
                </p>
                    <?
                }
                elseif($rendez_vous['existe_deja'] > 0 AND $qui['nom'] == $nom)
                {
                    ?>
<h2>Rendez-vous déjà enregistré</h2>
                <h3>Vous avez déjà enregistré ce rendez-vous</h3>
                <p>
                    Il semble que vous avez déjà enregistré ce rendez-vous précédemment.<br />
                    Cela est peut-être parce que :
                    <ul class="tabuler">
                        <li class="dansLeTexte">Vous avez envoyé deux fois d’affilé le formulaire ou rechargé la page</li>
                        <li class="dansLeTexte">Quelqu’un d’autre avec qui vous partagez ce compte a déjà enregistrer un rendez-vous à cette heure-ci.</li>
                    </ul><br />
                    Vous pouvez :
                    <ul class="tabuler">
                        <li class="dansLeTexte">Revenir à la page d’<a href="./index.php" title="Accueil">accueil</a></li>
                        <li class="dansLeTexte"><a href="./index.php?page=rendez-vous" title="Rendez-vous">Choisir une autre horaire</a></li>
                    </ul>
                </p><br /><br /><br />
                    <?
                }
            }
            elseif($rendez_vous['existe_deja'] > 0 AND $qui['nom'] != $nom)
            {
                ?>
<h2>Rendez-vous déjà enregistré</h2>
                <h3>Quelqu’un à déjà enregistré ce rendez-vous.</h3>
                <p class="replacerLeFooter">
                    Désolé, quelqu’un à déjà pris rendez-vous à cette heure-ci, veuillez en choisir une autre.<br /><br />
                    Merci de votre compréhension.
                </p>
                <?
            }
        }
        elseif($_GET['action'] == 'inscrire_ajouter')
        {
            $titre = mysql_real_escape_string(htmlspecialchars($_POST['titre']));
            $nom = mysql_real_escape_string(htmlspecialchars($_POST['nom']));
            $prenom = mysql_real_escape_string(htmlspecialchars($_POST['prenom']));
            $mot_de_passe = mysql_real_escape_string(htmlspecialchars($_POST['mot_de_passe']));
            $horaire = mysql_real_escape_string(htmlspecialchars($_POST['horaire']));
            $controleur = mysql_real_escape_string(htmlspecialchars($_POST['controleur']));
            $vehicule = mysql_real_escape_string(htmlspecialchars($_POST['vehicule']));
            $codepromo = mysql_real_escape_string(htmlspecialchars($_POST['codepromo']));
            $telephone = mysql_real_escape_string(htmlspecialchars($_POST['telephone']));
            $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
            $adresse = mysql_real_escape_string(htmlspecialchars($_POST['adresse']));
            $ville = mysql_real_escape_string(htmlspecialchars($_POST['ville']));
            $codepostale = mysql_real_escape_string(htmlspecialchars($_POST['codepostale']));
            $compte = mysql_query("SELECT COUNT(*) AS existe_deja FROM utilisateurs WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "'");
            $utilisateurs = mysql_fetch_array($compte);
            $compte = mysql_query("SELECT COUNT(*) AS existe_deja FROM rendez_vous WHERE horaire='" . $horaire . "' AND controleur='" . $controleur . "'");
            $rendez_vous = mysql_fetch_array($compte);
            if($utilisateurs['existe_deja'] == 0)
            {
                if($rendez_vous['existe_deja'] == 0)
                {
                    mysql_query("INSERT INTO utilisateurs VALUES(
                    '', 
                    '" . $titre . "', 
                    '" . $nom . "', 
                    '" . $prenom . "', 
                    '" . $mot_de_passe . "', 
                    '" . $telephone . "', 
                    '" . $email . "', 
                    '" . $adresse . "', 
                    '" . $ville . "', 
                    '" . $codepostale . "'");
                    mysql_query("INSERT INTO rendez_vous VALUES('', '" . $email . "', '" . $mot_de_passe . "', '" . $horaire . "', '" . $controleur . "' '" . $vehicule . "',
                    '" . $codepromo . "')");

                    $retour = mysql_query("SELECT * FROM utilisateurs WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "'");
                    $utilisateurs = mysql_fetch_array($retour);
                    $reponse = mysql_query("SELECT * FROM rendez_vous WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "' AND horaire='" . $horaire . "' AND
                    controleur='" . $controleur . "'");
                    $rendez_vous = mysql_fetch_array($reponse);
                    $timestamp = $rendez_vous['horaire'];
                    ?>
<h2>Votre rendez-vous à été enregistré</h2>
                <h3>Votre rendez-vous à bien été enregistré sur calendrier</h3>
                <p class="tabuler">
                    Votre rendez à été enregistré avec succès.<br /><br />

                    Voici les informations que nous avons retenu :
                </p><br /><br />
                <table id="confirmation_rendez_vous">
                    <tr>
                        <td><strong>Utilisateurs</strong></td>
                        <td><? echo $utilisateurs['titre'] . ' ' . $utilisateurs['nom'];  ?></td>
                    </tr>
                    <tr>
                        <td><strong>Horaire</strong></td>
                        <td>Le <? echo date('d/m/Y', $timestamp) . ' à ' . date('H<\s\u\p>\H</\s\u\p>i', $timestamp); ?></td>
                    </tr>
                    <tr>
                        <td><strong>Durée</strong></td>
                        <td>45 Minutes</td>
                    <tr>
                        <td><strong>Véhicule</strong></td>
                        <td><? echo $rendez_vous['vehicule']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Code promo</strong></td>
                        <td><? echo $rendez_vous['codepromo']; ?></td>
                    </tr>
                </table><br /><br />
                <p class="tabuler">
                    Merci de votre confiance, et à bientôt !<br /><br />
                    → Retourner à l’<a href="./index.php" title="Page d’accueil">accueil</a> ?
                </p>
                    <?
                }
                elseif($rendez_vous['existe_deja'] > 0)
                {
                    ?>
<h2>Rendez-vous déjà enregistré</h2>
                <h3>Quelqu’un à déjà enregistré ce rendez-vous.</h3>
                <p class="replacerLeFooter">
                    Désolé, quelqu’un à déjà pris rendez-vous à cette heure-ci, veuillez en choisir une autre.<br /><br />
                    Merci de votre compréhension.
                </p>
                    <?
                }
            }
            elseif($utilisateurs['existe_deja'] > 0)
            {
                ?>
<h2>Utilisateurs déjà enregistré</h2>
                <h3>Quelqu’un à déjà enregistré un compte avec cette adresse email.</h3>
                <p class="replacerLeFooter">
                    Désolé, il semble qu’un utilisateur s’est déjà enregistrer avec cette adresse email, veuillez en choisir une autre<br />
                    Si vous ête la personne à avoir enregistré ce compte et que vous ne vous souvenez plus de votre mot de passe,
                    <a href="#" title="Restaurer le mot de passe">cliquez ici</a><br /><br />
                    Merci de votre compréhension.
                </p>
                <?
            }
        }
    }
    else
    {
        mysql_connect("localhost", "", "");
        mysql_select_db("amarka");
        function existeDeja($horaire, $controleur)
        {
            $compte = mysql_query("SELECT COUNT(*) AS existe_deja FROM rendez_vous WHERE horaire='" . $horaire . "' AND controleur='" . $controleur . "'");
            $rendez_vous = mysql_fetch_array($compte);
            if($rendez_vous['existe_deja'])
            {
                $existeDeja = true;
            }
            elseif($rendez_vous['existe_deja'] == 0)
            {
                $existeDeja = false;
            }
            else
            {
                $existeDeja = false;
            }
            return $existeDeja;
        }
        if(isset($_GET['chjour']) AND !empty($_GET['chjour']))
        {
            $chjour = htmlspecialchars($_GET['chjour']);
        }
        else
        {
            $chjour = 0;
        }

        $mois_aujourdhui = date('m', time());
        $jour_aujourdhui = date('d', time());
        $annee_aujourdhui = date('Y', time());
        $timestamp_rdv = mktime(8, 0, 0, $mois_aujourdhui, $jour_aujourdhui, $annee_aujourdhui);
        if($chjour < 0)
        {
            for($i = -1; $i >= $chjour; $i--)
            {
                $timestamp_rdv = $timestamp_rdv - 60 * 60 * 24;
            }
        }
        elseif($chjour > 0)
        {
            for($i = 1; $i <= $chjour; $i++)
            {
                $timestamp_rdv = $timestamp_rdv + 60 * 60 * 24;
            }
        }
        $numero_jour = date('w', $timestamp_rdv);
        $jour = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
        $numero_mois = date('m', $timestamp_rdv);
        for($i = 1; $i <= 12; $i++)
        {
            if($numero_mois == *$i)
            {
                $numero_mois == $i;
            }
        }
        $mois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>
<h2>Prendre rendez-vous</h2>
                <h3>Prenez rendez-vous grâce à cette interface.</h3>

                <p id="hautrendezvous">
                    Cliquez sur un horaire disponnible pour prendre rendez-vous<br /><br />
                    Calendrier du <? echo $jour[$numero_jour] . ' ' . date('d/m' , $timestamp_rdv) . ' ' . $mois[$numero_mois] . ' ' . date('Y', $timestamp_rdv); ?>
                </p><br /><br />
                <p>
                    <span id="jourSuivant"><a href="./index.php?page=rendez-vous&amp;chjour=<? echo $chjour + 1; ?>" title="Jour suivant">Jour suivant</a></span>
                    <span id="jourPrecedent"><a href="./index.php?page=rendez-vous&amp;chjour=<? echo $chjour - 1; ?>" title="Jour précédent">Jour précédent</a></span>
                </p>
                <table id="rdv">
                    <tr>
                        <th>Horaire</th>
                        <th>Contrôleur 1</th>
                        <th>Contre-visite</th>
                        <th>Contrôleur 2</th>
                        <th>Horaire</th>
                    </tr>
                    <?
                        for($i = 1; $i <= 15; $i++)
                        {
                    ?>
                    <tr>
                        <td class="heure"><? echo date('H<\s\u\p>\H</\s\u\p>i', $timestamp_rdv); ?></td>
                            <?
                            $existeDeja = existeDeja($timestamp_rdv, 1);
                            if($existeDeja)
                            {
                                ?>
                        <td class="rendezvouspris">Indisponnible</td>
                                <?
                            }
                            else
                            {
                                ?>
                        <td class="rendezvouslibre"><a href="./index.php?page=rendez-vous&amp;horaire=<? echo $timestamp_rdv; ?>&amp;controleur=1">Libre</a></td>
                                <?
                            }
                            $existeDeja = existeDeja($timestamp_rdv, 2);
                            if($existeDeja)
                            {
                                ?>
                        <td class="rendezvouspris">Indisponnible</td>
                                <?
                            }
                            else
                            {
                                ?>
                        <td class="rendezvouslibre"><a href="./index.php?page=rendez-vous&amp;horaire=<? echo $timestamp_rdv; ?>&amp;controleur=2">Libre</a></td>
                                <?
                            }
                            $existeDeja = existeDeja($timestamp_rdv, 3);
                            if($existeDeja)
                            {
                                ?>
                        <td class="rendezvouspris">Indisponnible</td>
                                <?
                            }
                            else
                            {
                                ?>
                        <td class="rendezvouslibre"><a href="./index.php?page=rendez-vous&amp;horaire=<? echo $timestamp_rdv; ?>&amp;controleur=3">Libre</a></td>
                                <?
                            }
                            ?>
                        <td class="heure"><? echo date('H<\s\u\p>\H</\s\u\p>i', $timestamp_rdv); ?></td>
                    </tr>
                            <?
                            $timestamp_rdv = $timestamp_rdv + 60*45;
                        }
                    ?>
                </table>

                <p class="important">
                    <b>→ Pensez à vérifier votre éclairage avant de nous confier votre véhicule !</b>
                </p><br /><br />
                <p id="boiteAInfosDroite">
                    <span class="titre">Nous sommes ouvert :</span><br /><br />
                    Du Lundi au vendredi : De 8<sup>H</sup>00 <b>à</b> 19<sup>H</sup>00.<br />
                    Le Samedi : De 8<sup>H</sup>00 <b>à</b> 17<sup>H</sup>00.
                </p><br /><br /><br /><br />
<?
    }
