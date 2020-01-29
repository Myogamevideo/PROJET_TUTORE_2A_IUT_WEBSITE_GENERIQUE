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
                        $reponse = $bdd->query('select reference,nom from produit limit 5');
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

                    <div class="product">
                        <div class="card">
                            <?php
                            $reponse = $bdd->query('select reference,nom,description,prix from produit limit 6');
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
                                        <a href="article.php" class="prix"><?php echo ''.$donnees['prix'].'€'; ?></a>
                                        <!--<a href="#" class="aimer"><i class="fa fa-heart fa-2x" style="color:white;"></i></a>-->
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