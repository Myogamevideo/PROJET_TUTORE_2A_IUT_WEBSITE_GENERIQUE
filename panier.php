<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-panier.css">

<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
                <h2>Panier :</h2>
                <div class="contentAll">
                    <div class="divPanier">
                        <h3>Votre panier :</h3>
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
                        <div class="codePromo">
                            <input type="text" name="prenom" id="prenom" require="" placeholder="Code promo ...">
                            <input class="btn" type="submit" value="Appliquer">
                        </div>
                        <!--<input href="livraison.php" class="buttonAction" type="submit" value="Valider">-->
                        <a href="livraison.php" class="buttonAction">Valider</a>
                    </div>
                    <div class="divRecapPanier">
                        <h3>Sommaire de commande :</h3>
                        <table class="myTableRecap">
                            <tr class="header">
                                <th style="width:60%;">Name</th>
                                <th style="width:40%;">Country</th>
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
                        <label>Livraison total : 5€99</label>
                        <h3>Total : 113€99</h3>
                    </div>
                </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>