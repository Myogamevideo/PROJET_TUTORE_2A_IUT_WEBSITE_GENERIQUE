<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-monCompteTableauDeBord.css">
<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxMonCompte">
                <div class="divMonCompte">
                    <div class="barreNavigation">
                       <?php include('barreNavidationCompte.php')  ?>
                    </div>
                    <div class="divTableauDeBord">
                        <h3>Tableau de bord : </h3>
                        <div class="tanleauDeBord">
                            <div>
                                <div class="top10Article">
                                    <label>Top 10 des articles les plus vendus</label>
                                    <ul class="borderAction listeProduitRupture">
                                        <li>
                                            <label class="nomProduit 1">Produit1</label>
                                            <a href="#">Plus de détail»</a>
                                        </li>
                                        <li>
                                            <label class="nomProduit 2">Produit1</label>
                                            <a href="#">Plus de détail»</a>
                                        </li>
                                        <li>
                                            <label class="nomProduit 3">Produit1</label>
                                            <a href="#">Plus de détail»</a>
                                        </li>
                                        <li>
                                            <label class="nomProduit 4">Produit1</label>
                                            <a href="#">Plus de détail»</a>
                                        </li>
                                    </ul>
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





