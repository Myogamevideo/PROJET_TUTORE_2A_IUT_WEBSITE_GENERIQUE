<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-connexion.css">
<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxConnexion">
                <h2>Connexion</h2>
                <form>
                    <div class="inputBox" class="alignementLogo" class="divConnexion">
                        <i class="fa fa-user-circle fa-2x" style="color:white;"></i>
                        <label>Username</label>
                        <input id="champs_username" type="text" name="" require="">
                    </div>
                    <div class="inputBox" class="alignementLogo" class="divConnexion">
                        <i class="fa fa-lock fa-2x" style="color:white;"></i>
                        <label>Password</label>
                        <input type="password" name="" require="">  
                    </div>
                    <input type="submit" name="" value="submit">
                </form>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>
</html>