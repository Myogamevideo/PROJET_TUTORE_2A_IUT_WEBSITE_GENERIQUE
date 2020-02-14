<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-recapitulatif.css">
<link rel="stylesheet" href="public/css/style-barreCommande.css">
<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <h2>Commander :</h2>
            <div class="divRecapitulatif">
                <div class="barreCommande">
                    <?php include('barreCommande.php')  ?>
                </div>
                <div>
                    <h3>Mes articles :</h3>
                    <table class="myTablePanier">
                        <tr class="header">
                            <th>Name</th>
                            <th>Country</thth:40%;">
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>Berglunds snabbkop</td>
                            <td>Sweden</td>
                        </tr>
                        <tr>
                            <td>Island Trading</td>
                            <td>UK</td>
                        </tr>
                        <tr>
                            <td>Koniglich Essen</td>
                            <td>Germany</td>
                        </tr>
                    </table> 
                </div>
                <div class="livraisonTotal">
                    <div class="detail">
                        <div>
                            <h3>Livraison :</h3>
                            <div class="adresseSecondaire divAdresse">
                                    <h5>Adresse secondaire 1 :</h5>
                                    <p>Nom : <label>Heartfilia</label></p>
                                    <p>Prénom : <label>Lucy</label></p>
                                    <p>Code postal : <label>63000</label></p>
                                    <p>Complément d'adresse : <label>15 rue Roche Génès</label></p>
                            </div>
                        </div>
                        <div>
                            <h3>Paiement :</h3>
                            <div class="cardCB">
                                <label>Par carte : </label>
                                <p>Numéro de carte : <label>025669544545</label></p>
                                <p>Nom du propriétaire : <label>Natsu Dragnir</label></p>

                            </div>
                        </div>
                    </div>
                    <div class="divPrix">
                        <h5>Prix total de la livraison : <label>5€99</label></h5>
                        <h4>Prix total : <label>5€99</label></h4>
                    </div>
                </div>
                <div class="centrebtn">
                    <a href="index.php">Valider</a>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>