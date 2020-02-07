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
                        <h3>Liste des membres : </h3>
                        <div class="liste">

                                <div class="containerImage">
                                    <div class="overlay simpleMembre">
                                        <div class="text">
                                            <div class="avatar">
                                                <img src="public/image/placeholder.jpg" alt="Avatar">
                                                <label  class="right"> Natsu44</div>
                                            </div>
                                            <p>Simple Membre</p>
                                            <p><label>Nom :</label>Natsu Dragnir</p>
                                            <p><label>E-mail</label>natsu.dragnir@outlook.fr</p>
                                            <p><label>Téléphone</label>04-71-55-55-88</p>
                                        </div>
                                        <img src="public/image/placeholder.jpg" alt="Avatar" class="image">
                                    </div>
                                </div>

                                <div class="containerImage">
                                    <div class="overlay admin">
                                        <div class="text">
                                            <div class="avatar">
                                                <img src="public/image/placeholder.jpg" alt="Avatar">
                                                <label  class="right"> Natsu44</div>
                                            </div>
                                            <p>Simple Membre</p>
                                            <p><label>Nom :</label>Natsu Dragnir</p>
                                            <p><label>E-mail</label>natsu.dragnir@outlook.fr</p>
                                            <p><label>Téléphone</label>04-71-55-55-88</p>
                                        </div>
                                        <img src="public/image/placeholder.jpg" alt="Avatar" class="image">
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