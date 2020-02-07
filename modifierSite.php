<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-modifierSite.css">
<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxMonCompte">
                <div class="divMonCompte">
                    <div class="barreNavigation">
                       <?php include('barreNavidationCompte.php')  ?>
                    </div>
                    <div class="divModifierSite">
                        <h3>Tableau de bord : </h3>
                        <div class="tanleauDeBord">
                            <div>
                                <label>Le nom de l'espace vente :</label>
                                <input id="espaceVente" type="text" name="espaceVente" require="">
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










