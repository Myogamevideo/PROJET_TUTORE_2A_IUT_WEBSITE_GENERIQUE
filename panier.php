<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-panier.css">

<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div>
                <h2>Commander :</h2>
                <div class="contentAll">
                    <div class="divPanier">
                        <div class="etapeCommande">
                            <div>
                                <div class="circle">
                                    <i class="fa fa-shopping-basket fa-2x"></i>
                                </div>
                                <label>Livraison</label>
                            </div>
                            <div>
                                <div class="circle">
                                    <i class="fa fa-credit-card-alt fa-2x"></i>
                                </div>
                                <label>Paiement</label>
                            </div>
                            <div>
                                <div class="circle">
                                    <i class="fa fa-sticky-note fa-2x"></i>
                                </div>
                                <label>Récapitulatif</label>
                            </div>
                        </div>
                        <div>
                            <h3>Lieu de livraison :</h3>
                            <div class="mesAdresse">
                                <h4>Mes adresses :</h4>
                                <div class="adressePrincipale divAdresse">
                                    <p>Nom : <label>Dragnir</label></p>
                                    <p>Prénom : <label>Natsu</label></p>
                                    <p>Code postal : <label>63000</label></p>
                                    <p>Complément d'adresse : <label>15 rue Roche Génès</label></p>
                                </div>
                                <h5>Mes adresse principale :</h5>
                                <div class="adresseSecondaire divAdresse">
                                    <p>Nom : <label>Heartfilia</label></p>
                                    <p>Prénom : <label>Lucy</label></p>
                                    <p>Code postal : <label>63000</label></p>
                                    <p>Complément d'adresse : <label>15 rue Roche Génès</label></p>
                                </div>
                                <div class="adresseSecondaire divAdresse">
                                    <p>Nom : <label>Heartfilia</label></p>
                                    <p>Prénom : <label>Lucy</label></p>
                                    <p>Code postal : <label>63000</label></p>
                                    <p>Complément d'adresse : <label>15 rue Roche Génès</label></p>
                                </div>
                                <div class="optionAdresse">
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
                        </div>
                        <div>
                            <h3>Détail de la livraison :</h3>
                            <div class="infoLivraison">
                                <p>Livraison dans les 5 jours ouvrables pour un montant de 5,99€</p>
                            </div>
                        </div>
                        <a href="livraison.php">Valider</a>
                    </div>
                </div>
            </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>