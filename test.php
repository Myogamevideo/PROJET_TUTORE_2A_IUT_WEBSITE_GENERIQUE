
                    
                                    <div class="listCommentaire">
                        <?php
                        $req = $bdd->prepare('select id,commentaire,auteur, DAY(date_commentaire) AS jour, MONTH(date_commentaire) AS mois, YEAR(date_commentaire) AS annee, HOUR(date_commentaire) AS heure, MINUTE(date_commentaire) AS minute, SECOND(date_commentaire) AS seconde from commentaires where id_billet=?');
                        $req->execute(array($_GET['id_billet']));
                        while ($donnees = $req->fetch()) {
                        ?>
                        <div class="commentaireArticle">
                            <div class="infoCommentaire">
                                <div class="info">
                                    <label >Date :</label>
                                    <p> <?php echo ' '.$donnees['jour'] . '/' . $donnees['mois'] . '/'.$donnees['annee'].'' ;?></p>
                                </div>
                                <div class="info">
                                    <i class="fa fa-hourglass-2" style="color:black;"></i>
                                    <label><?php 
                                    $date = date("G:i:s");
                                    $date_commentaire = date_create($donne['date_commentaire']);
                                    $date_commentaire = date_format($date_commentaire,'G:i:s');
                                    echo ($date-$date_commentaire);
                                    ?> </label>
                                </div>
                                <div class="info">
                                    <i class="fa fa-user-circle" style="color:black;"></i>
                                    <label>Auteur : </label>
                                    <p><?php echo $donnees['auteur']; ?></p>
                                </div>
                                <?php
                                if (isset($_SESSION['pseudo']) and $_SESSION['pseudo'] == $donnees['auteur']) {
                                ?>
                                    <div class="info">
                                        <i class="fa fa-remove" style="color:red;"></i>
                                        <button class="btnSupp" type="button" value="Supprimer">
                                    </div>
                                <?php } ?>
                            <div>
                                <p class="textCommentaire"> <?php echo $donnees['commentaire']; ?></p>
                            </div>
                        </div>
                        <?php $req->closeCursor(); ?>
                    </div>
                </div>
            </div>
        </div>