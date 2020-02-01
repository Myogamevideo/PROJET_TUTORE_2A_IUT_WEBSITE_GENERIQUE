<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-bannir.css">

<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxMonCompte">
                <h2>Mon compte</h2>
                <div class="divMonCompte">
                    <div class="barreNavigation">
                        <?php include('barreNavidationCompte.php')  ?>
                    </div>
                    <div class="divBannirMembre">
                        <h3>Bannir un membre : </h3>
                        <div>
                            <label>Veuillez saisir le pseudo de la personne à bannir :</label>
                            <input type="pseudoABanir" placeholder="Pseudo de la personne à bannir..." name="" require="">  
                        </div>
                        <div>
                            <label>Veuillez saisir le modif du bannissement :</label>
                            <textarea placeholder="Motif du bannissement.."></textarea>
                        </div>
                        <div>
                            <label>Veuillez saisir votre identifiant administrateur :</label>
                            <input type="pseudoAdmin" placeholder="Pseudo administrateur" name="" require="">  
                        </div>
                        <div>
                            <label>Mot de passe : </label>
                            <input type="password" name="mdpAdmin" require="" id="mdp">
                        </div>
                    </div>
                </div>
                <input type="submit" name="" value="Valider">
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>