<?php include('../head.php') ?>
<link rel="stylesheet" href="../public/css/style-modifierSite.css">

<body>
    <?php include('../header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxMonCompte">
                <h2>Mon compte</h2>
                <?php
                $req = $bdd->query('SELECT * FROM parametres WHERE 1');
                $donnees = $req->fetch()
                ?>
                <div class="divMonCompte">
                    <div class="barreNavigation">
                        <?php include('../barreNavidationCompte.php')  ?>
                    </div>
                    <div class="divModifierSite">
                        <h3>Tableau de bord : </h3>
                        <div class="tanleauDeBord">
                            <div>
                                <div>
                                    <form method="POST" action="../admin/modifierSite.php">
                                        <h4>Modification générale :</h4>
                                        <div class="borderAction">
                                            <label>Le nom de l'entreprise :</label>
                                            <?php echo '<input id="modificationNomDuSite" name="modificationNomDuSite" type="text" value="' . $donnees['nomDuSite'] . '" />'; ?>
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
                                            <?php echo '<textarea id="modificationQuisommesnous" name="modificationQuisommesnous" placeholder="' . $donnees['quisommesnous'] . '"> </textarea>'; ?>
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
                                            <?php echo '<textarea id="modificationNotrevisionavenir" name="modificationNotrevisionavenir" placeholder="' . $donnees['notrevisionavenir'] . '" ></textarea>'; ?>
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
                                            <label>Nos projets déjà réalisés : ("Présenter quelques projets, ou réalisations de votre entreprise...")</label>
                                            <?php echo '<textarea id="modificationNosprojetsrealises" name="modificationNosprojetsrealises" placeholder="' . $donnees['nosprojetsrealises'] . '" ></textarea>'; ?>
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
                                            <label>Nous recrutons : ("Présenter votre position au niveau du recrutement...")</label>
                                            <?php echo '<textarea id="modificationNousrecrutons" name="modificationNousrecrutons" placeholder="' . $donnees['nousrecrutons'] . '" ></textarea>'; ?>
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
                                </div>
                            </div>
                            <div>
                                <h4>Modification de la page contact :</h4>
                                <div class="borderAction">
                                    <form method="POST" action="../admin/modifierSite.php">
                                        <div>
                                            <label>Le numéro de téléphone de votre entreprise :</label>
                                            <?php echo '<input id="modificationTelephone" name="modificationTelephone" type="number" value="' . $donnees['telephone'] . '" />'; ?>
                                        </div>
                                        <div>
                                            <label>L'e-mail de votre entreprise :</label>
                                            <?php echo '<input id="modificationEmail" name="modificationEmail" type="text" value="' . $donnees['email'] . '" />'; ?>
                                        </div>
                                        <div>
                                            <label>L'adresse de votre entreprise :</label>
                                            <?php echo '<input id="modificationAdresse" name="modificationAdresse" type="text" value="' . $donnees['adresse'] . '" />'; ?>
                                        </div>
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
                            </div>
                            <div>
                                <h4>Modification de présentation de l'entreprise :</h4>
                                <div class="borderAction">
                                    <form method="POST" action="../admin/modifierSite.php">
                                        <div>
                                            <label>Description de l'entreprise :</label>
                                            <?php echo '<textarea id="descriptionEntreprise" name="descriptionEntreprise" placeholder="' . $donnees['descriptionEntreprise'] . '" ></textarea>'; ?>
                                        </div>
                                        <div>
                                            <label>Nos objectifs :</label>
                                            <?php echo '<textarea id="objectifEntreprise" name="objectifEntreprise" placeholder="' . $donnees['objectifEntreprise'] . '" ></textarea>'; ?>
                                        </div>
                                        <div>
                                            <label>Notre histoire :</label>
                                            <?php echo '<textarea id="histoireEntreprise" name="histoireEntreprise" placeholder="' . $donnees['histoireEntreprise'] . '" ></textarea>'; ?>
                                        </div>
                                        <div>
                                            <label>Nos services :</label>
                                            <?php echo '<textarea id="serviceEntreprise" name="serviceEntreprise" placeholder="' . $donnees['serviceEntreprise'] . '" ></textarea>'; ?>
                                        </div>   
                                        <div>
                                            <label>Notre phylosophie :</label>
                                            <?php echo '<textarea id="phylosophieEntreprise" name="phylosophieEntreprise" placeholder="' . $donnees['phylosophieEntreprise'] . '" ></textarea>'; ?>
                                        </div>                                    
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
                            </div>
                            <div>
                                <h4>Modification des projet réalisés par l'entreprise :</h4>
                                <div class="borderAction">
                                    <form method="POST" action="../admin/modifierSite.php">
                                        <div>
                                            <label>Phrase d'accroche pour la rebrique nos projets réalisés :</label>
                                            <?php echo '<textarea id="notrevisionavenir" name="notrevisionavenir" placeholder="' . $donnees['notrevisionavenir'] . '" ></textarea>'; ?>
                                        </div>
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

if (isset($_POST['modificationQuisommesnous'])) {
    if ($_POST['modificationQuisommesnous'] == "") {
        $_POST['modificationQuisommesnous'] = NULL;
    }
    $req = $bdd->prepare('UPDATE parametres SET quisommesnous=? where 1');
    $req->execute(array($_POST['modificationQuisommesnous']));
}

if (isset($_POST['modificationNotrevisionavenir'])) {
    if ($_POST['modificationNotrevisionavenir'] == "") {
        $_POST['modificationNotrevisionavenir'] = NULL;
    }
    $req = $bdd->prepare('UPDATE parametres SET notrevisionavenir=? where 1');
    $req->execute(array($_POST['modificationNotrevisionavenir']));
}
if (isset($_POST['modificationNosprojetsrealises'])) {
    if ($_POST['modificationNosprojetsrealises'] == "") {
        $_POST['modificationNosprojetsrealises'] = NULL;
    }
    $req = $bdd->prepare('UPDATE parametres SET nosprojetsrealises=? where 1');
    $req->execute(array($_POST['modificationNosprojetsrealises']));
}

if (isset($_POST['modificationNousrecrutons'])) {
    if ($_POST['modificationNousrecrutons'] == "") {
        $_POST['modificationNousrecrutons'] = NULL;
    }
    $req = $bdd->prepare('UPDATE parametres SET nousrecrutons=? where 1');
    $req->execute(array($_POST['modificationNousrecrutons']));
}

if (isset($_POST['modificationTelephone'])) {
    if ($_POST['modificationTelephone'] == "") {
        $_POST['modificationTelephone'] = NULL;
    }
    $req = $bdd->prepare('UPDATE parametres SET telephone=? where 1');
    $req->execute(array($_POST['modificationTelephone']));
}
if (isset($_POST['modificationEmail'])) {
    if ($_POST['modificationEmail'] == "") {
        $_POST['modificationEmail'] = NULL;
    }
    $req = $bdd->prepare('UPDATE parametres SET email=? where 1');
    $req->execute(array($_POST['modificationEmail']));
}
if (isset($_POST['modificationAdresse'])) {
    if ($_POST['modificationAdresse'] == "") {
        $_POST['modificationAdresse'] = NULL;
    }
    $req = $bdd->prepare('UPDATE parametres SET adresse=? where 1');
    $req->execute(array($_POST['modificationAdresse']));
}



if (isset($_POST['descriptionEntreprise'])) {
    if ($_POST['descriptionEntreprise'] == "") {
        $_POST['descriptionEntreprise'] = NULL;
    }
    $req = $bdd->prepare('UPDATE parametres SET descriptionEntreprise=? where 1');
    $req->execute(array($_POST['descriptionEntreprise']));
}
if (isset($_POST['objectifEntreprise'])) {
    if ($_POST['objectifEntreprise'] == "") {
        $_POST['objectifEntreprise'] = NULL;
    }
    $req = $bdd->prepare('UPDATE parametres SET objectifEntreprise=? where 1');
    $req->execute(array($_POST['objectifEntreprise']));
}
if (isset($_POST['histoireEntreprise'])) {
    if ($_POST['histoireEntreprise'] == "") {
        $_POST['histoireEntreprise'] = NULL;
    }
    $req = $bdd->prepare('UPDATE parametres SET histoireEntreprise=? where 1');
    $req->execute(array($_POST['histoireEntreprise']));
}
if (isset($_POST['serviceEntreprise'])) {
    if ($_POST['serviceEntreprise'] == "") {
        $_POST['serviceEntreprise'] = NULL;
    }
    $req = $bdd->prepare('UPDATE parametres SET serviceEntreprise=? where 1');
    $req->execute(array($_POST['serviceEntreprise']));
}
if (isset($_POST['phylosophieEntreprise'])) {
    if ($_POST['phylosophieEntreprise'] == "") {
        $_POST['phylosophieEntreprise'] = NULL;
    }
    $req = $bdd->prepare('UPDATE parametres SET phylosophieEntreprise=? where 1');
    $req->execute(array($_POST['phylosophieEntreprise']));
}
if (isset($_POST['notrevisionavenir'])) {
    if ($_POST['notrevisionavenir'] == "") {
        $_POST['notrevisionavenir'] = NULL;
    }
    $req = $bdd->prepare('UPDATE parametres SET notrevisionavenir=? where 1');
    $req->execute(array($_POST['notrevisionavenir']));
}
?>