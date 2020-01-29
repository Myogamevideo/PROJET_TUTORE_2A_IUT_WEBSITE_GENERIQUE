<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-article.css">

<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxArticle">
                <h2>Article : </h2>
                <div class="containerArticle">
                    <div class="divFiltre">
                        <div class="filtre">
                            <button class="btn success"><i class="fa fa-music"></i> CD</button>
                            <button class="btn success"><i class="fa fa-music"></i> Vinyle</button>
                            <button class="btn success"><i class="fa fa-music"></i> T-shirt</button>

                            <ul class="rajouterFiltre">
                                <script type="text/javascript" src="public/js/boutique.js"></script>
                                <li href="javascript:void(0);" onclick="myFunction()">
                                    <span class="nav-icon"><i class="fa fa-bars"></i></span>
                                    Filtres
                                </li>
                            </ul>
                            <div class="filtreAvance">
                                <div id="ajoutDiv">
                                    <label>Gamme de produit : </label>
                                    <div class="filtrePrix">
                                        <input type="number" id="prixMinimun" name="prixMinimun" min="0" max="1000" value="0">
                                        <input type="number" id="prixMaximun" name="prixMaximun" min="0" max="1000" value="1000">
                                    </div>
                                    <label>Artiste : </label>
                                    <div class="filtreSearch">
                                        <input type="text" placeholder="Search..">
                                        <button type="button"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="divArticle">
                            <?php $req = $bdd->prepare('select nom, description,prix from produit where reference=?');
                            $req->execute(array($_GET['reference_produit']));
                            $donnees = $req->fetch(); ?>
                            <div class="product">
                                <div class="product-image">
                                    <img src="public/image/boutique1.jpg" />
                                </div>
                                <div class="stock">
                                    <label class="product-disponibilite">En stock</label>
                                </div>
                                <div class="product-notation">
                                    <span class="fa fa-star fa-2x checked"></span>
                                    <span class="fa fa-star fa-2x checked"></span>
                                    <span class="fa fa-star fa-2x checked"></span>
                                    <span class="fa fa-star fa-2x "></span>
                                    <span class="fa fa-star fa-2x "></span>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><?php echo $donnees['nom'] ?> </h3>
                                <p><?php echo $donnees['description'] ?></p>
                                <div class="prix">
                                    <p>Prix : <label><?php echo '' . $donnees['prix'] . '€'; ?></label></p>
                                </div>
                                <div class="taille">
                                    <label>Taille : </label>
                                    <input type="submit" name="" value="XS">
                                    <input type="submit" name="" value="S">
                                    <input type="submit" name="" value="M">
                                    <input type="submit" name="" value="L">
                                    <input type="submit" name="" value="XL">
                                    <input type="submit" name="" value="XXL">
                                </div>
                                <div class="nbArticle">
                                    <label>Nombre d'article : </label>
                                    <input type="number" id="nbArticle" name="nbArticle" min="0" max="100" value="1">
                                </div>
                            </div>
                        </div>
                        <div class="divAvisClient">
                            <label class="product-avis">Avis : </label>
                            <div class="divAvis">
                                <div class="avisClient">
                                    <label class="surnameClient">Client blabla</label>
                                    <p class="commentaire">Examen critique du contenu et de la forme d'un texte documentaire
                                        ou littéraire, en vue d'une lecture plus pénétrante de ce texte. Un commentaire historique,
                                        littéraire, philologique; des éditions avec commentaires. </p>
                                </div>
                                <div class="avisClient">
                                    <label class="surnameClient">Client blabla</label>
                                    <p class="commentaire">Examen critique du contenu et de la forme d'un texte documentaire
                                        ou littéraire, en vue d'une lecture plus pénétrante de ce texte. Un commentaire historique,
                                        littéraire, philologique; des éditions avec commentaires. </p>
                                </div>
                                <div class="avisClient">
                                    <label class="surnameClient">Client blabla</label>
                                    <p class="commentaire">Examen critique du contenu et de la forme d'un texte documentaire
                                        ou littéraire, en vue d'une lecture plus pénétrante de ce texte. Un commentaire historique,
                                        littéraire, philologique; des éditions avec commentaires. </p>
                                </div>
                                <div class="avisClient">
                                    <label class="surnameClient">Client blabla</label>
                                    <p class="commentaire">Examen critique du contenu et de la forme d'un texte documentaire
                                        ou littéraire, en vue d'une lecture plus pénétrante de ce texte. Un commentaire historique,
                                        littéraire, philologique; des éditions avec commentaires. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>