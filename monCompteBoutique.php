<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-monCompteBoutique.css">
<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxMonCompte">
                <div class="divMonCompte">
                    <div class="barreNavigation">
                       <?php include('barreNavidationCompte.php')  ?>
                    </div>
                    <div class="divGestion">
                        <h3>Gestion de la boutique : </h3>
                        <div class="ruptureStock">
                            <h4>Produit en ruptue de stock :</h4>
                            <div class="tabRupture">
                                <ul class="listeProduitRupture">
                                    <li>
                                        <label class="nomProduit">Produit1</label>
                                        <label class="detailProduit">Detail</label>
                                        <div>
                                            <label>Quantité a commander</label>
                                            <input type="number" id="quantite" name="quantite" min="0" max="1000" value="1">
                                        </div>
                                    </li>
                                    <li>
                                        <label class="nomProduit">Produit1</label>
                                        <label class="detailProduit">Detail</label>
                                        <div>
                                            <label>Quantité a commander</label>
                                            <input type="number" id="quantite" name="quantite" min="0" max="1000" value="1">
                                        </div>
                                    </li>
                                    <li>
                                        <label class="nomProduit">Produit1</label>
                                        <label class="detailProduit">Detail</label>
                                        <div>
                                            <label>Quantité a commander</label>
                                            <input type="number" id="quantite" name="quantite" min="0" max="1000" value="1">
                                        </div>
                                    </li>
                                    <li>
                                        <label class="nomProduit">Produit1</label>
                                        <label class="detailProduit">Detail</label>
                                        <div>
                                            <label>Quantité a commander</label>
                                            <input type="number" id="quantite" name="quantite" min="0" max="1000" value="1">
                                        </div>
                                    </li>
                                </ul>
                                <button type="button"><p>Commander</p></button>
                            </div>
                        </div>
                    
                    <div class="divAjoutProduit">
                        <h3>Ajouter un produit : </h3>
                            <div class="ajoutProduit">
                                <p>
                                    <label>Nom : </label>
                                    <input type="nomProduit" name="" require="">  
                                </p>
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