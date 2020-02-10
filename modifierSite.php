<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-modifierSite.css">

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
                    <div class="divModifierSite">
                        <h3>Tableau de bord : </h3>
                        <div class="tanleauDeBord">
                            <?php
                            $req = $bdd->query('SELECT nomDuSite FROM parametres WHERE 1');
                            $donnees = $req->fetch()
                            ?>
                            <div>
                                <div>
                                    <form method="POST" action="modifierSite.php">
                                        <h4>Modification générale :</h4>
                                        <div class="borderAction">
                                            <label>Le nom de l'entreprise :</label>
                                            <?php echo '<input id="modificationNomDuSite" name="modificationNomDuSite" type="text" placeholder="' . $donnees['nomDuSite'] . '" />'; ?>
                                            <div class=button>
                                                <input class="buttonAction" type="submit" value="Valider">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                </input>
                                            </div>
                                    </form>
                                </div>
                                <div>
                                    <form method="post" enctype="multipart/form-data">
                                        <input type="file" name="photo">
                                        <input type="submit">
                                    </form>
                                    <?php
                                    if (isset($_FILES['photo']['tmp_name'])) {
                                        $retour = copy($_FILES['photo']['tmp_name'], 'public/image/web/'.$_FILES['photo']['name']);
                                        if ($retour) {
                                            echo '<p>La photo a bien été envoyée.</p>';
                                            echo '<img src="' . $_FILES['photo']['name'] . '">';
                                        }
                                    }
                                    ?>
                                </div>
                                <div>
                                    <h4>Modification de l'espace vente</h4>
                                    <div class="borderAction">
                                        <label>Le nom de l'espace vente :</label>
                                        <input id="espaceVente" type="text" name="espaceVente">
                                    </div>
                                    <div class=button>
                                        <button class="buttonAction">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            Valider
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <h4>Modification du portefolio</h4>
                                    <div class="borderAction">
                                        <div>
                                            <label>Qui sommes nous ?</label>
                                            <textarea placeholder="Présenter votre entreprise..."></textarea>
                                        </div>
                                        <div>
                                            <label>Notre vision d'avenir :</label>
                                            <textarea placeholder="Présenter les objectif de votre entreprise..."></textarea>
                                        </div>
                                        <div>
                                            <label>Nos projets déjà rélisés :</label>
                                            <textarea placeholder="Présenter quelques projets, ou réalisations de votre entreprise..."></textarea>
                                        </div>
                                        <div>
                                            <label>Nous recrutons :</label>
                                            <textarea placeholder="Présenter votre position au niveau du recrutement..."></textarea>
                                        </div>
                                    </div>
                                    <div class=button>
                                        <button class="buttonAction">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            Valider
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <h4>Modification de la page contact :</h4>
                                    <div class="borderAction">
                                        <div>
                                            <label>Le numéro de téléphone de votre entreprise :</label>
                                            <input id="modificationTelephone" type="text" name="modificationTelephone" require="">
                                        </div>
                                        <div>
                                            <label>L'e-mail de votre entreprise :</label>
                                            <input id="modificationEmail" type="text" name="modificationEmail" require="">
                                        </div>
                                        <div>
                                            <label>L'adresse de votre entreprise :</label>
                                            <input id="modificationAdresse" type="text" name="modificationAdresse" require="">
                                        </div>
                                    </div>
                                    <div class=button>
                                        <button class="buttonAction">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            Valider
                                        </button>
                                    </div>
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

<?php
if (isset($_POST['modificationNomDuSite']) && $_POST['modificationNomDuSite'] != NULL) {
    $req = $bdd->prepare('UPDATE parametres SET nomDuSite=? where 1');
    $req->execute(array($_POST['modificationNomDuSite']));
}
?>