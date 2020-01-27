<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-inscription.css">

<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxInscription">
                <h2>Inscription :</h2>
                <form method="POST" action="inscription.php">
                    <div class="formInscription">
                        <div class="divInscription">
                            <div class="inputBox" class="alignementLogo" class="divInscriptionChamps">
                                <div>
                                    <i class="fa fa-user fa-2x" style="color:white;"></i>
                                    <label>Nom</label>
                                </div>
                                <input type="nom" name="nom" id="nom" require="">
                            </div>
                            <div class="inputBox" class="alignementLogo" class="divInscriptionChamps">
                                <div>
                                    <i class="fa fa-user fa-2x" style="color:white;"></i>
                                    <label>Prénom</label>
                                </div>
                                <input type="text" name="prenom" id="prenom" require="">
                            </div>
                        </div>
                        <div class="divInscription">
                            <div class="inputBox" class="alignementLogo" class="divInscriptionChamps">
                                <div>
                                    <i class="fa fa-user-circle fa-2x" style="color:white;"></i>
                                    <label>Pseudo</label>
                                </div>
                                <input type="text" name="pseudo" id="pseudo" require="">
                            </div>
                            <div class="inputBox" class="alignementLogo" class="divInscriptionChamps">
                                <div>
                                    <i class="fa fa-at fa-2x" style="color:white;"></i>
                                    <label>E-mail</label>
                                </div>
                                <input type="text" name="email" id="email" require="">
                            </div>
                        </div>
                        <div class="divInscription">
                            <div class="inputBox" class="alignementLogo" class="divInscriptionChamps">
                                <div>
                                    <i class="fa fa-lock fa-2x" style="color:white;"></i>
                                    <label>Mot de passe :</label>
                                </div>
                                <input type="password" name="password" id="password" require="">
                            </div>
                            <div class="inputBox" class="alignementLogo" class="divInscriptionChamps">
                                <div>
                                    <i class="fa fa-lock fa-2x" style="color:white;"></i>
                                    <label>Confirmer votre mot de passe :</label>
                                </div>
                                <input type="password" name="confirmPassword" id="confirmPassword" require="">
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="divInscription">
                        <div class="inputBox" class="alignementLogo" class="divInscriptionChamps">
                            <div>
                                <i class="fa fa-picture-o fa-2x" style="color:white;"></i>
                                <label>Une image vous représentant :</label>
                            </div>
                            <div class="inputImage">
                                <input type="text" name="" require="">
                                <input type="submit" name="" value="Parcourir">
                            </div>
                        </div>
                    </div>
                    -->
                    <input type="submit" name="" value="S'inscrire !">
                </form>
                <div class="alert alert-warning">
                    <?php
                    if (isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['confirmPassword']) && isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom']) && $_POST['pseudo'] != NULL && $_POST['password'] != NULL && $_POST['confirmPassword'] != NULL && $_POST['email'] != NULL && $_POST['nom'] != NULL && $_POST['prenom'] != NULL) {
                        $req = $bdd->prepare('select count(*) as nbr from membre where pseudo=?');
                        $req->execute(array($_POST['pseudo']));
                        $donne = $req->fetch(PDO::FETCH_ASSOC);
                        if ($donne['nbr'] != 0) {
                            echo '<strong>Information : </strong> Pseudo dejà utilisé';
                        } else {
                            if ($_POST['confirmPassword'] != $_POST['password']) {
                                echo '<strong>Information : </strong> Mot de passe différent par rapport à la confimration';
                            } else {
                                if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])) {
                                    $pass_hach = password_hash($_POST['password'], PASSWORD_DEFAULT);
                                    $req = $bdd->prepare('insert into membre (pseudo,email,pass,prenom,nom,date_inscription) values (:pseudo,:email,:pass,:prenom,:nom,now())');
                                    $req->execute(array(
                                        'pseudo' => $_POST['pseudo'],
                                        'email' => $_POST['email'],
                                        'pass' => $pass_hach,
                                        'prenom' => $_POST['prenom'],
                                        'nom' => $_POST['nom'],
                                    ));
                                    header('location: connexion.php');
                                } else {
                                    echo '<strong>Information : </strong> Adresse email non valide';
                                }
                            }
                        }
                    } else {
                        echo '<strong>Information : </strong> Un ou plusieurs champs sont vide';
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>