<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-accueil.css">

<body>
    <?php include('header-video.php') ?>
    <main>
        <div class="container">
            <div class="slidershow">
                <div class="slides ">
                    <input type="radio" name="r" id="r1" checked>
                    <input type="radio" name="r" id="r2">
                    <input type="radio" name="r" id="r3">
                    <input type="radio" name="r" id="r4">
                    <input type="radio" name="r" id="r5">
                    <?php
                    $reponse = $bdd->query('select id,contenu,titre from billets order by date_creation limit 5');
                    $donnees = $reponse->fetch();
                    ?>
                    <div class="slide s1">
                        <?php
                        $image = str_replace(' ', '', 'public/image/blog/' . $donnees['titre'] . '.jpg');
                        echo '<a style="text-decoration:none;" href="commentaires.php?id_billet=' . $donnees['id'] . '">'; ?>
                        <?php echo '<img src="' . $image . '" alt="Image : ' . $donnees['titre'] . '">'; ?>
                        </a>
                    </div>
                    <?php
                    while ($donnees = $reponse->fetch()) {
                    ?>
                        <div class="slide">
                            <?php
                            $image = str_replace(' ', '', 'public/image/blog/' . $donnees['titre'] . '.jpg');
                            echo '<a style="text-decoration:none;" href="commentaires.php?id_billet=' . $donnees['id'] . '">'; ?>
                            <?php echo '<img src="' . $image . '" alt="Image : ' . $donnees['titre'] . '">'; ?>
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
            <div class="vertical-menu">
                <?php
                $reponse = $bdd->query('select id,contenu,titre from billets order by date_creation limit 5');
                while ($donnees = $reponse->fetch()) {
                    $image = str_replace(' ', '', 'public/image/boutique/' . $donnees['titre'] . '.jpg');
                    echo '<a href="commentaires.php?id_billet=' . $donnees['id'] . '">
                        <img src="' . $image . '" alt="Image : ' . $donnees['titre'] . '">
                    </a>'; ?>
                <?php }
                $reponse->closeCursor(); ?>
            </div>
            <div class="card">
                <?php
                $req = $bdd->query('SELECT * FROM parametres WHERE 1');
                $donnees = $req->fetch();
                if ($donnees['nomBlog'] != null) { ?>
                    <div class="presentation-card">
                        <h2>Dernier <?php echo $donnees['nomBlog']; ?> :</h2>
                        <button class="button" onclick="javascript:location.href='blog.php'"><span> + <?php echo $donnees['nomBlog']; ?></span></button>
                    </div>
                    <div class="liste-card">
                        <?php
                        $reponse = $bdd->query('select id,contenu,titre from billets order by date_creation limit 6');
                        while ($data = $reponse->fetch()) {
                        ?>
                            <div class="flip-card">
                                <?php echo '<a style="text-decoration:none;" href="commentaires.php?id_billet=' . $data['id'] . '">'; ?>
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <?php
                                        $image = str_replace(' ', '', 'public/image/blog/' . $data['titre'] . '.jpg');

                                        echo '<img src="' . $image . '" alt="Image : ' . $data['titre'] . '" style="width:350px;height:200px;">'; ?>
                                    </div>
                                    <div class="flip-card-back">
                                        <h1><?php echo $data['titre']; ?></h1>
                                        <?php echo '<p style="max-height: 2em;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                white-space: nowrap;">' . $data['contenu'] . '</p>'; ?>
                                    </div>
                                </div>
                                </a>
                            </div>
                        <?php }
                        $reponse->closeCursor(); ?>
                    </div>
                <?php
                }
                ?>
                <hr width="100%" color="grey">
                <div class="card">
                    <?php
                    if ($donnees['nomBoutique'] != null) { ?>
                        <div class="presentation-card">
                            <h2><?php echo $donnees['nomBoutique']; ?> mis en avant :</h2>
                            <button class="button" onclick="javascript:location.href='boutique.php'"><span> + <?php echo $donnees['nomBoutique']; ?></span></button>
                        </div>
                        <div class="liste-card">
                            <?php
                            $reponse = $bdd->query('select reference,nom,description,prix from produit limit 6');
                            while ($data = $reponse->fetch()) {
                            ?>
                                <div class="flip-card">
                                    <?php echo '<a style="text-decoration:none;" href="blog.php?id_billet=' . $data['reference'] . '">'; ?>
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <?php echo '<img src="public/image/boutique/' . $data['nom'] . '.jpg" alt="Image : ' . $data['nom'] . '" style="width:350px;height:200px;">'; ?>
                                        </div>
                                        <div class="flip-card-back">
                                            <h1><?php echo $data['nom']; ?></h1>
                                            <?php echo '<p style="max-height: 2em;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                white-space: nowrap;">' . $data['description'] . '</p>'; ?>
                                            <h3><?php echo '' . $data['prix'] . '€' ?></h3>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            <?php }
                            $reponse->closeCursor(); ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="topic-groupe">
                    <div class="topic">
                        <?php
                        if ($donnees['nomForum'] != null) { ?>
                            <div class="presentation-card">
                                <h2><?php echo $donnees['nomForum']; ?> :</h2>
                                <button class="button" onclick="javascript:location.href='forum.php'"><span> + <?php echo $donnees['nomForum']; ?></span></button>
                            </div>
                            <table>
                                <thead>
                                    <th>Auteur</th>
                                    <th>Titre</th>
                                    <th>Dernière Modification</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $reponse = $bdd->query('select T.id, M.id, pseudo, idAuteur, titre, creation, lastModification from topic T, membre M where M.id = idAuteur order by lastModification limit 4');
                                    while ($data = $reponse->fetch()) {
                                    ?>
                                        <tr>
                                            <td> <?php echo $data['pseudo'] ?></td>
                                            <td> <?php echo $data['titre'] ?></td>
                                            <td> <?php echo $data['lastModification'] ?></td>
                                        </tr>
                                    <?php }
                                    $reponse->closeCursor(); ?>
                                </tbody>
                            </table>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="presentation">
                        <div class="presentation-card">
                            <?php
                            $req = $bdd->query('SELECT nomDuSite FROM parametres WHERE 1');
                            $donnees = $req->fetch();
                            echo '<h2>Le groupe ' . $donnees['nomDuSite'] . ' :</h2>';
                            ?>
                        </div>
                        <div class="presentation-principal">
                            <div class="presentation-gauche">
                                <div class="presentation-container">
                                    <img src="public/image/web/background.jpg" alt="">
                                    <p>
                                        Blabla désigne un bavardage inepte, un verbiage, une verbigération, c'est-à-dire
                                        un flux de paroles d'une totale inutilité et qui, de plus, montre des incohérences.
                                    </P>
                                </div>
                                <div class="presentation-alignement">
                                    <div class="presentation-lien">
                                        <a href="#">Notre équipe</a>
                                        <a href="#">Regroupement</a>
                                        <a href="#">Venir nous rencontrer</a>
                                        <a href="#">Nous contacter</a>
                                    </div>
                                    <div id="piechart"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type="text/javascript" src="public/js/diagramme.js"></script>
                                </div>
                            </div>
                            <div class="presentation-video">
                                <video autoplay controls loop poster="public/image/web/background.jpg" id="bgvid">
                                    <source src="public/video/background.mp4" type="video/mp4">
                                    <p>Votre navigateur ne prend pas en charge les vidéos HTML5.</p>
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>