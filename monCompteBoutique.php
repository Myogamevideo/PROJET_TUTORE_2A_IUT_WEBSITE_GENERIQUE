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
                                <div>
                                    <label>Nom : </label>
                                    <input type="nomProduit" placeholder="Le nom de votre produit..." name="" require="">  
                                </div>
                                <div>
                                    <label>Description : </label>
                                    <textarea placeholder="La description de votre produit..."></textarea>
                                </div>
                                <div>
                                    <label>Prix : </label>
                                    <input type="prixProduit" placeholder="Le prix de votre produit..." name="" require="">  
                                </div>
                                <div>
                                    <label>Taille disponible :</label>
                                    <div>
                                        <input type="submit" name="" value="XS">
                                        <input type="submit" name="" value="S">
                                        <input type="submit" name="" value="M">
                                        <input type="submit" name="" value="L">
                                        <input type="submit" name="" value="XL">
                                        <input type="submit" name="" value="XXL">
                                    </div>
                                </div>
                                <div>
                                    <label>Nombre d'article : </label>
                                    <input type="number" id="nbArticle" name="nbArticle" min="0" max="100" value="1">
                                </div>
                                <div>
                                    <label>Image :</label>
                                    <input type="text" name="" require="">
                                    <input type="submit" name="" value="Parcourir">
                                </div>
                            </div>
                            <div>
                                <h3>Supprimer un produit : </h3>
                                <div>
                                    <label>Nom : </label>
                                    <input type="nomProduiSupt" placeholder="Le nom de votre produit..." name="" require="">  
                                </div>
                                <div>
                                    <label>Fiche d'identité du produit : </label>
                                    <div>
                                        <label>Produit</label>
                                        <label>15€99</label>
                                        <p>Partagez votre code personnel (à retrouver sur votre appli BlaBlaLines) à vos proches, 
                                            vos amis, votre famille, vos collègues… et recevez 10€ dès qu’ils auront fait leur 
                                            premier covoiturage BlaBlaLines.</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3>Modifier un produit : </h3>
                                <div>
                                    <label>Nom : </label>
                                    <input type="nomProduiSupt" placeholder="Le nom de votre produit..." name="" require="">  
                                </div>
                                <div>
                                    <label>Fiche d'identité du produit : </label>
                                    <div>
                                        <label>Produit</label>
                                        <label>15€99</label>
                                        <p>Partagez votre code personnel (à retrouver sur votre appli BlaBlaLines) à vos proches, 
                                            vos amis, votre famille, vos collègues… et recevez 10€ dès qu’ils auront fait leur 
                                            premier covoiturage BlaBlaLines.</p>
                                    </div>
                                </div>
                                <div clas="divModif">
                                <div>
                                    <label>Nom : </label>
                                    <input type="nomProduit" placeholder="Le nom de votre produit..." name="" require="">  
                                </div>
                                <div>
                                    <label>Description : </label>
                                    <textarea placeholder="La description de votre produit..."></textarea>
                                </div>
                                <div>
                                    <label>Prix : </label>
                                    <input type="prixProduit" placeholder="Le prix de votre produit..." name="" require="">  
                                </div>
                                <div>
                                    <label>Taille disponible :</label>
                                    <div>
                                        <input type="submit" name="" value="XS">
                                        <input type="submit" name="" value="S">
                                        <input type="submit" name="" value="M">
                                        <input type="submit" name="" value="L">
                                        <input type="submit" name="" value="XL">
                                        <input type="submit" name="" value="XXL">
                                    </div>
                                </div>
                                <div>
                                    <label>Nombre d'article : </label>
                                    <input type="number" id="nbArticle" name="nbArticle" min="0" max="100" value="1">
                                </div>
                                <div>
                                    <label>Image :</label>
                                    <input type="text" name="" require="">
                                    <input type="submit" name="" value="Parcourir">
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