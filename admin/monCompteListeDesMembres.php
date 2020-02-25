<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-listeDesMembres.css">

<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxMonCompte">
                <h2>Mon Compte :</h2>
                <div class="divMonCompte">
                    <div class="barreNavigation">
                        <?php include('barreNavidationCompte.php')  ?>
                    </div>
                    <div class="divListeDesMembres">
                        <div class="liste">
                            <h3>Liste des membres : </h3>
                            <?php
                            $reponse = $bdd->query('SELECT * FROM membre ORDER BY date_inscription');
                            while ($donnees = $reponse->fetch()) {
                            ?>
                                <div class="containerImage">
                                    <img src="public/image/web/placeholder.jpg" alt="Avatar" class="image">
                                    <div class="overlay simpleMembre">
                                        <div class="text">
                                            <div class="avatar">
                                                <img src="public/image/web/placeholder.jpg" alt="Avatar">
                                                <label class="labelPseudo"><?php echo $donnees['pseudo']; ?></label>
                                            </div>
                                            <p><?php echo $donnees['statu']; ?></p>
                                            <p><label>Nom : </label><?php echo $donnees['nom']; ?></p>
                                            <p><label>Prenom : </label><?php echo $donnees['prenom']; ?></p>
                                            <p><label>E-mail : </label><?php echo $donnees['email']; ?></p>
                                            <p><label>Téléphone : </label><?php echo '+33' . $donnees['telephone']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            $reponse->closeCursor();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <?php include('footer.php') ?> </body>

</html>