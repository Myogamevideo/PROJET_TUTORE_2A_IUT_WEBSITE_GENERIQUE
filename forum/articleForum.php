<?php include('../head.php') ?>
<link rel="stylesheet" href="../public/css/style-articleForum.css">

<body>
	<?php include('../header-image.php') ?>
	<main>
	<div class="container">
            <div class="containerAll">
				<h2>Forum :</h2>
				<div class="divArticleForum">
					<h3>Arclicle : Pb avec les écouteurs de mon Ipod : </h3>
                    <h4>Forum : <label>Matériel</label></h4>
                    <p>Bonjour, j'ai un soucis matériel dans mon pc dans le poste de travail mon lecteur est bien marqué comme lecteur dvd-ram mais a 
                    gauche dans détails il m'indique lecteur cd je vous demande pourquoi merci Bonjour, j'ai un soucis matériel dans mon pc dans le poste de 
                    travail mon lecteur est bien marqué comme lecteur dvd-ram mais a gauche dans détails il m'indique lecteur cd je vous demande pourquoi merci 
                    Bonjour, j'ai un soucis matériel dans mon pc dans le poste de travail mon lecteur est bien marqué comme lecteur dvd-ram mais a gauche dans 
                    détails il m'indique lecteur cd je vous demande pourquoi merci </p>
				</div>
				<div class="divReponceArticle">
                    <?php
                        echo '<div>';
                        $req = $bdd->prepare('select id,idTopic,idUtilisateur, contenu,  DAY(dateReponse) AS jour, MONTH(dateReponse) AS mois, YEAR(dateReponse) AS annee, HOUR(dateReponse) AS heure, MINUTE(dateReponse) AS minute, SECOND(dateReponse) AS seconde from messageForum where id_billet=?');
                        $req->execute(array($_GET['id_billet']));
                        while ($donnees = $req->fetch()) { ?>
					<h3>Réponses :</h3>
                    <div class="listCommentaire">
                    <script type="text/javascript" src="../public/js/commentaire.js"></script>
                        <div class="btnAjout" href="javascript:void(0);" onclick="myFunction()">
                            <span class="nav-icon"><i class="fa fa-plus-circle fa-3x"  style="color:blue;"></i></span>
                        </div>

                            <div id="ajoutDiv">
                                    <div class="ajoutCommentaire" >
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
                                            <p>Cloclo</p>
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

                                    <div  class="optionCommentaire">
                                        <button type="button" class="btn btn-primary" disabled="disabled"><strong>[b] Texte en gras [/b]</strong></button>
                                        <button type="button" class="btn btn-secondary" disabled="disabled"><em>[i] Texte en italique [/i]</em></button>
                                        <button type="button" class="btn btn-warning" disabled="disabled"><span style="color:red">[color=red] Texte en rouge [/color]</span></button>
                                        <button type="button" class="btn btn-link" disabled="disabled"><a href="">Lien : http://...</a></button>
                                    </div>

                                    <textarea name="commentaire" id="commentaire" rows="4" cols="10" style="resize:none;" wrap="hard" class="form-control" placeholder="Tapez votre commentaire (max 500 caractére)" required="" maxlength="500"></textarea>
                                    <div class="btnPublier">
                                        <button type="submit">Publier</button>
                                    </div>                    
                                    </form>
                            </div>
                        <div class="commentaireArticle">
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
                                    <p>Cloclo</p>
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
                            <div  class="optionCommentaire">
                                <button type="button" class="btn btn-primary" disabled="disabled"><strong>[b] Texte en gras [/b]</strong></button>
                                <button type="button" class="btn btn-secondary" disabled="disabled"><em>[i] Texte en italique [/i]</em></button>
                                <button type="button" class="btn btn-warning" disabled="disabled"><span style="color:red">[color=red] Texte en rouge [/color]</span></button>
                                <button type="button" class="btn btn-link" disabled="disabled"><a href="">Lien : http://...</a></button>
                            </div>
                            <div>
                                <P class="textCommentaire">kjdsqkjf kjd o eoo  oo if  ofof ioi oodsqo  q</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <script type="text/javascript" src="../public/js/commentaire.js"></script>
                        <div class="btnAjout" href="javascript:void(0);" onclick="listCom()">
                        <span class="nav-icon"><i class="fa fa-ellipsis-h fa-3x"  style="color:blue;"></i></span>
                    </div>
                    <div id="listCom">
                    <div class="commentaireArticle">
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
                                    <p>Cloclo</p>
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
                            
                            <div  class="optionCommentaire">
                                <button type="button" class="btn btn-primary" disabled="disabled"><strong>[b] Texte en gras [/b]</strong></button>
                                <button type="button" class="btn btn-secondary" disabled="disabled"><em>[i] Texte en italique [/i]</em></button>
                                <button type="button" class="btn btn-warning" disabled="disabled"><span style="color:red">[color=red] Texte en rouge [/color]</span></button>
                                <button type="button" class="btn btn-link" disabled="disabled"><a href="">Lien : http://...</a></button>
                            </div>
                            <div>
                                <P class="textCommentaire">kjdsqkjf kjd o eoo  oo if  ofof ioi oodsqo  q</p>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
		</main>
	<?php include('../footer.php') ?>
</body>

</html>