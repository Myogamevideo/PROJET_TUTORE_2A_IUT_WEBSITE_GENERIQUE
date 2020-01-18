<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-inscription.css">
<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxInscription">
                <h2>Inscription</h2>
                <form>
                    <div class="formInscription">
                        <div class="divInscription">
                            <div class="inputBox" class="alignementLogo" class="divInscriptionChamps">
                                <div>
                                    <i class="fa fa-user fa-2x" style="color:white;"></i>
                                    <label>Nom</label>
                                </div>
                                <input type="nom" name="" require="">
                            </div>
                            <div class="inputBox" class="alignementLogo" class="divInscriptionChamps">
                                <div>
                                    <i class="fa fa-user fa-2x" style="color:white;"></i>
                                    <label>Prénom</label>
                                </div>
                                <input type="prenom" name="" require="">
                            </div>
                        </div>
                        <div class="divInscription">
                            <div class="inputBox" class="alignementLogo" class="divInscriptionChamps">
                                <div>
                                    <i class="fa fa-user-circle fa-2x" style="color:white;"></i>
                                    <label>Pseudo</label>
                                </div>
                                <input type="pseudo" name="" require="">
                            </div>
                            <div class="inputBox" class="alignementLogo" class="divInscriptionChamps">
                                <div>
                                    <i class="fa fa-at fa-2x" style="color:white;"></i>
                                    <label>E-mail</label>
                                </div>
                                <input type="email" name="" require="">
                            </div>
                        </div>
                        <div class="divInscription">
                        <div class="inputBox" class="alignementLogo" class="divInscriptionChamps">
                            <div>
                                <i class="fa fa-lock fa-2x" style="color:white;"></i>
                                <label>Mot de passe :</label>
                            </div>
                                <input type="password" name="" require="">
                            </div>
                            <div class="inputBox" class="alignementLogo" class="divInscriptionChamps">
                            <div>
                                <i class="fa fa-lock fa-2x" style="color:white;"></i>
                                <label>Confirmer votre mot de passe :</label>
                                </div>
                                <input type="confirmPassword" name="" require="">
                            </div>
                        </div>
                    </div>
                    <div class="divInscription">
                    <div class="inputBox" class="alignementLogo" class="divInscriptionChamps">
                            <div>
                                <i class="fa fa-picture-o fa-2x" style="color:white;"></i>
                                <label>Une image vous représentant :</label>
                            </div>
                            <div class="inputImage">
                                <input type="confirmPassword" name="" require="">
                                <input type="submit" name="" value="Parcourir">
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="" value="S'inscrire !">
                </form>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>
</html>