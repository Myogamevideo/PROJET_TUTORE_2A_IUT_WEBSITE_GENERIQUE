<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-monCompteBoutique.css">
<body>
    <?php include('header-image.php') ?>
    <main>
        <script type="text/javascript" src="public/js/MonCompte.js"></script>
        <div class="container">
            <div class="boxMonCompte">
                <h2>Mon compte</h2>
                <div class="divMonCompte">
                    <div class="barreNavigation">
                       <?php include('barreNavidationCompte.php')  ?>
                    </div>
                    <div class="divGestion">
                        <h3>Gestion de la boutique : </h3>
                        <div class="divContainerAction">
                            <h4>Produit en ruptue de stock :</h4>
                            <div class="divAction">
                                <ul class="borderAction listeProduitRupture">
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
                        <div class="divContainerAction">
                            <h4>Ajouter un produit : </h4>
                            <div class="divAction">
                                <div class="ajoutProduit borderAction">
                                    <div class="divInput">
                                        <label>Nom : </label>
                                        <input type="nomProduit" placeholder="Le nom de votre produit..." name="" require="">  
                                    </div>
                                    <div class="divInput">
                                        <label>Type de produit (Cd, t-shirt ...) : </label>
                                        <input type="typeProduit" placeholder="Le type de votre produit..." name="" require="">  
                                    </div>
                                    <div class="divInput">
                                        <label>Description : </label>
                                        <textarea placeholder="La description de votre produit..."></textarea>
                                    </div>
                                    <div class="divInput">
                                        <label>Prix : </label>
                                        <input type="prixProduit" placeholder="Le prix de votre produit..." name="" require="">  
                                    </div>
                                    <div class="divInput">
                                        <label>Taille disponible :</label>
                                        <div class="inputTaille">
                                            <input type="submit" name="" value="XS">
                                            <input type="submit" name="" value="S">
                                            <input type="submit" name="" value="M">
                                            <input type="submit" name="" value="L">
                                            <input type="submit" name="" value="XL">
                                            <input type="submit" name="" value="XXL">
                                        </div>
                                    </div>
                                    <div class="divInput">
                                        <label>Nombre d'article : </label>
                                        <input type="number" id="nbArticle" name="nbArticle" min="0" max="100" value="1">
                                    </div>
                                    <div class="divInput">
                                        <label>Image :</label>
                                        <input type="text" name="" require="">
                                        <button class="button" type="button">Parcourir</button>
                                    </div>
                                </div>
                                <button type="button"><p>Ajouter</p></button>
                            </div>
                        </div>
                        <div class="divContainerAction">
                            <h4>Supprimer un produit : </h4>
                            <div class="divAction">
                                <div class="borderAction">
                                    <div class="divInput">
                                        <label>Nom : </label>
                                        <input type="nomProduiSupt" placeholder="Le nom de votre produit..." name="" require="">  
                                    </div>
                                    <div class="divAction divInput">
                                        <label>Fiche d'identité du produit : </label>
                                        <div class="divAction divInput ficheIdentite">
                                            <p>Nom : <label>Tshirt</label></p>
                                            <p>Prix : <label>15€99</label></p>                                       
                                            <p>Description :
                                                <label>Partagez votre code personnel (à retrouver sur votre appli BlaBlaLines) à vos proches, 
                                                vos amis, votre famille, vos collègues… et recevez 10€ dès qu’ils auront fait leur 
                                                premier covoiturage BlaBlaLines.</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <button type="button"><p>Supprimer</p></button>
                            </div>
                        </div>
                        <div class="divContainerAction">
                            <h4>Modifier un produit : </h4>
                            <div class="divAction">
                                <div class="borderAction">
                                    <label>Nom : </label>
                                    <input type="nomProduiSupt" placeholder="Le nom de votre produit..." name="" require=""> 
                                    <button class="buttonIcon"><i class="fa fa-search"></i></button> 
                                    <div class="divAction divInput">
                                        <label>Fiche d'identité du produit : </label>
                                        <div class="divAction divInput ficheIdentite">
                                            <p>Nom : <label>Tshirt</label></p>
                                            <p>Prix : <label>15€99</label></p>                                       
                                            <p>Description :
                                                <label>Partagez votre code personnel (à retrouver sur votre appli BlaBlaLines) à vos proches, 
                                                vos amis, votre famille, vos collègues… et recevez 10€ dès qu’ils auront fait leur 
                                                premier covoiturage BlaBlaLines.</label>
                                            </p>
                                        </div>
                                        <label>Modifier : </label>
                                        <div class="divAction divInput modif">
                                            <div class="divInput">
                                                <label>Nom : </label>
                                                <input type="nomProduit" placeholder="Le nom de votre produit..." name="" require="">  
                                            </div>
                                            <div class="divInput">
                                                <label>Description : </label>
                                                <textarea placeholder="La description de votre produit..."></textarea>
                                            </div>
                                            <div class="divInput">
                                                <label>Prix : </label>
                                                <input type="prixProduit" placeholder="Le prix de votre produit..." name="" require="">  
                                            </div>
                                            <div class="divInput">
                                                <label>Taille disponible :</label>
                                                <div  class="inputTaille">
                                                    <input type="submit" name="" value="XS">
                                                    <input type="submit" name="" value="S">
                                                    <input type="submit" name="" value="M">
                                                    <input type="submit" name="" value="L">
                                                    <input type="submit" name="" value="XL">
                                                    <input type="submit" name="" value="XXL">
                                                </div>
                                            </div>
                                            <div class="divInput">
                                                <label>Nombre d'article : </label>
                                                <input type="number" id="nbArticle" name="nbArticle" min="0" max="100" value="1">
                                            </div>
                                            <div class="divInput">
                                                <label>Image :</label>
                                                <input type="text" name="" require="">
                                                <button class="button" type="button">Parcourir</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button"><p>Modifier</p></button>
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