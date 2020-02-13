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

                        </div>
                        <input type="button" value="Valider">
                    </div>
                </div>
            </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>