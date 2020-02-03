<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-boutique.css">

<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="containerAll">
                <h2>Boutique :</h2>
                <div class="slidershow">
                    <div class="slides ">
                        <input type="radio" name="r" id="r1" checked>
                        <input type="radio" name="r" id="r2">
                        <input type="radio" name="r" id="r3">
                        <input type="radio" name="r" id="r4">
                        <input type="radio" name="r" id="r5">
                        <?php
                        $reponse = $bdd->query('select reference,nom from produit order by reference desc limit 5');
                        $donnees = $reponse->fetch();
                        ?>
                        <div class="slide s1">
                            <?php echo '<a style="text-decoration:none;" href="article.php?reference_produit=' . $donnees['reference'] . '">'; ?>
                            <?php echo '<img src="public/image/' . $donnees['nom'] . '.jpg" alt="Image : ' . $donnees['nom'] . '">'; ?>
                            </a>
                        </div>
                        <?php
                        while ($donnees = $reponse->fetch()) {
                        ?>
                            <div class="slide">
                                <?php echo '<a style="text-decoration:none;" href="article.php?reference_produit=' . $donnees['reference'] . '">'; ?>
                                <?php echo '<img src="public/image/' . $donnees['nom'] . '.jpg" alt="Image : ' . $donnees['nom'] . '">'; ?>
                                </a>
                            </div>
                        <?php }
                        $reponse->closeCursor(); ?>
                    </div>
                    <div class="navigation">
                        <label for="r1" class="bar"></label>
                        <label for="r2" class="bar"></label>
                        <label for="r3" class="bar"></label>
                        <label for="r4" class="bar"></label>
                        <label for="r5" class="bar"></label>
                    </div>
                </div>

                <div class="boutique">
                    <div class="divFiltre">
                        <div class="filtre">
                            <a href="boutique.php?categorie=CD"><button class="btn success"><i class="fa fa-music"></i> CD</button></a></a>
                            <a href="boutique.php?categorie=Vinyle"><button class="btn success"><i class="fa fa-music"></i> Vinyle</button></a>
                            <a href="boutique.php?categorie=T-shirt"><button class="btn success"><i class="fa fa-music"></i> T-shirt</button></a>

                            <ul class="rajouterFiltre">
                                <script type="text/javascript" src="public/js/boutique.js"></script>
                                <li href="javascript:void(0);" onclick="myFunction()">
                                    <span class="nav-icon"><i class="fa fa-bars"></i></span>
                                    Filtres
                                </li>
                            </ul>
                            <div class="filtreAvance">
                                <form method="GET" action="boutique.php">
                                    <?php
                                    if (isset($_GET['categorie']) and !empty($_GET['categorie'])) {
                                    ?> <input type="hidden" id="categorie" name="categorie" value="<?php echo $_GET['categorie']; ?>">
                                    <?php
                                    } ?>
                                    <div id="ajoutDiv">
                                        <label>Gamme de produit : </label>
                                        <div class="filtrePrix">
                                            <input type="number" id="prixMinimun" name="prixMinimun" min="0" max="1000" value="0">
                                            <input type="number" id="prixMaximun" name="prixMaximun" min="0" max="1000" value="1000">
                                        </div>
                                        <label>Artiste : </label>
                                        <div class="filtreSearch">
                                            <input type="text" placeholder="Search..">
                                            <input type="submit" value="Valider"><i class="fa fa-search"></i></input>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="product">
                        <div class="card">
                            <?php
                            if (isset($_GET['categorie']) and !empty($_GET['categorie'] and !isset($_GET['prixMinimun']))) {
                                $reponse = $bdd->prepare('select reference,nom,description,prix from produit where categorie=?');
                                $reponse->execute(array($_GET['categorie']));
                            } elseif (isset($_GET['categorie']) and !empty($_GET['categorie'] and isset($_GET['prixMinimun']))) {
                                $reponse = $bdd->prepare('select reference,nom,description,prix from produit where categorie=? and prix > ' . $_GET['prixMinimun'] . ' and prix <' . $_GET['prixMaximun'] . '');
                                $reponse->execute(array($_GET['categorie']));
                            } elseif (!isset($_GET['categorie']) and !isset($_GET['prixMinimun']) and !isset($_GET['prixMaximun'])) {
                                $reponse = $bdd->query('select reference,nom,description,prix from produit');
                            } elseif (!isset($_GET['categorie']) and isset($_GET['prixMinimun'])) {
                                $reponse = $bdd->prepare('select reference,nom,description,prix from produit where prix > ' . $_GET['prixMinimun'] . ' and prix <' . $_GET['prixMaximun'] . '');
                                $reponse->execute();
                            }
                            while ($donnees = $reponse->fetch()) {
                            ?>
                                <div class="card-product">
                                    <?php echo '<a href="article.php?reference_produit=' . $donnees['reference'] . '">'; ?>
                                    <div class="card-image">
                                        <?php echo '
                                        <img onClick="change_img(this)" src="public/image/' . $donnees['nom'] . '.jpg" alt="Image : ' . $donnees['nom'] . '">
                                        '; ?>
                                    </div>
                                    <div class="card-text">
                                        <h3><?php echo $donnees['nom'] ?></h3>
                                    </div>
                                    </a>
                                    <div class="card-option">
                                        <?php echo '<a href="article.php?reference_produit=' . $donnees['reference'] . '" class="prix">' . $donnees['prix'] . '€ </a>'; ?>
                                        <a href="#" class="caddie"><i class="fa fa-shopping-cart fa-2x" style="color:white;"></i></a>
                                    </div>
                                </div>
                            <?php }
                            $reponse->closeCursor(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?></body>

</html>