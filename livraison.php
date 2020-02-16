<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-livraison.css">
<link rel="stylesheet" href="public/css/style-barreCommande.css">
<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div>
                <h2>Commander :</h2>
                <div class="contentAll">
                    <div class="divLivraison">
                        <div class="barreCommande">
                            <?php include('barreCommande.php')  ?>
                        </div>
                        <div class="livraison">
                            <h3>Lieu de livraison :</h3>
                            <div class="mesAdresse">
                                <div class="adressePrincipale divAdresse">
                                    <h5>Mon adresse principale :</h5>
                                    <p>Nom : <label>Dragnir</label></p>
                                    <p>Prénom : <label>Natsu</label></p>
                                    <p>Code postal : <label>63000</label></p>
                                    <p>Complément d'adresse : <label>15 rue Roche Génès</label></p>
                                </div>
                                <div class="adresseSecondaire divAdresse">
                                    <h5>Adresse secondaire 1 :</h5>
                                    <p>Nom : <label>Heartfilia</label></p>
                                    <p>Prénom : <label>Lucy</label></p>
                                    <p>Code postal : <label>63000</label></p>
                                    <p>Complément d'adresse : <label>15 rue Roche Génès</label></p>
                                </div>
                                <div class="adresseSecondaire divAdresse">
                                    <h5>Adresse secondaire 1 :</h5>
                                    <p>Nom : <label>Heartfilia</label></p>
                                    <p>Prénom : <label>Lucy</label></p>
                                    <p>Code postal : <label>63000</label></p>
                                    <p>Complément d'adresse : <label>15 rue Roche Génès</label></p>
                                </div>
                            </div>
                            <div class="divButton">
                                <button class="button" type="button">
                                    <i class="fa fa-plus-circle fa-2x" style="color:orange;"></i>
                                    Ajouter une adresse
                                </button>
                                <button class="button" type="button">
                                    <i class="fa fa-pencil fa-2x" style="color:#99ff99;"></i>
                                    Modifier une adresse
                                </button>
                            </div>
                        </div>
                        <div>
                            <div>
                                <h3>Détail de la livraison :</h3>
                                <div>
                                    <p>Livraison dans les 5 jours ouvrables pour un montant de 5,99€</p>
                                </div>
                            </div>
                            <div class="centrebtn">
                                <a href="paiement.php">Valider</a>
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