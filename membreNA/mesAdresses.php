<?php include('../head.php') ?>
<link rel="stylesheet" href="../public/css/style-mesAdresses.css">

<body>
    <?php include('../header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxMonCompte">
                <h2>Mon compte</h2>
                <div class="divMonCompte">
                    <div class="barreNavigation">
                        <?php include('../barreNavidationCompte.php')  ?>
                    </div>
                    <div class="divAdresses">
                        <h3>Mes adresses : </h3>
                        <div class="adresse">
                            <div class="listeAdresse">
                                <h5>Mon adresse principale :</h5>
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
                            </div>
                            <div class="divButtons">
                            <script type="text/javascript" src="../public/js/MonCompte.js"></script>

                                <button class="button" type="button">
                                    <i class="fa fa-address-card-o fa-2x" style="color:red;"></i>
                                    Changer l'adresse principale
                                </button>
                                <button class="button" type="button">
                                    <i class="fa fa-plus-circle fa-2x" style="color:orange;"></i>
                                    Ajouter une adresse
                                </button>
                                <button class="button" type="button">
                                    <i class="fa fa-pencil fa-2x" style="color:#99ff99;"></i>
                                    Modifier une adresse
                                </button>
                                <button class="button" type="button">
                                    <i class="fa fa-remove fa-2x" style="color:red;"></i>
                                    Supprimer une adresse
                                </button>
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