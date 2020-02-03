<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-mesAdresses.css">

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
                    <div class="divAdresses">
                        <h3>Mes adresses : </h3>
                        <div class="adresse">
                            <div class="listeAdresse">
                            <h5>Mon adresse principale :</h5>
                            <div class="adressePrincipale">
                                    <p>Nom : <label>Dragnir</label></p>
                                    <p>Prénom : <label>Natsu</label></p>
                                    <p>Code postal : <label>63000</label></p>
                                    <p>Complément d'adresse : <label>15 rue Roche Génès</label></p>
                                </div>
                                <h5>Mes adresse principale :</h5>
                                <div class="adresseSecondaire">
                                    <p>Nom : <label>Heartfilia</label></p>
                                    <p>Prénom : <label>Lucy</label></p>
                                    <p>Code postal : <label>63000</label></p>
                                    <p>Complément d'adresse : <label>15 rue Roche Génès</label></p>
                                </div>
                                <div class="adresseSecondaire">
                                    <p>Nom : <label>Heartfilia</label></p>
                                    <p>Prénom : <label>Lucy</label></p>
                                    <p>Code postal : <label>63000</label></p>
                                    <p>Complément d'adresse : <label>15 rue Roche Génès</label></p>
                                </div>
                            </div>
                            <div class="button">
                                <div>
                                    <i class="fa fa-address-card-o fa-2x" style="color:red;"></i>
                                    <label>Changer l'adresse principale :</label>
                                </div>
                                <div>
                                    <i class="fa fa-plus-circle fa-2x" style="color:orange;"></i>
                                    <label>Ajouter une adresse :</label>
                                </div>
                                <div>
                                    <i class="fa fa-pencil fa-2x" style="color:#99ff99;"></i>
                                    <label>Modifier une adresse :</label>
                                </div>
                                <div>
                                    <i class="fa fa-remove fa-2x" style="color:red;"></i>
                                    <label>Supprimer une adresse :</label>
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