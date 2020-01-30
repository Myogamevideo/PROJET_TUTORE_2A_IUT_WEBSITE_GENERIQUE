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
                    <div class="divContainer">
                        <div>
                            <h4>Modifier le site :</h4>
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










