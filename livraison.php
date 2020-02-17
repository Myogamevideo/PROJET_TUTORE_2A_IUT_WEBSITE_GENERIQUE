<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-livraison.css">
<link rel="stylesheet" href="public/css/style-barreCommande.css">

<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div>
                <h2>Commander :</h2>
                <div class="contentAll">
                    <div class="divLivraison">
                        <div class="barreCommande">
                            <?php include('barreCommande.php')  ?>
                        </div>
                        <div class="livraison">
                            <h3>Lieu de livraison :</h3>
                            <?php if(!isset($_SESSION['pseudo']) or !isset($_SESSION['id']) or !isset($_SESSION['statu'])) { ?>
                                <h1>Veuillez vous inscire ou vous connectez pour acheter dans la boutique</h1>
                                <div class="boxConnexion">
                                    <h2>Connexion : </h2>
                                    <form method="POST" action="connexion.php">
                                        <div class="inputBox" class="alignementLogo" class="divConnexion">
                                            <i class="fa fa-user-circle fa-2x" style="color:white;"></i>
                                            <label>Username</label>
                                            <input id="pseudo" type="text" name="pseudo" require="">
                                        </div>
                                        <div class="inputBox" class="alignementLogo" class="divConnexion">
                                            <i class="fa fa-lock fa-2x" style="color:white;"></i>
                                            <label>Password</label>
                                            <input type="password" name="mdp" require="" id="mdp">
                                        </div>
                                        <div>
                                            <label class="containerInput">
                                                <input type="checkbox">
                                                <span class="check">Connexion automatique</span>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <input type="submit" value="Submit">
                                    </form>
                                    <div class="alert alert-danger">
                                        <?php
                                        if (isset($_COOKIE['pseudo']) && isset($_COOKIE['mdp']) && isset($_COOKIE['statu'])) {
                                            $req = $bdd->prepare('select pass from membre where pseudo=?');
                                            $req->execute(array($_COOKIE['pseudo']));
                                            $donne = $req->fetch();
                                            if ($_COOKIE['mdp'] == $donne['pass']) {
                                                $req = $bdd->prepare('select id,statu from membre where pseudo=?');
                                                $req->execute(array($_COOKIE['pseudo']));
                                                $donne = $req->fetch();
                                                $_SESSION['id'] = $donne['id'];
                                                $_SESSION['pseudo'] = $_COOKIE['pseudo'];
                                                $_SESSION['statu'] = $donne['statu'];
                                                header('location: index.php');
                                            }
                                        }

                                        if (isset($_POST['pseudo']) && isset($_POST['mdp']) && $_POST['pseudo'] != NULL and $_POST['mdp'] != NULL) {
                                            $req = $bdd->prepare('select count(*) as nbr from membre where pseudo=?');
                                            $req->execute(array($_POST['pseudo']));
                                            $donne = $req->fetch(PDO::FETCH_ASSOC);
                                            if ($donne['nbr'] != 0) {
                                                $req = $bdd->prepare('select pass from membre where pseudo=?');
                                                $req->execute(array($_POST['pseudo']));
                                                $donne = $req->fetch();
                                                $verify = password_verify($_POST['mdp'], $donne['pass']);
                                                if ($verify == true) {
                                                    $req = $bdd->prepare('select id,statu from membre where pseudo=?');
                                                    $req->execute(array($_POST['pseudo']));
                                                    $donne = $req->fetch();
                                                    $_SESSION['id'] = $donne['id'];
                                                    $_SESSION['pseudo'] = $_POST['pseudo'];
                                                    $_SESSION['statu'] = $donne['statu'];
                                                    echo 'Connectée';
                                                    if ($_POST['case'] == 'on') {
                                                        setcookie('pseudo', $_POST['pseudo'], time() + 3600, null, null, false, true);
                                                        $req = $bdd->prepare('select pass,statu from membre where pseudo=?');
                                                        $req->execute(array($_POST['pseudo']));
                                                        $donne = $req->fetch();
                                                        setcookie('mdp', $donne['pass'], time() + 3600, null, null, false, true);
                                                        setcookie('statu', $donne['statu'], time() + 3600, null, null, false, true);
                                                        header('location: index.php');
                                                    } else {
                                                        header('location: index.php');
                                                    }
                                                } else {
                                                    echo '<strong>Information : </strong> Mauvais identifiant ou mot de passe';
                                                }
                                            } else {
                                                echo '<strong>Information : </strong> Mauvais identifiant ou mot de passe';
                                            }
                                        } else {
                                            echo '<strong>Information : </strong> Un ou plusieurs champs sont vide';
                                        } ?>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="mesAdresse">
                                <div class="adressePrincipale divAdresse">
                                    <h5>Mon adresse principale :</h5>
                                    <p>Nom : <label>Dragnir</label></p>
                                    <p>Prénom : <label>Natsu</label></p>
                                    <p>Code postal : <label>63000</label></p>
                                    <p>Complément d'adresse : <label>15 rue Roche Génès</label></p>
                                </div>
                                <div class="adresseSecondaire divAdresse">
                                    <h5>Adresse secondaire 1 :</h5>
                                    <p>Nom : <label>Heartfilia</label></p>
                                    <p>Prénom : <label>Lucy</label></p>
                                    <p>Code postal : <label>63000</label></p>
                                    <p>Complément d'adresse : <label>15 rue Roche Génès</label></p>
                                </div>
                                <div class="adresseSecondaire divAdresse">
                                    <h5>Adresse secondaire 1 :</h5>
                                    <p>Nom : <label>Heartfilia</label></p>
                                    <p>Prénom : <label>Lucy</label></p>
                                    <p>Code postal : <label>63000</label></p>
                                    <p>Complément d'adresse : <label>15 rue Roche Génès</label></p>
                                </div>
                            </div>
                            <div class="divButton">
                                <button class="button" type="button">
                                    <i class="fa fa-plus-circle fa-2x" style="color:orange;"></i>
                                    Ajouter une adresse
                                </button>
                                <button class="button" type="button">
                                    <i class="fa fa-pencil fa-2x" style="color:#99ff99;"></i>
                                    Modifier une adresse
                                </button>
                            </div>
                        </div>
                        <div>
                            <div>
                                <h3>Détail de la livraison :</h3>
                                <div>
                                    <p>Livraison dans les 5 jours ouvrables pour un montant de 5,99€</p>
                                </div>
                            </div>
                            <div class="centrebtn">
                                <a href="paiement.php">Valider</a>
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