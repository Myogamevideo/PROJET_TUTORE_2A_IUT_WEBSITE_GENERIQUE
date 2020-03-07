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
                    <input type="submit" value="Submit">
                </form>
                <div class="alert alert-danger">
                    <?php
                    if (isset($_POST['email']) && $_POST['email'] != NULL) {
                        $req = $bdd->prepare('select count(*) as nbr from membre where email=?');
                        $req->execute(array($_POST['email']));
                        $donnee = $req->fetch(PDO::FETCH_ASSOC);
                        if ($donnee['nbr'] != 0) {
                            $req = $bdd->prepare('select pass from membre where email=?');
                            $req->execute(array($_POST['email']));
                            $donnee = $req->fetch();
                            //Action : envoi du mail
                            echo '<strong>MDP : </strong>'.$donnee['pass'].'';
                        } else {
                            echo '<strong>Information : </strong> Adresse mail introuvable';
                        }
                    } else {
                        echo '<strong>Information : </strong> Champ vide';
                    } ?>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>
</html>