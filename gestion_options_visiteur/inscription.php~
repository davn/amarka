<?
    if
    (
        isset($_POST['titre']) AND
        isset($_POST['nom']) AND
        isset($_POST['prenom']) AND
        isset($_POST['mot_de_passe']) AND
        isset($_POST['telephone']) AND
        isset($_POST['email']) AND
        isset($_POST['adresse']) AND
        isset($_POST['ville']) AND
        isset($_POST['codepostale'])
    )
    {
        if
        (
            !empty($_POST['titre']) AND
            !empty($_POST['nom']) AND
            !empty($_POST['prenom']) AND
            !empty($_POST['mot_de_passe']) AND
            !empty($_POST['telephone']) AND
            !empty($_POST['email']) AND
            !empty($_POST['adresse']) AND
            !empty($_POST['ville']) AND
            !empty($_POST['codepostale'])
        )
        {
            mysql_connect("localhost", "root", "UCzQ149,*B$1y");
            mysql_select_db("amarka");
            $titre = mysql_real_escape_string(htmlspecialchars($_POST['titre']));
            $nom = mysql_real_escape_string(htmlspecialchars($_POST['nom']));
            $prenom = mysql_real_escape_string(htmlspecialchars($_POST['prenom']));
            $mot_de_passe = mysql_real_escape_string(htmlspecialchars($_POST['mot_de_passe']));
            $telephone = mysql_real_escape_string(htmlspecialchars($_POST['telephone']));
            $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
            $adresse = mysql_real_escape_string(htmlspecialchars($_POST['adresse']));
            $ville = mysql_real_escape_string(htmlspecialchars($_POST['ville']));
            $codepostale = mysql_real_escape_string(htmlspecialchars($_POST['codepostale']));
        }
        else
        {
            ?>
<h2>Le formulaire est incomplet…</h2>
                <h3>Votre inscription n’a pas aboutit car vous n’avez pas rempli correctement le formulaire.</h3>
                <p class="replacerLeFooter">
                    Veuillez revenir en arrière et remplir tous les champs du formulaire afin de procéder à votre inscription.
                </p>
            <?
        }
    }
    else
    {
        ?>
<h2>Inscription…</h2>
                <h3>Vous pouvez vous inscrire à partir de cette page afin de faciliter votre navigation sur le site web.</h3>
                <form method="post" action="./index.php?page=gestion_options_visiteur/inscription">
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
                                <input type="submit" value="M’inscrire" class="bouton" />
                            </td>
                        </tr>
                    </table>
                </form><br />
                <p class="dessousformulaire">
                    Nous vous demandons toutes ces informations pour que vous n’ayez plus à les taper lorsque vous remplirai un autre formulaire (rendez-vous, demande de partenariat,
                    contact…) et ainsi vous facilité la navigation sur notre site web.
                </p>
        <?
    }
?>
