<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-inscription.css">
<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxInscription">
                <h2>Inscription</h2>
                <form >
                    <div class="formInscription">
                        <div class="divInscription">
                            <div class="inputBox">
                                <input type="nom" name="" require="">
                                <label>Nom</label>
                            </div>
                            <div class="inputBox">
                                <input type="prenom" name="" require="">
                                <label>Prenom</label>
                            </div>
                            <div class="inputBox">
                                <input type="pseudo" name="" require="">
                                <label>Pseudo</label>
                            </div>
                        </div>
                        <div class="divInscription">
                            <div class="inputBox">
                                <input type="email" name="" require="">
                                <label>E-mail</label>
                            </div>
                            <div class="inputBox">
                                <input type="password" name="" require="">
                                <label>Mot de passe :</label>
                            </div>
                            <div class="inputBox">
                                <input type="ConfirmPassword" name="" require="">
                                <label>Confirmer votre mot de passe :</label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="" value="submit">
                </form>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>
</html>