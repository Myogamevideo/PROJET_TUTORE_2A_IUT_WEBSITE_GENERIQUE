<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-monCompte.css">

<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <h1> Mini chat : </h1>
            <form method='POST' action='minichat.php'>
                <label for="pseudo">Pseudo : </label><input type="text" name="pseudo" id="pseudo">
                <br>
                <br>
                <label for="message">Message : </label><input type="text" name="message" id="message">
                <br>
                <br>
                <input type="submit">
                <br>
                <?php
                $reponse = $bdd->query('select * from chatuser order by id desc limit 10') or die(print_r($bdd->errorInfo()));
                while ($donnees = $reponse->fetch()) {
                    echo htmlspecialchars($donnees['pseudo']) . ' : ' . htmlspecialchars($donnees['message']);
                ?><br><?php
                    }
                    $reponse->closeCursor();
                        ?>
                </center>
            </form>
            <?php
            if (isset($_POST['pseudo']) and isset($_POST['message']) and $_POST['message'] != NULL and $_POST['pseudo'] != NULL) {
                $req = $bdd->prepare('insert into chatuser(pseudo,message) values(:pseudo,:message)');
                $req->execute(array(
                    'pseudo' => $_POST['pseudo'],
                    'message' => $_POST['message']
                ));
                header('Location: minichat.php');
            }
            ?>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>