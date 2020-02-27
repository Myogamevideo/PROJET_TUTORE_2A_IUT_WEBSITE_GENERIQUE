<?php include('../head.php') ?>
<link rel="stylesheet" href="public/css/style-paiement.css">
<link rel="stylesheet" href="public/css/style-barreCommande.css">
<body>
    <?php include('../header-image.php') ?>
    <main>
        <div class="container">
            <h2>Commander :</h2>
            <div class="divPaiement">
                <div class="barreCommande">
                    <?php include('boutique/barreCommande.php')  ?>
                </div>
                <div class="paiement">
                    <h3>Moyen de paiments :</h3>
                    <div class="divMoyenPaiment">
                        <h4><i class="fa fa-bars"></i>Paypal : </h4>
                        <div class=paypal>

                        </div>
                    </div>
                    <div class="divMoyenPaiment">
                        <h4><i class="fa fa-bars"></i>Par carte : </h4>
                        <div class="listeCarteCB">
                            <div class="cardCB">
                                <p>Numéro de carte : <label>025669544545</label></p>
                                <p>Nom du propriétaire : <label>Natsu Dragnir</label></p>
                                <p>CVV : <label>159</label></p>
                                <p>Expiration : <label>06/19</label></p>
                            </div>
                            <div class="cardCB">
                                <p>Numéro de carte : <label>025669544545</label></p>
                                <p>Nom du propriétaire : <label>Natsu Dragnir</label></p>
                                <p>CVV : <label>159</label></p>
                                <p>Expiration : <label>06/19</label></p>
                            </div>
                            <div class="cardCB">
                                <p>Numéro de carte : <label>025669544545</label></p>
                                <p>Nom du propriétaire : <label>Natsu Dragnir</label></p>
                                <p>CVV : <label>159</label></p>
                                <p>Expiration : <label>06/19</label></p>
                            </div>
                            <div class="cardCB">
                                <p>Numéro de carte : <label>025669544545</label></p>
                                <p>Nom du propriétaire : <label>Natsu Dragnir</label></p>
                                <p>CVV : <label>159</label></p>
                                <p>Expiration : <label>06/19</label></p>
                            </div>
                            <div class="cardCB">
                                <p>Numéro de carte : <label>025669544545</label></p>
                                <p>Nom du propriétaire : <label>Natsu Dragnir</label></p>
                                <p>CVV : <label>159</label></p>
                                <p>Expiration : <label>06/19</label></p>
                            </div>
                            <div class="cardCB">
                                <p>Numéro de carte : <label>025669544545</label></p>
                                <p>Nom du propriétaire : <label>Natsu Dragnir</label></p>
                                <p>CVV : <label>159</label></p>
                                <p>Expiration : <label>06/19</label></p>
                            </div>
                        </div>
                        <div class="divButton">
                                <button class="button" type="button">
                                    <i class="fa fa-plus-circle fa-2x" style="color:orange;"></i>
                                    Ajouter une carte bancaire
                                </button>
                                <button class="button" type="button">
                                    <i class="fa fa-remove fa-2x" style="color:red;"></i>
                                    Supprimer une carte bancaire
                                </button>
                        </div>
                        <div class="ajoutCarteBancaire">
                            <div class="divInput">
                                <label>Numéro de la carte :</label>
                                <input type="text" name="numCarte" require="" id="numCarte" placeholder="Nouveau de la carte bancaire">  
                            </div>
                            <div class="divInput">
                                <label>Nom du titulaire :</label>
                                <input type="text" name="nomTitulaire" require="" id="nomTitulaire" placeholder="Nom du titulaire">  
                            </div>
                            <div class="divInput">
                                <label>CVV :</label>
                                <input type="text" name="cvv" require="" id="cvv" placeholder="CVV">  
                            </div>
                            <div class="divInput">
                                <label>Expiration :</label>
                                <input  type="date" id="dayeExpiration" name="dayeExpiration" value="2018-07-22"  min="2018-01-01" >
                            </div>
                            <input type="submit" value="Enregistrer !">
                        </div>
                    </div>
                    <div class="centrebtn">
                        <a href="boutique/recapitulatif.php">Valider</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('../footer.php') ?>
</body>

</html>