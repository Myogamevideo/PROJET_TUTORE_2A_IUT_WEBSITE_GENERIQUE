<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-commentaires.css">

<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="containerAll">



            <h2>Articles :</h2>

            <div class="divCommentaire">
                <?php
                $req = $bdd->prepare('select id,contenu,titre, DAY(date_creation) AS jour, MONTH(date_creation) AS mois, YEAR(date_creation) AS annee, HOUR(date_creation) AS heure, MINUTE(date_creation) AS minute, SECOND(date_creation) AS seconde from billets where id=?');
                $req->execute(array($_GET['id_billet']));
                $donnees = $req->fetch(); 
                
                $image=str_replace(' ','','public/image/' . $donnees['titre'] . '.jpg');
                ?>
            
                <?php echo '
                <div class="containerTitre" style="background-image: url('.$image.'); height: 400px; width: 100%; border-radius: 25px; text-align: center;">
                    <div class="textTitre">
                        <h2 class="titre">' . $donnees['titre'] . '</h2>
                    </div>
                </div>
                '; ?>
                <div class="bordure">
                    <div class="infoArticle">
                        <?php
                        echo '<p class="dateDeParution">Paru le ' . $donnees['jour'] . '/' . $donnees['mois'] . '/' . $donnees['annee'] . ' à ' . $donnees['heure'] . 'h' . $donnees['minute'] . '</p>';
                        echo '<p class="contenu">' . $donnees['contenu'] . '</p>';
                        $req->closeCursor();
                        ?>
                    </div>
                </div>
                <div class="ajouterCommentaire">
                <h3> Ajouter un commentaire :</h3>
                <h3>Commentaires :</h3>
                <?php
                if (isset($_SESSION['pseudo']) and $_SESSION['pseudo'] != NULL) {
                ?>
                    <script type="text/javascript" src="public/js/boutique.js"></script>
                <div class="btnAjout" href="javascript:void(0);" onclick="myFunction()">
                        <span class="nav-icon"><i class="fa fa-plus-circle fa-3x"  style="color:blue;"></i></span>
                </div>
                <div id="ajoutDiv" >
                    <?php echo '<form method="POST" action="commentaires.php?id_billet=' . $_GET['id_billet'] . '" class="class="form-signin">'; ?>
                    
                        <div class="ajoutCommentaire">
                            <div class="info">
                                <label >Date :</label>
                                <p>02/02/02</p>
                            </div>
                            <div class="info">
                                <i class="fa fa-hourglass-2" style="color:black;"></i>
                                <label>3 min </label>
                            </div>
                            <div class="info">
                                <i class="fa fa-user-circle" style="color:black;"></i>
                                <label>Auteur : </label>
                                <p><?php echo $_SESSION['pseudo']; ?></p>
                            </div>

                            <div class="info">
                                <i class="fa fa-remove" style="color:red;"></i>
                                <input class="btnSupp" type="button" value="Supprimer">
                            </div>

                            <div class="info">
                                <i class="fa fa-pencil" style="color:yellow;"></i>
                                <input class="btnModif" type="button" value="Modifier">
                            </div>
                        </div>
                        
                        <div  class="optionCommentaire"
                            <button type="button" class="btn btn-primary" disabled="disabled"><strong>[b] Texte en gras [/b]</strong></button>
                            <button type="button" class="btn btn-secondary" disabled="disabled"><em>[i] Texte en italique [/i]</em></button>
                            <button type="button" class="btn btn-warning" disabled="disabled"><span style="color:red">[color=red] Texte en rouge [/color]</span></button>
                            <button type="button" class="btn btn-link" disabled="disabled"><a href="">Lien : http://...</a></button>
                        </div>

                        <textarea name="commentaire" id="commentaire" rows="4" cols="10" style="resize:none;" wrap="hard" class="form-control" placeholder="Tapez votre commentaire (max 500 caractére)" required="" maxlength="500"></textarea>
                        <div class="btnPublier">
                        <button type="submit">Publier</button>

                    
                    </form>

                </div>

                
                <div class="infoCommentaire">
                            <div class="info">
                                <label >Date :</label>
                                <p>02/02/02</p>
                            </div>
                            <div class="info">
                                <i class="fa fa-hourglass-2" style="color:black;"></i>
                                <label>3 min </label>
                            </div>
                            <div class="info">
                                <i class="fa fa-user-circle" style="color:black;"></i>
                                <label>Auteur : </label>
                                <p><?php echo $_SESSION['pseudo']; ?></p>
                            </div>

                            <div class="info">
                                <i class="fa fa-remove" style="color:red;"></i>
                                <input class="btnSupp" type="button" value="Supprimer">
                            </div>

                            <div class="info">
                                <i class="fa fa-pencil" style="color:yellow;"></i>
                                <input class="btnModif" type="button" value="Modifier">
                            </div>
                        </div>
                        
                        <div  class="optionCommentaire"
                            <button type="button" class="btn btn-primary" disabled="disabled"><strong>[b] Texte en gras [/b]</strong></button>
                            <button type="button" class="btn btn-secondary" disabled="disabled"><em>[i] Texte en italique [/i]</em></button>
                            <button type="button" class="btn btn-warning" disabled="disabled"><span style="color:red">[color=red] Texte en rouge [/color]</span></button>
                            <button type="button" class="btn btn-link" disabled="disabled"><a href="">Lien : http://...</a></button>
                        </div>

                        <P class="textCommentaire">kjdsqkjf kjd o eoo  oo if  ofof ioi oodsqo  q</p>

                    </div>

                    <div class="alert alert-warning">
                        <?php
                        if (isset($_POST['commentaire']) && $_POST['commentaire'] != NULL) {
                            $_POST['commentaire'] = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $_POST['commentaire']);
                            $_POST['commentaire'] = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $_POST['commentaire']);
                            $_POST['commentaire'] = preg_replace('#\[color=(red|green|blue|yellow|purple|olive)\](.+)\[/color\]#isU', '<span style="color:$1">$2</span>', $_POST['commentaire']);
                            $_POST['commentaire'] = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $_POST['commentaire']);
                            $req = $bdd->prepare('insert into commentaires (id_billet,auteur,commentaire,date_commentaire) values (:id_billet,:auteur,:commentaire,now())');
                            $req->execute(array(
                                'id_billet' => $_GET['id_billet'],
                                'auteur' => $_SESSION['pseudo'],
                                'commentaire' => $_POST['commentaire']
                            ));
                            $req->closeCursor();
                        } else {
                            echo '<strong>Information : </strong> Un ou plusieurs champs sont vide';
                        }
                        ?>
                    </div>
                <?php
                } else {
                    echo '<p class="text-muted"> Veuillez vous inscire ou vous connectez pour mettre un commentaire</p>';
                }
                ?>
                <?php
                echo '<div>';
                $req = $bdd->prepare('select id,commentaire,auteur, DAY(date_commentaire) AS jour, MONTH(date_commentaire) AS mois, YEAR(date_commentaire) AS annee, HOUR(date_commentaire) AS heure, MINUTE(date_commentaire) AS minute, SECOND(date_commentaire) AS seconde from commentaires where id_billet=?');
                $req->execute(array($_GET['id_billet']));
                while ($donnees = $req->fetch()) {
                    echo 'De <span style="color:blue">' . $donnees['auteur'] . '</span> le ' . $donnees['jour'] . '/' . $donnees['mois'] . '/' . $donnees['annee'] . ' à ' . $donnees['heure'] . 'h' . $donnees['minute'] . 'min' . $donnees['seconde'] . 'sec -- <a href="like.php?id=' . $donnees['id'] . '&id_billet=' . $_GET['id_billet'] . '">J\'aime</a>';
                    $res = $bdd->prepare('select count(id) likes from like where id_commentaires=?');
                    $res->execute(array($donnees['id']));
                    $data = $res->fetch();
                    echo ' ( ' . $data['likes'] . ' )';
                    echo '<div> <em>' . $donnees['commentaire'] . '</em></div>';
                    if (isset($_SESSION['pseudo']) and $_SESSION['pseudo'] == $donnees['auteur']) {
                        echo '<form method="POST" action="deletecommentaires_copy.php?id=' . $donnees['id'] . '&amp;id_billet=' . $_GET['id_billet'] . '">';
                        echo '<button type="submit" class="btn btn-lg btn-primary btn-block"> Supprimer votre commentaire </button> ';
                        echo '</form>';
                        echo '</div>';
                    }
                }
                $req->closeCursor();
                ?>




</div>


                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>