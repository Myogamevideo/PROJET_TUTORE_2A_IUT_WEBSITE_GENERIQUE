<?php include('../head.php') ?>
<link rel="stylesheet" href="../public/css/style-ajouternews.css">

<body>
    <?php include('../header-image.php') ?>
    <main>
        <div class="container">
            <h1> Ajouter une news :</h1>
            <form method="POST" enctype="multipart/form-data" action="../admin/ajouternews.php">
                <label for="titre">Titre : </label><input type="text" name="titre" id="tritre" placeholder="Titre" required="" autofocus="" />
                <button type="button" disabled="disabled"><strong>[b] Texte en gras [/b]</strong></button>
                <button type="button" disabled="disabled"><em>[i] Texte en italique [/i]</em></button>
                <button type="button" disabled="disabled"><span style="color:red">[color=red] Texte en rouge [/color]</span></button>
                <button type="button" disabled="disabled"><a href="">Lien : http://...</a></button>
                <label for="contenu">Contenu : </label><textarea name="contenu" id="contenu" rows="10" cols="50" placeholder="Contenu de l'article" required="" autofocus=""></textarea>
                <button type="submit">Ajouter</button>
            </form>

            <div>
                <?php
                if (isset($_POST['titre']) && isset($_POST['contenu']) && $_POST['titre'] != NULL && $_POST['contenu'] != NULL) {
                    $_POST['contenu'] = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $_POST['contenu']);
                    $_POST['contenu'] = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $_POST['contenu']);
                    $_POST['contenu'] = preg_replace('#\[color=(red|green|blue|yellow|purple|olive)\](.+)\[/color\]#isU', '<span style="color:$1">$2</span>', $_POST['contenu']);
                    $_POST['contenu'] = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $_POST['contenu']);
                    $req = $bdd->prepare('select count(*) as nbr from billets where titre=?');
                    $req->execute(array($_POST['titre']));
                    $donne = $req->fetch(PDO::FETCH_ASSOC);
                    if ($donne['nbr'] != 0) {
                        echo '<strong>Information : </strong> Titre dejà utilisé';
                    } else {
                        $req = $bdd->prepare('INSERT INTO billets (titre,contenu,date_creation) VALUES (:titre,:contenu,NOW())');
                        $req->execute(array(
                            'titre' => $_POST['titre'],
                            'contenu' => $_POST['contenu'],
                        ));
                        header('location: ../admin/gestionDesActualites.php');     
                    }
                } else {
                    echo '<strong>Information : </strong> Un ou plusieurs champs sont vide';
                }
                ?>
            </div>
        </div>
    </main>
    <?php include('../footer.php') ?>
</body>

</html>