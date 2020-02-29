<?php include('../head.php') ?>
<link rel="stylesheet" href="../public/css/style-modifierSite.css">

<body>
    <?php include('../header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxMonCompte">
                <h2>Mon compte</h2>
                <div class="divMonCompte">
                    <div class="barreNavigation">
                        <?php include('../barreNavidationCompte.php')  ?>
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
                                    <form method="POST" action="../admin/modifierSite.php">
                                        <h4>Modification générale :</h4>
                                        <div class="borderAction">
                                            <label>Le nom de l'entreprise :</label>
                                            <?php echo '<input id="modificationNomDuSite" name="modificationNomDuSite" type="text" placeholder="' . $donnees['nomDuSite'] . '" />'; ?>
                                            <div class=button>
                                                <button class="buttonAction" type="submit" value="Valider">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    Valider
                                                </button>
                                            </div>
                                    </form>
                                </div>
                                <div>
                                    <h4>Modification de l'image principal :</h4>
                                    <form method="post" enctype="multipart/form-data">
                                        <input type="file" name="photo" accept="image/*">
                                        <input type="submit">
                                    </form>
                                    <?php
                                    if (isset($_FILES['photo']['tmp_name'])) {
                                        $retour = copy($_FILES['photo']['tmp_name'], '../public/image/web/background.jpg');
                                        if ($retour) {
                                            echo '<p>La photo a bien été envoyée.</p>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div>
                                    <h4>Modification de la video principal :</h4>
                                    <form method="post" enctype="multipart/form-data">
                                        <input type="file" name="video" accept="video/*">
                                        <input type="submit">
                                    </form>
                                    <?php
                                    if (isset($_FILES['video']['tmp_name'])) {
                                        $retour = copy($_FILES['video']['tmp_name'], '../public/video/background.mp4');
                                        if ($retour) {
                                            echo '<p>La video a bien été envoyée.</p>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div>
                                <form method="POST" action="../admin/modifierSite.php">
                                    <h4>"Boutique.php" :</h4>
                                    <select name="boutique">
                                        <option value="Boutique">Boutique</option>
                                        <option value="Formation">Formation</option>
                                        <option value="Shop">Shop</option>
                                        <option value="">Ne pas afficher</option>
                                    </select>
                                    <input class="buttonAction" type="submit" value="Valider">
                                </form>
                                <h4>"Blog.php" :</h4>
                                <form method="POST" action="../admin/modifierSite.php">
                                    <select name="blog">
                                        <option value="Blog">Blog</option>
                                        <option value="News">News</option>
                                        <option value="Formation">Nouvelle</option>
                                        <option value="">Ne pas afficher</option>
                                    </select>
                                    <input class="buttonAction" type="submit" value="Valider">
                                </form>
                                <form method="POST" action="../admin/modifierSite.php">
                                    <select name="forum">
                                        <option value="Forum">Forum</option>
                                        <option value="">Ne pas afficher</option>
                                    </select>
                                    <input class="buttonAction" type="submit" value="Valider">
                                </form>
                                <form method="POST" action="../admin/modifierSite.php">
                                    <select name="portofolio">
                                        <option value="Portofolio">Portofolio</option>
                                        <option value="">Ne pas afficher</option>
                                    </select>
                                    <input class="buttonAction" type="submit" value="Valider">
                                </form>
                                <form method="POST" action="../admin/modifierSite.php">
                                    <select name="contact">
                                        <option value="Contact">Contact</option>
                                        <option value="">Ne pas afficher</option>
                                    </select>
                                    <input class="buttonAction" type="submit" value="Valider">
                                </form>
                            </div>
                            <div>
                                <h4>Modification du portefolio</h4>
                                <div class="borderAction">
                                    <div>
                                        <form method="POST" action="../admin/modifierSite.php">
                                            <label>Qui sommes nous ? ("Présenter votre entreprise...")</label>
                                            <?php echo '<input id="modificationQuisommesnous" name="modificationQuisommesnous" type="textarea" placeholder="' . $donnees['quisommesnous'] . '" />'; ?>
                                            <div class=button>
                                                <button class="buttonAction" type="submit" value="Valider">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    Valider
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div>
                                        <form method="POST" action="../admin/modifierSite.php">
                                            <label>Notre vision d'avenir : ("Présenter les objectif de votre entreprise...")</label>
                                            <?php echo '<input id="modificationNotrevisionavenir" name="modificationNotrevisionavenir" type="textarea" placeholder="' . $donnees['notrevisionavenir'] . '" />'; ?>
                                            <div class=button>
                                                <button class="buttonAction" type="submit" value="Valider">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    Valider
                                                </button>
                                            </div>
                                        </form>
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
    <?php include('../footer.php') ?>
</body>

</html>

<?php
if (isset($_POST['modificationNomDuSite']) && $_POST['modificationNomDuSite'] != NULL) {
    $req = $bdd->prepare('UPDATE parametres SET nomDuSite=? where 1');
    $req->execute(array($_POST['modificationNomDuSite']));
}

if (isset($_POST['boutique'])) {

    $req = $bdd->prepare('UPDATE parametres SET nomBoutique=? where 1');
    $req->execute(array($_POST['boutique']));
}

if (isset($_POST['blog'])) {
    $req = $bdd->prepare('UPDATE parametres SET nomBlog=? where 1');
    $req->execute(array($_POST['blog']));
}
if (isset($_POST['forum'])) {

    $req = $bdd->prepare('UPDATE parametres SET nomForum=? where 1');
    $req->execute(array($_POST['forum']));
}
if (isset($_POST['portofolio'])) {
    $req = $bdd->prepare('UPDATE parametres SET nomPortofolio=? where 1');
    $req->execute(array($_POST['portofolio']));
}
if (isset($_POST['contact'])) {
    $req = $bdd->prepare('UPDATE parametres SET nomContact=? where 1');
    $req->execute(array($_POST['contact']));
}

if (isset($_POST['modificationQuisommesnous']) && $_POST['modificationQuisommesnous'] != NULL) {
    $req = $bdd->prepare('UPDATE parametres SET quisommesnous=? where 1');
    $req->execute(array($_POST['modificationQuisommesnous']));
}

if (isset($_POST['modificationNotrevisionavenir']) && $_POST['modificationNotrevisionavenir'] != NULL) {
    $req = $bdd->prepare('UPDATE parametres SET notrevisionavenir=? where 1');
    $req->execute(array($_POST['modificationNotrevisionavenir']));
}
?>