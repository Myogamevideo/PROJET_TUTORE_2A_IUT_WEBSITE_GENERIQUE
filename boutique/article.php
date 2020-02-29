<?php include('../head.php') ?>
<link rel="stylesheet" href="../public/css/style-article.css">

<body>
    <?php include('../header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxArticle">
                <h2>Article : </h2>
                <div class="containerArticle">
                    <div class="divFiltre">
                        <div class="filtre">
                            <?php
                            $reponse = $bdd->query('SELECT DISTINCT categorie FROM produit');
                            while ($donnees = $reponse->fetch()) {
                                echo '<a href="../boutique/boutique.php?categorie=' . $donnees['categorie'] . '"><button class="btn success"><i class="fa fa-music"></i>' . $donnees['categorie'] . '</button></a></a>';
                            }
                            $reponse->closeCursor(); ?>
                            <ul class="rajouterFiltre">
                                <script type="text/javascript" src="../public/js/boutique.js"></script>
                                <li href="javascript:void(0);" onclick="myFunction()">
                                    <span class="nav-icon"><i class="fa fa-bars"></i></span>
                                    Filtres
                                </li>
                            </ul>
                            <div class="filtreAvance">
                                <form method="GET" action="../boutique/boutique.php">
                                    <?php
                                    if (isset($_GET['categorie']) and !empty($_GET['categorie'])) {
                                    ?> <input type="hidden" id="categorie" name="categorie" value="<?php echo $_GET['categorie']; ?>">
                                    <?php
                                    } ?>
                                    <div id="ajoutDiv">
                                        <label>Gamme de produit : </label>
                                        <div class="filtrePrix">
                                            <?php
                                            $reponse = $bdd->query('SELECT min(prix) as min FROM produit');
                                            $donnees = $reponse->fetch();
                                            echo '<input type="number" id="prixMinimun" name="prixMinimun" min="0" max="1000" step="0.01" value="' . $donnees['min'] . '">';
                                            $reponse = $bdd->query('SELECT max(prix) as max FROM produit');
                                            $donnees = $reponse->fetch();
                                            echo '<input type="number" id="prixMaximun" name="prixMaximun" min="0" max="1000" step="0.01" value="' . $donnees['max'] . '">';
                                            ?>
                                        </div>
                                        <label>Artiste : </label>
                                        <div class="filtreSearch">
                                            <input type="text" placeholder="Search.." name="recherche">
                                            <input type="submit" value="Valider"><i class="fa fa-search"></i></input>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="divArticle">
                            <?php $req = $bdd->prepare('select quantite,nom,description,prix,note,categorie from produit where reference=?');
                            $req->execute(array($_GET['reference_produit']));
                            $donnees = $req->fetch(); ?>
                            <div class="product">
                                <div class="product-image">
                                    <?php echo '<img src="../public/image/boutique/' . $donnees['nom'] . '.jpg" alt="Image : ' . $donnees['nom'] . '">'; ?> </div>
                                <div class="stock">
                                    <?php if ($donnees['quantite'] != 0) {
                                        echo '<label class="product-disponibilite">En stock : ' . $donnees['quantite'] . '</label>';
                                    } else {
                                        echo '<label class="product-disponibilite">Indisponible</label>';
                                    }
                                    ?>
                                </div>
                                <div class="product-notation">
                                    <?php switch ($donnees['note']) {
                                        case 0:
                                    ?>
                                            <span class="fa fa-star fa-2x"></span>
                                            <span class="fa fa-star fa-2x"></span>
                                            <span class="fa fa-star fa-2x"></span>
                                            <span class="fa fa-star fa-2x"></span>
                                            <span class="fa fa-star fa-2x"></span>
                                        <?php
                                            break;
                                        case 1:
                                        ?>
                                            <span class="fa fa-star fa-2x checked"></span>
                                            <span class="fa fa-star fa-2x"></span>
                                            <span class="fa fa-star fa-2x"></span>
                                            <span class="fa fa-star fa-2x"></span>
                                            <span class="fa fa-star fa-2x"></span>
                                        <?php
                                            break;
                                        case 2:
                                        ?>
                                            <span class="fa fa-star fa-2x checked"></span>
                                            <span class="fa fa-star fa-2x checked"></span>
                                            <span class="fa fa-star fa-2x"></span>
                                            <span class="fa fa-star fa-2x"></span>
                                            <span class="fa fa-star fa-2x"></span>
                                        <?php
                                            break;
                                        case 3:
                                        ?>
                                            <span class="fa fa-star fa-2x checked"></span>
                                            <span class="fa fa-star fa-2x checked"></span>
                                            <span class="fa fa-star fa-2x checked"></span>
                                            <span class="fa fa-star fa-2x"></span>
                                            <span class="fa fa-star fa-2x"></span>
                                        <?php
                                            break;
                                        case 4:
                                        ?>
                                            <span class="fa fa-star fa-2x checked"></span>
                                            <span class="fa fa-star fa-2x checked"></span>
                                            <span class="fa fa-star fa-2x checked"></span>
                                            <span class="fa fa-star fa-2x checked"></span>
                                            <span class="fa fa-star fa-2x"></span>
                                        <?php
                                            break;
                                        case 5:
                                        ?>
                                            <span class="fa fa-star fa-2x checked"></span>
                                            <span class="fa fa-star fa-2x checked"></span>
                                            <span class="fa fa-star fa-2x checked"></span>
                                            <span class="fa fa-star fa-2x checked"></span>
                                            <span class="fa fa-star fa-2x checked"></span>
                                    <?php
                                            break;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><?php echo $donnees['nom'] ?> </h3>
                                <p><?php echo $donnees['description'] ?></p>
                                <div class="prix">
                                    <p>Prix : <label><?php echo '' . $donnees['prix'] . '€'; ?></label></p>
                                </div>
                                <?php if ($donnees['categorie'] == "T-shirt") { ?>
                                    <div class="taille">
                                        <label>Taille : </label>
                                        <input type="submit" name="" value="XS">
                                        <input type="submit" name="" value="S">
                                        <input type="submit" name="" value="M">
                                        <input type="submit" name="" value="L">
                                        <input type="submit" name="" value="XL">
                                        <input type="submit" name="" value="XXL">
                                    </div>
                                <?php
                                }
                                ?>
                                <?php if ($donnees['quantite'] != 0) {
                                ?><form method="GET">
                                        <div class="nbArticle">
                                            <label>Nombre d'article : </label>
                                            <input type="number" id="nbArticle" name="nbArticle" min="1" max="10" value="1">
                                            <input type="hidden" id="reference_produit" name="reference_produit" value="<?php echo $_GET['reference_produit']; ?>">
                                        </div>
                                        <input type="submit" value="Ajouter au panier"><i class="fa fa-search"></i></input>
                                    </form>
                                <?php } ?>

                                <div class="alert alert-danger">
                                    <?php
                                    if (isset($_GET['reference_produit']) and isset($_GET['nbArticle']) and $_GET['reference_produit'] != 0 and $_GET['nbArticle'] != 0) {
                                        if (!isset($_SESSION['panier'])) {
                                            $_SESSION['panier'] = array();
                                            $_SESSION['panier']['id_produit'] = array();
                                            $_SESSION['panier']['quantite'] = array();
                                        }
                                        $positionProduit = array_search($_GET['reference_produit'],  $_SESSION['panier']['id_produit']);
                                        if ($positionProduit !== false) {
                                            $_SESSION['panier']['quantite'][$positionProduit] += $_GET['nbArticle'];
                                        } else {
                                            array_push($_SESSION['panier']['id_produit'], $_GET['reference_produit']);
                                            array_push($_SESSION['panier']['quantite'], $_GET['nbArticle']);
                                        }
                                        echo 'L\'article a été ajouté au panier';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="divAvisClient">
                            <label class="product-avis">Avis : </label>
                            <div class="divAvis">
                                <?php
                                $req = $bdd->prepare('select id,auteur,id_produit,date_avis,avis from avisProduit where id_produit=?');
                                $req->execute(array($_GET['reference_produit']));
                                while ($donnees = $req->fetch()) { ?>
                                    <div class="avisClient">
                                        <label>Date :</label>
                                        <p> <?php echo $donnees['date_avis']; ?></p>
                                        <i class="fa fa-user-circle" style="color:black;"></i>
                                        <label class="surnameClient">Auteur : </label>
                                        <p><?php echo $donnees['auteur']; ?></p>
                                        <?php
                                        if (isset($_SESSION['pseudo']) and $_SESSION['pseudo'] == $donnees['auteur']) {
                                        ?>
                                            <i class="fa fa-remove" style="color:red;"></i>
                                            <?php
                                            echo '<form method="POST" action="boutique/deleteavis.php?id=' . $donnees['id'] . '&amp;id_produit=' . $_GET['reference_produit'] . '">';
                                            echo '<button type="submit" class="btnSupp"> Supprimer</button> ';
                                            echo '</form>'; ?>
                                        <?php } ?>
                                        <p class="commentaire"> <?php echo $donnees['avis']; ?></p>
                                    </div>
                                <?php }
                                $req->closeCursor(); ?>
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