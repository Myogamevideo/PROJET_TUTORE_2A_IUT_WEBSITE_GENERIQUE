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
                                <?php
                                $req = $bdd->prepare('select * from membre where pseudo=?');
                                $req->execute(array($_SESSION['pseudo']));
                                $donne = $req->fetch();
                                $date = date("d/m/Y");
                                $date_inscription = date_create($donne['date_inscription']);
                                $date_inscription = date_format($date_inscription, 'd/m/Y');
                                ?>
                                <p>Nom : <label><?php echo $donne['nom']; ?></label></p>
                                <p>Prénom : <label><?php echo $donne['prenom']; ?></label></p>
                                <p>Pseudo : <label><?php echo $donne['pseudo']; ?></label></p>
                                <p>E-mail : <label><?php echo $donne['email']; ?></label></p>
                                <p>Numéro de téléphone : <label><?php echo $donne['telephone']; ?></label></p>
                                <span>
                                    <p>Vous voulez modifier vos données ? <a href="#">Cliquez ici !</a></p>
                                </span>
                            </div>
                            <div class="image">
                                <img src="public/image/web/placeholder.jpg" alt="">
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