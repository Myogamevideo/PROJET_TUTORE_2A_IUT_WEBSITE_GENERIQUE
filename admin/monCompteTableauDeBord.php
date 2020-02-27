<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-monCompteTableauDeBord.css">
<body>
    <?php include('header-image.php') ?>
    <main>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="public/js/diagrammeMonCompte.js"></script>
        <label class="container">
            <label class="boxMonCompte">
                <h2>Mon compte</h2>
                <label class="divMonCompte">
                    <div class="barreNavigation">
                       <?php include('barreNavidationCompte.php')  ?>
                    </div>
                    <label class="divTableauDeBord">
                        <h3>Tableau de bord : </h3>
                        <div class="tableauDeBord">
                            <div class="partieGauche">
                                <div class="top10Article">
                                    <label>Top 10 des articles les plus vendus</label>
                                    <ul class="listeTop10Article">
                                        <li>
                                            <label class="nomProduit">Produit1</label>
                                            <a href="#">Plus de détail»</a>
                                        </li>
                                        <li>
                                            <label class="nomProduit">Produit2</label>
                                            <a href="#">Plus de détail»</a>
                                        </li>
                                        <li>
                                            <label class="nomProduit">Produit3</label>
                                            <a href="#">Plus de détail»</a>
                                        </li>
                                        <li>
                                            <label class="nomProduit">Produit4</label>
                                            <a href="#">Plus de détail»</a>
                                        </li>
                                        <li>
                                            <label class="nomProduit">Produit5</label>
                                            <a href="#">Plus de détail»</a>
                                        </li>
                                        <li>
                                            <label class="nomProduit">Produit7</label>
                                            <a href="#">Plus de détail»</a>
                                        </li>
                                        <li>
                                            <label class="nomProduit">Produit7</label>
                                            <a href="#">Plus de détail»</a>
                                        </li>
                                        <li>
                                            <label class="nomProduit">Produit8</label>
                                            <a href="#">Plus de détail»</a>
                                        </li>
                                        <li>
                                            <label class="nomProduit">Produit9</label>
                                            <a href="#">Plus de détail»</a>
                                        </li>
                                        <li>
                                            <label class="nomProduit">Produit10</label>
                                            <a href="#">Plus de détail»</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="partieDroite">
                                <div class="categorieArticlePlusVendu diagramme">
                                    <label>Catégorie d'article les plus vendu : </label>
                                    <div class="diagramme">
                                        <div id="donutchart" style=" height: 100%;"></div>
                                    </div>
                                </div>
                                <div class="diagramme">
                                    <label>Répartition des ventes en Europe : </label>
                                    <div class="diagramme">
                                        <div id="geochart-colors" style="width: 100%; height: 250px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="diagramme">
                            <label>Performance de la compagnie : </label>
                            <div class="performanceDeLaCompagnie diagramme">
                                <div class="diagramme">
                                    <div id="columnchart_material" style="width:100%; height: 400px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="diagramme">
                            <label>Fréquence de visite du site : </label>
                            <div class="diagramme">
                                <div id="Aeraschart_div" style="width: 100%; height: 450px;"></div>
                            </div>
                        </div>
                    </label>
                </label>
            </label>
        </label>
    </main>
    <?php include('footer.php') ?>
</body>
</html>





