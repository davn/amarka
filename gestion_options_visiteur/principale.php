<?
    mysql_connect("localhost", "root", "TCiBzZN036");
    mysql_select_db("amarka");
    if(!isset($_COOKIE['email']) AND !isset($_COOKIE['mot_de_passe']))
    {
        ?>
<h2>Connexion…</h2>
                <h3>Rentrez vos identifiants pour accéder à vos options</h3>
                <?
                    if(isset($_POST['email']) AND isset($_POST['mot_de_passe']))
                    {
                        if(empty($_POST['email']) OR empty($_POST['mot_de_passe']))
                        {
                            ?>
                <p class="important"><b>Merci de remplir tous les champs</b></p><br /><br />
                            <?
                        }
                        else
                        {
                            ?>
                <p class="important"><b>Vos identifiants sont incorrects.</b></p><br /><br />
                            <?
                        }
                    }
                ?>
                <form method="post" action="./index.php?page=gestion_options_visiteur/principale">
                    <table>
                        <tr>
                            <td>Votre Adresse E-mail :</td>
                            <td>
                                <input type="text" name="email" />
                            </td>
                        </tr>
                        <tr>
                            <td>Votre Mot de Passe :</td>
                            <td>
                                <input type="password" name="mot_de_passe" />
                            </td>
                        </tr>
                    </table><br />
                    <input type="submit" value="Se connecter" class="bouton" />
                </form><br /><br /><br />
                <p>
                    Si vous n’êtes pas inscrit, vous pouvez procéder via
                    <a href="./index.php?page=gestion_options_visiteur/inscription" title="Inscription">cette page</a>.<br /><br />
                    Sachez que vous êtes inscrit dés lorsque :
                    <ul class="tabuler">
                        <li class="dansLeTexte">Vous prenez votre premier rendez-vous</li>
                        <li class="dansLeTexte">Vous faites une demande de partenariat</li>
                    </ul><br />
                    Dans ces cas là vous pouvez vous rendre à tout moment sur cette page pour gérer vos options ainsi que vos informations transcrite via notre site web.
                </p>
        <?
    }
    elseif(isset($_COOKIE['email']) AND isset($_COOKIE['mot_de_passe']))
    {
?>
<h2>Vos options.</h2>
                <h3>Cette page vous permet d’exécuter certaines actions, et de gérer vos informations transcrite via notre site web.</h3>

                <h4 class="titreoptions">Vos rendez-vous</h4>
                <p class="poptions">
                    <a href="">Voir vos rendez-vous passés</a><br />
                    <a href="">Voir vos prochains rendez-vous</a><br />
                    <a href="">Reporter un rendez-vous</a><br />
                    <a href="">Supprimer un rendez-vous</a><br /><br />

                    <a href="">Prochains rendez-vous conseillés</a>
                </p>

                <h4 class="titreoptions">Vos partenariat</h4>
                <p class="poptions">
                    <a href="">Voir vos partenariats</a><br />
                    <a href="">Modifier un partenariat</a><br />
                    <a href="">Supprimer un partenariat</a>
                </p>

                <h4 class="titreoptions">Vos Contrôle Pass</h4>
                <p class="poptions">
                    <a href="">Voir vos Contrôle Pass</a><br />
                    <a href="">Renouveler un Contrôle Pass</a><br />
                    <a href="">Acheter un Contrôle Pass</a><br />
                    <a href="./index.php?page=controle-pass">Quelle sont les avantages du Contrôle Pass ?</a>
                </p>

                <h4 class="titreoptions">Supréssion du compte</h4>
                <p class="poptions">
                    <a href="">Supprimer la totalité de votre compte <sup>[1]</sup></a>
                </p>
                <p class="poptions">
                    <sup>[1]</sup> Ceci signifie que vous supprimerai toutes les informations transcrite sur ce site, ainsi que vos rendez-vous, partenariat, historique de visites, 
                    avantage Contrôle Pass, naviguation simplifiée du site web, …)
                </p>
                <span id="deconnection"><a href="./index.php?page=gestion_options_visiteur/principale&action=deconnecter" title="Déconnectez-vous">Déconnection</a></span>
<?
    }
?>
