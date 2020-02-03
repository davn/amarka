<?php
if(isset($_GET['modifier']))
{
    mysql_connect("localhost", "", "");
    mysql_select_db("amarka");
    $retour = mysql_query('SELECT * FROM partenariat WHERE id=\'' . $_GET['modifier'] . '\' AND supprime=\'0\'');
    $donnees = mysql_fetch_array($retour);
?>
<h2>Modifiez votre partenariat</h2>
                <h3>
                    Vous êtes professionnel (Garagiste, Réparateur) ou responsable d’un Comité d’Entreprise ?<br />
                    → Alors vous pouvez nous contactez via ce formulaire pour bénéficier de conditions préférentielles :
                </h3>

            <form method="post" action="./index.php?page=validation_partenariat&amp;modifier=<?php echo $_GET['modifier']; ?>">
                    <table>
                        <tr>
                            <td class="nomcase">Titre :</td>
                            <td>
                                <select name="titre">
                                    <option <?php if($donnees['titre'] == 'Monsieur') { echo 'selected="selected"'; } ?>value="Monsieur">Mr</option>
                                    <option <?php if($donnees['titre'] == 'Mademoiselle') { echo 'selected="selected"'; } ?>value="Mademoiselle">Mlle</option>
                                    <option <?php if($donnees['titre'] == 'Madame') { echo 'selected="selected"'; } ?>value="Madame">Mme</option>
                                    <option <?php if($donnees['titre'] == 'Docteur') { echo 'selected="selected"'; } ?>value="Docteur">Dr</option>
                                    <option <?php if($donnees['titre'] == 'Professeur') { echo 'selected="selected"'; } ?>value="Professeur">Prof.</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Nom :</td>
                            <td>
                                <input type="text" name="nom" value="<?php echo $donnees['nom']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Prénom :</td>
                            <td>
                                <input type="text" name="prenom" value="<?php echo $donnees['prenom']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Mot de passe <sup>[1]</sup> :</td>
                            <td>
                                <input type="password" name="mot_de_passe" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Téléphone :</td>
                            <td>
                                <input type="text" name="telephone" value="<?php echo $donnees['telephone']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">E-mail :</td>
                            <td>
                                <input type="text" name="email" value="<?php echo $donnees['email']; ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Société :</td>
                            <td>
                                <input type="text" name="societe" value="<?php echo $donnees['societe']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Adresse :</td>
                            <td>
                                <input type="text" name="adresse" value="<?php echo $donnees['adresse']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Ville :</td>
                            <td>
                                <input type="text" name="ville" value="<?php echo $donnees['ville']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Code Postale :</td>
                            <td>
                                <input type="text" name="codepostale" value="<?php echo $donnees['codepostale']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase">Commentaire :</td>
                            <td>
                                <textarea name="commentaires"><?php echo $donnees['commentaires']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase"></td>
                            <td>
                                <input type="submit" value="Modifier" class="bouton" />
                            </td>
                        </tr>
                    </table>
                </form><br />
                <p class="dessousformulaire">
                    <sup>[1]</sup> Le mot de passe nous permet de savoir que vous êtes bien la personne qui a envoyé ce formulaire auparavant.<br /><br />
                    Sachez que vous pouvez à tous moment annuler la modififaction et revenir à la gestion de votre partenariat en 
                    <a href="./index.php?page=gestion_options">cliquant ici</a>.
                </p>
<?php
}
else
{
?>
<h2>Partenariat</h2>
                <h3>
                    Vous êtes professionnel (Garagiste, Réparateur) ou responsable d’un Comité d’Entreprise ?<br />
                    → Alors vous pouvez nous contactez via ce formulaire pour bénéficier de conditions préférentielles :
                </h3>

                <form method="post" action="./index.php?page=validation_partenariat">
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
                            <td class="nomcase">Mot de passe <sup>[1]</sup> :</td>
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
                            <td class="nomcase">Société :</td>
                            <td>
                                <input type="text" name="societe" />
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
                            <td class="nomcase">Commentaire :</td>
                            <td>
                                <textarea name="commentaires">Tapez un commentaire (facultatif)</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="nomcase"></td>
                            <td>
                                <input type="submit" value="Envoyer" class="bouton" />
                            </td>
                        </tr>
                    </table>
                </form><br />
                <p class="dessousformulaire">
                    <sup>[1]</sup> Le mot de passe vous permettra par la suite de modifier ou annuler votre demande de partenariat.<br />
                </p>
<?php
}
?>
