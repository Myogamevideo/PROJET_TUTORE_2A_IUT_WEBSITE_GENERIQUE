<?php include('../head.php') ?>
<link rel="stylesheet" href="../public/css/style-changerMdp.css">

<body>
    <?php include('../header-image.php') ?>
    <main>
        <div class="container">
            <div class="divChangerMdp">
                <h3>Réinitialisez votre de mot de passe : </h3>
                <form method="POST" action="../reinitialiserMdp.php">
                    <div class="inputBox" class="alignementLogo" class="divInput">
                        <div>
                            <i class="fa fa-lock fa-2x" style="color:white;"></i>
                            <label>Mot de passe :</label>
                        </div>
                        <input type="password" name="password" id="password" require="">
                    </div>
                    <div class="inputBox" class="alignementLogo" class="divInput">
                        <div>
                            <i class="fa fa-lock fa-2x" style="color:white;"></i>
                            <label>Confirmer votre mot de passe :</label>
                        </div>
                        <input type="password" name="confirmPassword" id="confirmPassword" require="">
                    </div>
                    <input type="submit" value="Cliquez ici !"/>
                    <div>
                    <?php
                        if(isset($_POST['email']) && $_POST['email'] != NULL){
                            $mail = $_POST['email'];
                        }
                        else{
                            echo '<div class="alert alert-danger"><strong>Information : </strong> Problème mail</div>';
                        }
                        if (isset($_POST['password']) && isset($_POST['confirmPassword']) && $_POST['password'] != NULL && $_POST['confirmPassword'] != NULL) {
                            if ($_POST['confirmPassword'] != $_POST['password']) {
                                echo '<strong>Information : </strong> Mot de passe différent par rapport à la confimration';
                            } 
                            else {
                                $pass_hach = password_hash($_POST['password'], PASSWORD_DEFAULT);
                                $req = $bdd->prepare("UPDATE membre SET mdp = :passWHERE email=$mail");
                                $req->execute(array($pass_hach));
                                echo '<div class="alert alert-success"><strong>Information : </strong> Vous avez réinitialisé votre mdp avec succès !</div>';
                            } 
                        else {
                            echo '<div class="alert alert-danger"><strong>Information : </strong> Un ou plusieurs champs sont vide</div>';
                        }
                    ?>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include('../footer.php') ?>
</body>

</html>