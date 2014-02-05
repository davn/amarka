<?
    if(isset($_GET['horaire']) AND !empty($_GET['horaire']))
    {
        if(isset($_COOKIE['email']) AND isset($_COOKIE['mot_de_passe']))
        {
            $email = htmlspecialchars($_COOKIE['email']);
            $mot_de_passe = htmlspecialchars($_COOKIE['mot_de_passe']);
            $horaire = htmlspecialchars($_GET['horaire']);
            if($horaire > 15)
            {
                $horaire = 15;
            }
            elseif($horaire < 1)
            {
                $horaire = 1;
            }
            ?>
<h2>Prendre rendez-vous</h2>
                <h3>Prenez rendez-vous grâce à cette interface.</h3>

                <form method="post" action="./index.php?page=rendez-vous&amp;action=ajouter_direct">
                    <input type="hidden" name="email" value="<? echo $email; ?>" />
                    <input type="hidden" name="mot_de_passe" value="<? echo $mot_de_passe; ?>" />
                    <input type="hidden" name="horaire" value="<? echo $horaire; ?>" />
                    <table>
                        <tr>
                            <td class="nomcase">Modèle du Véhiculeœôó¯:</td>
                            <td>
                                <input type="text" name="vehicule" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Code Promoœôó¯*œôó¯:</td>
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
                    * Si vous ne possédez pas de code promo, laissez le champ vide.<br />
                    Sachez que vous pouvez aussi entrer votre code promo dans
                    <a href="./index.php?page=gestion_options_visiteur/principale" title="Vos Options">vos options</a> pour ne plus avoir à lœôòùentrer par la suite.
                </p>
            <?
        }
        else
        {
            $horaire = htmlspecialchars($_GET['horaire']);
            ?>
<h2>Prendre rendez-vous</h2>
                <h3>Prenez rendez-vous grâce à cette interface.</h3>

                <h4 class="tabuler">Formulaire simplifiéœôó¯:</h4><br />
                <p>
                    Si vous êtes déjà inscrit vous pouvez remplir le formulaire simple.
                </p><br /><br />
                <form method="post" action="./index.php?page=rendez-vous&amp;action=connecter_ajouter">
                    <input type="hidden" name="horaire" value="<? echo $horaire; ?>" />
                    <table>
                        <tr>
                            <td class="nomcase">Emailœôó¯:</td>
                            <td>
                                <input type="text" name="email" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Mot de passeœôó¯:</td>
                            <td>
                                <input type="password" name="mot_de_passe" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Modèle de Véhiculeœôó¯:</td>
                            <td>
                                <input type="text" name="vehicule" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Code Promoœôó¯*œôó¯:</td>
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
                    * Si vous ne possédez pas de code promo, laissez le champ vide.<br />
                    Sachez que vous pouvez aussi entrer votre code promo dans
                    <a href="./index.php?page=gestion_optinos_visiteur/principale" title="Vos Options">vos options</a> pour ne plus avoir à lœôòùentrer par la suite.
                </p>
                <br /> 
                <hr />
                <br />
                <h4 class="tabuler">Formulaire completœôó¯:</h4><br />
                <p>
                    Si vous nœôòùêtes pas inscrit vous pouvez remplir le formulaire complet.<br /><br />
                    Sachez que vous êtes inscrit dès lorsque vous prenez votre premier rendez-vous, que vous faites une demande de partenariat ou que vous remplissez un formulaire
                    de contact.
                </p><br /><br />
                <form method="post" action="./index.php?page=rendez-vous&amp;action=inscrire_ajouter">
                    <input type="hidden" name="horaire" value="<? echo $horaire; ?>" />
                    <table>
                        <tr>
                            <td class="nomcase">Titreœôó¯:</td>
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
                            <td class="nomcase">Nomœôó¯:</td>
                            <td>
                                <input type="text" name="nom" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Prénomœôó¯:</td>
                            <td>
                                <input type="text" name="prenom" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Mot de passeœôó¯:</td>
                            <td>
                                <input type="password" name="mot_de_passe" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Modèle de véhiculeœôó¯:</td>
                            <td>
                                <input type="text" name="vehicule" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Téléphoneœôó¯:</td>
                            <td>
                                <input type="text" name="telephone" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">E-mailœôó¯:</td>
                            <td>
                                <input type="text" name="email" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Code Promoœôó¯:</td>
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
                <p class="dessousformulaire">
                    Nous vous demandons toutes ces informations pour que vous nœôòùayez plus à les taper lorsque vous remplirai un autre formulaire (rendez-vous, demande de partenariat,
                    contactœôó¦),
                </p>
            <?
        }
    }
    elseif(isset($_GET['action']))
    {
        if($_GET['action'] == 'ajouter_direct')
        {
            mysql_connect("localhost", "root", "kangourou");
            mysql_select_db("amarka");
            $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
            $mot_de_passe = mysql_real_escape_string(htmlspecialchars($_POST['mot_de_passe']));
            $horaire = mysql_real_escape_string(htmlspecialchars($_POST['horaire']));
            $vehicule = mysql_real_escape_string(htmlspecialchars($_POST['vehicule']));
            $codepromo = mysql_real_escape_string(htmlspecialchars($_POST['codepromo']));
            $compte = mysql_query("SELECT COUNT(*) AS existe_deja FROM rendez_vous WHERE horaire='" . $horaire . "'");
            $compteur = mysql_fetch_array($compte);
            $retour = mysql_query('SELECT email FROM rendez_vous WHERE horaire=\'' . $horaire . '\'');
            $qui = mysql_fetch_array($retour);
            if($compteur['existe_deja'] == 0) // Si le rendez-vous nœôòùexiste pas encore.
            {
                mysql_query("INSERT INTO rendez_vous VALUES('', '" . $email . "', '" . $mot_de_passe . "', '" . $horaire . "', '" . $vehicule . "', '" . $codepromo . "')");

                $retour = mysql_query("SELECT * FROM utilisateurs WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "'");
                $utilisateurs = mysql_fetch_array($retour);
                $reponse = mysql_query("SELECT * FROM rendez_vous WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "'");
                $rendez_vous = mysql_fetch_array($reponse);
                if($rendez_vous['horaire'] == 1)
                {
                    $horaire = '08<sup>H</sup>00';
                }
                elseif($rendez_vous['horaire'] == 2)
                {
                    $horaire = '08<sup>H</sup>45';
                }
                elseif($rendez_vous['horaire'] == 3)
                {
                    $horaire = '09<sup>H</sup>30';
                }
                elseif($rendez_vous['horaire'] == 4)
                {
                    $horaire = '10<sup>H</sup>15';
                }
                elseif($rendez_vous['horaire'] == 5)
                {
                    $horaire = '11<sup>H</sup>00';
                }
                elseif($rendez_vous['horaire'] == 6)
                {
                    $horaire = '11<sup>H</sup>45';
                }
                elseif($rendez_vous['horaire'] == 7)
                {
                    $horaire = '12<sup>H</sup>30';
                }
                elseif($rendez_vous['horaire'] == 8)
                {
                    $horaire = '13<sup>H</sup>15';
                }
                elseif($rendez_vous['horaire'] == 9)
                {
                    $horaire = '14<sup>H</sup>00';
                }
                elseif($rendez_vous['horaire'] == 10)
                {
                    $horaire = '14<sup>H</sup>45';
                }
                elseif($rendez_vous['horaire'] == 11)
                {
                    $horaire = '15<sup>H</sup>30';
                }
                elseif($rendez_vous['horaire'] == 12)
                {
                    $horaire = '16<sup>H</sup>15';
                }
                elseif($rendez_vous['horaire'] == 13)
                {
                    $horaire = '17<sup>H</sup>00';
                }
                elseif($rendez_vous['horaire'] == 14)
                {
                    $horaire = '17<sup>H</sup>45';
                }
                elseif($rendez_vous['horaire'] == 15)
                {
                    $horaire = '18<sup>H</sup>30';
                }
                elseif($rendez_vous['horaire'] > 15)
                {
                    $horaire = '18<sup>H</sup>30';
                }
                elseif($rendez_vous['horaire'] < 1)
                {
                    $horaire = '08<sup>H</sup>00';
                }
                ?>
<h2>Votre rendez-vous à été enregistré</h2>
                <h3>Votre rendez-vous à bien été enregistré sur calendrier</h3>
                <p class="tabuler">
                    Votre rendez à été enregistré avec succès.<br /><br />

                    Voici les informations que nous avons retenuœôó¯:
                </p><br /><br />
                <table id="confirmation_rendez_vous">
                    <tr>
                        <td><strong>Utilisateurs</strong></td>
                        <td><? echo $utilisateurs['titre'] . ' ' . $utilisateurs['nom'];  ?></td>
                    </tr>
                    <tr>
                        <td><strong>Horaire</strong></td>
                        <td>Le JJ/MM/AAAA à <? echo $horaire; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Durée</strong></td>
                        <td>45 Minutes</td>
                    <tr>
                        <td><strong>Véhicule</strong></td>
                        <td><? echo $rendez_vous['vehicule']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Code promo</strong></td>
                        <td><? echo $rendez_vous['codepromo']; ?></td>
                    </tr>
                </table><br /><br />
                <p class="tabuler">
                    Merci de votre confiance, et à bientôt !<br /><br />
                    œôöò Retourner à lœôòù<a href="./index.php" title="Page dœôòùaccueil">accueil</a>œôó¯?
                </p>
                <?
            }
            elseif($compteur['existe_deja'] > 0 AND $qui['nom'] == $nom)
            {
                ?>
<h2>Rendez-vous déjà enregistré</h2>
                <h3>Vous avez déjà enregistré ce rendez-vous</h3>
                <p>
                    Il semble que vous avez déjà enregistré ce rendez-vous précédemment.<br />
                    Cela est peut-être parce queœôó¯:
                    <ul class="tabuler">
                        <li class="dansLeTexte">Vous avez envoyé deux fois dœôòùaffilé le formulaire ou rechargé la page</li>
                        <li class="dansLeTexte">Quelquœôòùun dœôòùautre avec qui vous partagez ce compte a déjà enregistrer un rendez-vous à cette heure-ci.</li>
                    </ul><br />
                    Vous pouvezœôó¯:
                    <ul class="tabuler">
                        <li class="dansLeTexte">Revenir à la page dœôòù<a href="./index.php" title="Accueil">accueil</a></li>
                        <li class="dansLeTexte"><a href="./index.php?page=rendez-vous" title="Rendez-vous">Choisir une autre horaire</a></li>
                    </ul>
                </p><br /><br /><br />
                <?
            }
            elseif($compteur['existe_deja'] > 0 AND $qui['nom'] != $nom)
            {
                ?>
<h2>Rendez-vous déjà enregistré</h2>
                <h3>Quelquœôòùun à déjà enregistré ce rendez-vous.</h3>
                <p class="replacerLeFooter">
                    Désolé, quelque à déjà pris rendez-vous à cette heure-ci, veuillez en choisir une autre.<br /><br />
                    Merci de votre compréhension.
                </p>
                <?
            }
        }
        elseif($_GET['action'] == 'connecter_ajouter')
        {
        }
        elseif($_GET['action'] == 'inscrire_ajouter')
        {
        }
    }
    else
    {
        function conversionEnHeure($i)
        {
            if($i == 1)
            {
                $horaire = '08<sup>H</sup>00';
            }
            elseif($i == 2)
            {
                $horaire = '08<sup>H</sup>45';
            }
            elseif($i == 3)
            {
                $horaire = '09<sup>H</sup>30';
            }
            elseif($i == 4)
            {
                $horaire = '10<sup>H</sup>15';
            }
            elseif($i == 5)
            {
                $horaire = '11<sup>H</sup>00';
            }
            elseif($i == 6)
            {
                $horaire = '11<sup>H</sup>45';
            }
            elseif($i == 7)
            {
                $horaire = '12<sup>H</sup>30';
            }
            elseif($i == 8)
            {
                $horaire = '13<sup>H</sup>15';
            }
            elseif($i == 9)
            {
                $horaire = '14<sup>H</sup>00';
            }
            elseif($i == 10)
            {
                $horaire = '14<sup>H</sup>45';
            }
            elseif($i == 11)
            {
                $horaire = '15<sup>H</sup>30';
            }
            elseif($i == 12)
            {
                $horaire = '16<sup>H</sup>15';
            }
            elseif($i == 13)
            {
                $horaire = '17<sup>H</sup>00';
            }
            elseif($i == 14)
            {
                $horaire = '17<sup>H</sup>45';
            }
            elseif($i == 15)
            {
                $horaire = '18<sup>H</sup>30';
            }
            else
            {
                $horaire = '----';
            }
            return $horaire;
        }
?>
<h2>Prendre rendez-vous</h2>
                <h3>Prenez rendez-vous grâce à cette interface.</h3>

                <p id="hautrendezvous">
                    Cliquez sur un horaire disponnible pour prendre rendez-vous
                </p><br /><br />
                <table id="rdv">
                    <tr>
                        <th>Horaire</th>
                        <th>Rendez-vous</th>
                        <!--<th></th>
                        <th></th>
                        <th></th>-->
                    </tr>
                    <?
                        for($i = 1; $i <= 15; $i++)
                        {
                            $horaire = conversionEnHeure($i);
                            ?>
                    <tr>
                        <td class="heure"><? echo $horaire; ?></td>
                        <td class="rendezvouslibre">
                            <a href="" title="">Horaire Libre</a>
                        </td>
                        <!--<td>
                        </td>
                        <td>
                        </td>-->
                    </tr>
                            <?
                        }
                    ?>
                </table>

                <!--<p id="hautrendezvous">
                    Cliquez sur un horaire disponnible pour prendre rendez-vous
                </p><br /><br />
                <table id="rdv">
                    <tr>
                        <th>Horaire</th>
                        <th>Rendez-vous</th>
                    </tr>
                    <tr>
                        <td class="heure">08<sup>H</sup>00</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire=1" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="heure">08<sup>H</sup>45</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire=2" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="heure">09<sup>H</sup>30</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire=3" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="heure">10<sup>H</sup>15</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire=4" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="heure">11<sup>H</sup>00</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire=5" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="heure">11<sup>H</sup>45</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire6" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="heure">12<sup>H</sup>30</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire=7" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="heure">13<sup>H</sup>15</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire=8" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="heure">14<sup>H</sup>00</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire=9" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="heure">14<sup>H</sup>45</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire=10" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="heure">15<sup>H</sup>30</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire=11" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="heure">16<sup>H</sup>15</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire=12" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="heure">17<sup>H</sup>00</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire=13" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="heure">17<sup>H</sup>45</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire=14" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="heure">18<sup>H</sup>30</td>
                        <td class="rendezvouslibre">
                        <a href="./index.php?page=rendez-vous&amp;horaire=15" title="Cet horaire est libre, vous pouvez prendre rendez-vous">Horaire Libre</a>
                        </td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                </table>-->
                <p class="important">
                    <b>œôöò Pensez à vérifier votre éclairage avant de nous confier votre véhicule !</b>
                </p><br /><br />
                <p id="boiteAInfosDroite">
                    <span class="titre">Nous sommes ouvertœôó¯:</span><br /><br />
                    Du Lundi au vendrediœôó¯: De 8<sup>H</sup>00 <b>à</b> 19<sup>H</sup>00.<br />
                    Le Samediœôó¯: De 8<sup>H</sup>00 <b>à</b> 17<sup>H</sup>00.
                </p><br /><br /><br /><br />
<?
    }
