<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-connexion.css">

<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxConnexion">
                <h2>Mot de passe oublié : </h2>
                <form method="POST" action="../mdpOublie.php">
                    <div class="inputBox" class="alignementLogo" class="divConnexion">
                        <div>
                            <i class="fa fa-at fa-2x" style="color:white;"></i>
                            <label>E-mail</label>
                        </div>
                        <input type="email" name="email" id="email" require="">
                    </div>
                    <div class="inputBox" class="alignementLogo" class="divConnexion">
                        <div>
                            <i class="fa fa-at fa-2x" style="color:white;"></i>
                            <label>Mot de passe :</label>
                        </div>
                        <input type="password" name="password" id="password" require="">
                    </div>
                    <div class="inputBox" class="alignementLogo" class="divConnexion">
                        <div>
                            <i class="fa fa-at fa-2x" style="color:white;"></i>
                            <label>Confirmer votre mot de passe :</label>
                        </div>
                        <input type="password" name="confirmPassword" id="confirmPassword" require="">
                    </div>
                    <input type="submit" value="Submit">
                </form>
                <div class="alert alert-danger">
                    <?php
                    if (isset($_POST['email']) && $_POST['email'] != NULL && isset($_POST['password']) && isset($_POST['confirmPassword']) && $_POST['password'] != NULL && $_POST['confirmPassword'] != NULL) {
                        $req = $bdd->prepare('select count(*) as nbr from membre where email=?');
                        $req->execute(array($_POST['email']));
                        $donnee = $req->fetch(PDO::FETCH_ASSOC);
                        if ($donnee['nbr'] != 0) {
                            if ($_POST['confirmPassword'] != $_POST['password']) {
                                echo '<strong>Information : </strong> Mot de passe différent par rapport à la confimration';
                            } 
                            else {
                                $pass_hach = password_hash($_POST['password'], PASSWORD_DEFAULT);
                                $req = $bdd->prepare('UPDATE `membre` SET `pass`=:pass WHERE `email`= $_POST['email']');
                                $req->execute(array(
                                    'pass' => $pass_hach,
                                ));
                                echo '<div class="alert alert-success"><strong>Information : </strong> Vous avez réinitialisé votre mdp avec succès !</div>';
                            }
                        }
                        else {
                            echo '<strong>Information : </strong> Adresse mail introuvable';
                        }
                    } else {
                        echo '<strong>Information : </strong> Un ou plusieurs champs sont vides';
                    } ?>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>
</html>