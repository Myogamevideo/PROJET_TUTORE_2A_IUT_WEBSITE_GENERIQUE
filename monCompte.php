<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-monCompte.css">
<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxMonCompte">
                <h2>Mon compte</h2>
                <div class="divMonCompte">
                    <div class="barreNavigation">
                       <?php include('barreNavidationCompte.php')  ?>
                    </div>
                    <div class="divInfoMembres">
                        <h3>Mes informations : </h3>
                        <div class="infoMembre">
                            <div class="info">
                                <p>Nom : <label>Dragnir</label></p>
                                <p>Prénom : <label>Natsu</label></p>
                                <p>Pseudo : <label>laSalamandre</label></p>
                                <p>E-mail : <label>natsu.dragnir@outlook.fr</label></p>
                                <p>Numéro de téléphone : <label>non renseigné</label></p>
                                <span><p>Vous voulez modifier vos données ? <a href="#">Cliquez ici !</a></p></span>
                            </div>
                            <div class="image">
                                <img src="public/image/placeholder.jpg" alt="">
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