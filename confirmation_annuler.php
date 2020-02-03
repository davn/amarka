<?php
    mysql_connect("localhost", "", "");
    mysql_select_db("amarka");
    if(isset($_GET['annuler'])
    {
        $id_partenariat = mysql_real_escape_string(htmlspecialchars($_GET['annuler']));
        $retour = mysql_query("SELECT nom FORM partenariat WHERE id='$id_partenariat'");
        $donnees = mysql_fetch_array($retour);
    }
    elseif(isset($_POST['annuler']))
    {
        $id_partenariat = mysql_real_escape_string(htmlspecialchars($_POST['annuler']));
        $retour = mysql_query("SELECT nom FORM partenariat WHERE id='$id_partenariat'");
        $donnees = mysql_fetch_array($retour);
    }
?>
                <h2>Confirmation…</h2>
                <h3>Nous avons besoin de votre nom et mot de passe pour confirmer l’annulation du partenariat.</h3>
                <p>
                    Merci d’entrer votre <em>nom propre</em> et votre <em>mot de passe</em> afin de confirmer l’annulation et la suppression de votre partenariat.
                </p>
                <form method="post" action="./index.php?page=validation_partenariat&amp;annuler=<?php echo $id_partenariat; ?>">
                    <table>
                        <input type="hidden" name="id" value="<?php echo $id_partenariat; ?>" />
                        <tr>
                            <td>Votre nom propre :</td>
                            <td><input type="text" name="nom" value="<?php echo $donnees['nom']; ?>"/></td>
                        </tr>
                        <tr>
                            <td>Votre mot de passe <sup>[1]</sup> :</td>
                            <td><input type="password" name="mot_de_passe" /></td>
                        </tr>
                    </table>
                </form>
                <p class="replacerLeFooter">
                    <sup>[1]</sup> Votre mot de passe (celui que vous avez choisi lors du remplissage du premier formulaire) nous permet de nous confirmer que vous êtes bien la 
                    personne qui à traité la demande de partenariat pour pas que n’importe qui ait la possibilité de supprimer ou modifier vos informations.
                </p>
