<h2>Plan d’Accès</h2>
                <h3>Baladez-vous par dessus le plan pour vous repérer</h3>
                <?
                    if(isset($_POST['focusimage']))
                    {
                        $focusimage = htmlspecialchars($_POST['focusimage']);
                        if($focusimage < 1)
                        {
                            $focusimage = 1;
                        }
                        elseif($focusimage > 6)
                        {
                            $focusimage = 6;
                        }
                    }
                    else
                    {
                        $focusimage = 2;
                    }
                    if(!isset($_GET['tailleimage']))
                    {
                ?>
                <p class="tabuler">
                    Si l’image est trop grosse pour votre définition,
                    <a href="./index.php?page=acces&amp;tailleimage=petit" title="Format réduit">cliquez ici</a> pour voir le format réduit.
                </p><br /><br /><br />
                <form method="post" action="./index.php?page=acces" id="actionImage1">
                    <input type="hidden" name="focusimage" value="<? echo $focusimage + 1; ?>" />
                    <input type="submit" value="Zoomer" />
                </form>
                <img src="./img/acces/acces<? echo $focusimage; ?>.png" alt="(Plan d’accès)" id="acces" />
                <form method="post" action="./index.php?page=acces" id="actionImage2">
                    <input type="hidden" name="focusimage" value="<? echo $focusimage - 1; ?>" />
                    <input type="submit" value="Dézoomer" />
                </form>
                <?
                    }
                    elseif(isset($_GET['tailleimage']) AND $_GET['tailleimage'] == 'petit')
                    {
                ?>
                <p class="tabuler">
                    <a href="./index.php?page=acces" title="Grand format">Cliquez ici</a> pour revenir au grand format du plan d’accès.
                </p><br /><br /><br />
                <form method="post" action="./index.php?page=acces&amp;tailleimage=petit" id="actionImage1Petit">
                    <input type="hidden" name="focusimage" value="<? echo $focusimage + 1; ?>" />
                    <input type="submit" value="Zoomer" />
                </form>
                <img src="./img/acces/acces<? echo $focusimage; ?>_petit.png" alt="(Plan d’accès)" id="accesPetit" />
                <form method="post" action="./index.php?page=acces&amp;tailleimage=petit" id="actionImage2Petit">
                    <input type="hidden" name="focusimage" value="<? echo $focusimage - 1; ?>" />
                    <input type="submit" value="Dézoomer" />
                </form>
                <?
                    }
                ?>
                <br /><br />
                <p class="tabuler">
                    Si vous voulez des informations détaillées ainsi que des itinéraires à imprimer vous pouvez vous rendre sur les sites web
                    <a href="http://www.mappy.fr/">Mappy</a>,
                    <a href="http://www.maporama.fr/">Maporama</a>,
                    <a href="http://maps.yahoo.com/">Yahoo Maps</a> ou encore
                    <a href="http://maps.google.com/">Google Maps</a>.
                </p>
