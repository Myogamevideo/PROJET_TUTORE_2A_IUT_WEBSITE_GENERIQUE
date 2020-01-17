<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-connexion.css">
<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxConnexion">
                <h2>Login</h2>
                <form>
                    <div class="inputBox">
                        <input id="champs_username" type="text" name="" require="">
                        <label>Username</label>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="" require="">
                        <label>Password</label>
                    </div>
                    <input type="submit" name="" value="submit">
                </form>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>
</html>