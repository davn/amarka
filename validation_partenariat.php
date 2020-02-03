                <?
                    mysql_connect("localhost", "", ""); // On se connecte
                    mysql_select_db("amarka");

                    if
                    (
                        isset($_POST['titre']) AND 
                        isset($_POST['nom']) AND 
                        isset($_POST['prenom']) AND 
                        isset($_POST['mot_de_passe']) AND
                        isset($_POST['telephone']) AND
                        isset($_POST['email']) AND
                        isset($_POST['societe']) AND 
                        isset($_POST['adresse']) AND 
                        isset($_POST['ville']) AND 
                        isset($_POST['codepostale'])
                    ) // On regarde si la page à été charger à partir du formulaire. Si oui…
                    {
                        $titre = mysql_real_escape_string(htmlspecialchars($_POST['titre']));
                        $nom = mysql_real_escape_string(htmlspecialchars($_POST['nom']));
                        $prenom = mysql_real_escape_string(htmlspecialchars($_POST['prenom']));
                        $mot_de_passe = mysql_real_escape_string(htmlspecialchars($_POST['mot_de_passe']));
                        $telephone = mysql_real_escape_string(htmlspecialchars($_POST['telephone']));
                        $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
                        $societe = mysql_real_escape_string(htmlspecialchars($_POST['societe']));
                        $adresse = mysql_real_escape_string(htmlspecialchars($_POST['adresse']));
                        $ville = mysql_real_escape_string(htmlspecialchars($_POST['ville']));
                        $codepostale = mysql_real_escape_string(htmlspecialchars($_POST['codepostale']));
                        if(isset($_POST['commentaires']) AND $_POST['commentaires'] == 'Tapez un commentaire (facultatif)' OR $_POST['commentaires'] == '')
                        {
                            $commentaires = '';
                        }
                        elseif(isset($_POST['commentaires']) AND !empty($_POST['commentaires']))
                        {
                            $commentaires = mysql_real_escape_string(htmlspecialchars($_POST['commentaires']));
                            $commentaires = nl2br($commentaires);
                        } // On créer les variable utiles à partir des superglobales POST.
                        
                        if
                        (
                            !empty($titre) AND
                            !empty($nom) AND
                            !empty($prenom) AND
                            !empty($mot_de_passe) AND
                            !empty($telephone) AND
                            !empty($email) AND
                            !empty($societe) AND
                            !empty($adresse) AND
                            !empty($ville) AND
                            !empty($codepostale)
                        ) // Si toutes les case ont été remplis (sauf commentaires qui lui est facultatif).
                        {
                            $reponse = mysql_query("SELECT COUNT(*) AS existe_deja FROM utilisateurs WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "'");
                            $utilisateurs = mysql_fetch_array($reponse);
                            if($utilisateurs['existe_deja'] == 0) // Si cet utilisateur n’existe pas encore…
                            {
                                mysql_query("INSERT INTO utilisateurs VALUES(
                                    '',
                                    '" . $titre . "',
                                    '" . $nom . "',
                                    '" . $prenom ."',
                                    '" . $mot_de_passe . "',
                                    '" . $telephone . "',
                                    '" . $email . "',
                                    '" . $adresse . "',
                                    '" . $ville . "',
                                    '" . $codepostale . "')"); // On le créer
                            }

                            $reponse = mysql_query("SELECT COUNT(*) AS existe_deja FROM partenariat WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "' AND
                            supprime='0'");
                            $partenariat = mysql_fetch_array($reponse);
                            if($partenariat['existe_deja'] == 0) // Si ce partenariat n’existe pas encore
                            {
                                $timestamp_creation = time();
                                mysql_query("INSERT INTO partenariat VALUES(
                                    '',
                                    '" . $email . "',
                                    '" . $mot_de_passe . "',
                                    '" . $societe . "',
                                    '" . $commentaires . "',
                                    '0',
                                    '0',
                                    '" . $timestamp_creation . "',
                                    '')"); // On le créer

                                $reponse = mysql_query("SELECT * FROM utilisateurs WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "'");
                                $utilisateurs = mysql_fetch_array($reponse);
                                $retour = mysql_query("SELECT * FROM partenariat WHERE email='" . $email . "' AND mot_de_passe='" . $mot_de_passe . "' AND supprime='0'");
                                $partenariat = mysql_fetch_array($retour);
                                // On récupère les informations inscrite dans la base de données pour les afficher.
                                ?>
<h2>Requête Envoyée !</h2>
                <h3>Votre demande de devenir partenaire avec <strong>Dekra Amarka 2001</strong> a bien été prise en compte.</h3>

                <p>
                    Votre requête a bien été enregistrée, nous la traiterons dans les plus bref délais…
                </p>
                <p>
                    Merci de votre compréhension.
                </p><br /><br />
                <p>
                    Voici les informations que vous avez entrées :
                </p><br />
                <p>
                <table>
                    <tr>
                        <td><strong>Titre</strong></td>
                        <td><? echo $utilisateurs['titre']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Nom</strong></td>
                        <td><? echo $utilisateurs['nom']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Prénom</strong></td>
                        <td><? echo $utilisateurs['prenom']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Téléphone</strong></td>
                        <td><? echo $utilisateurs['telephone']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>E-mail</strong></td>
                        <td><? echo $utilisateurs['email']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Société</strong></td>
                        <td><? echo $partenariat['societe']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Adresse</strong></td>
                        <td><? echo $utilisateurs['adresse']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Ville</strong></td>
                        <td><? echo $utilisateurs['ville']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Code Postale</strong></td>
                        <td><? echo $utilisateurs['codepostale']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Commentaires</strong></td>
                        <td>
                        <?
                            if($partenariat['commentaires'] == '')
                            {
                                echo 'Sans commentaires';
                            }
                            else
                            {
                                echo nl2br($partenariat['commentaires']);
                            }
                        ?>
                        </td>
                    </tr>
                </table>
                </p><br />
                <p>
                    Si vous le souhaitez, vous pouvez modifier ou supprimer toutes les informations vous concerant transmise via ce site web grâce à
                    <a href="./index.php?page=gestion_options_visiteur/principale" title="Vos options">cette page</a>.
                </p>
                                <?
                            }
                            else // Sinon (si le partenariat existe déjà (doublon))
                            {
                                ?>
<h2>La requète a été envoyée en double…</h2>
                <h3>La requète que vous avez envoyé semble être déjà présente dans notre base de données.</h3>
                <p>
                    Vous avez envoyé deux fois votre requète.<br />
                    Cela est peut-être dû :
                    <ul class="tabuler">
                        <li class="dansLeTexte">À un rechargement de la page.</li>
                        <li class="dansLeTexte">Au fait que vous ou quelqu’un d’autre ai déjà enregistré un partenariat similaire.</li>
                    </ul>
                </p><br />
                <p>
                    Si vous êtes la personne qui a rempli ce formulaire précédemment, grâce au mot de passe que vous avez choisi, vous pouvez :
                    <ul class="tabuler">
                        <li class="dansLeTexte">Voir les informations que vous avez envoyé.</li>
                        <li class="dansLeTexte">Modifier ces informations.</li>
                        <li class="dansLeTexte">Annuler votre demande de partenariat.</li>
                    </ul>
                     Pour accéder à vos options veuillez vous rendre sur
                    <a href="./index.php?page=gestion_options_visiteur/principale" title="Vos options">cette page</a>.
                </p>
                                <?
                            }
                        }
                        else // Sinon (si touse les cases du formulaire n’ont pas été remplis)
                        {
                            ?>
<h2>Le formulaire est incomplet…</h2>
                <h3>Votre demande de devenir partenaire avec <strong>Dekra Amarka 2001</strong> n’a pas aboutit car vous n’avez pas remplis correctement le formulaire.</h3><br />
                <p class="replacerLeFooter">
                    Veuillez revenir en arrière et remplir tous les champs obligatoire pour que votre demande de partenariat soit enregistrée dans notre base de données, nous
                    pourrons ainsi la traiter dans les meilleur délais.
                </p>
                            <?
                        }
                    } // Le else se trouve dans le header (Sinon, rediriger la personne vers la page du formulaire)
                    mysql_close();
                ?>
