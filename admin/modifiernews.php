<?php include('../head.php') ?>
<link rel="stylesheet" href="../public/css/style-modifiernews.css">

<body>
    <?php include('../header-image.php') ?>
    <main>
        <div class="container">
        <h1 class="mt-5"> Modification de la news :</h1>
        <?php
        $req = $bdd->prepare('SELECT * FROM billets WHERE id=?');
        $req->execute(array($_GET['id']));
        $donne = $req->fetch();

        echo '<h2>   (' . $_GET['id'] . ') ' . $donne['titre'] . '</h2>';
        echo '<form method="POST" action="../admin/modifiernews.php?id=' . $_GET['id'] . '">';
        ?>
        <table>
            <thead>
                <tr>
                    <th>Colonne</th>
                    <th>Type</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>id</th>
                    <td>int (11)</td>
                    <td><input type="text" name="id" id="id" disabled="disabled" value="<?php echo $_GET['id']; ?>"></td>
                </tr>
                <tr>
                    <th>titre</th>
                    <td>varchar (255)</td>
                    <td><textarea name="titre" rows="5" cols="5"><?php echo $donne['titre']; ?></textarea></td>
                </tr>
                <tr>
                    <th>contenu</th>
                    <td>text</td>
                    <td>
                        <button type="button" disabled="disabled"><strong>[b] Texte en gras [/b]</strong></button>
                        <button type="button" disabled="disabled"><em>[i] Texte en italique [/i]</em></button>
                        <button type="button" disabled="disabled"><span style="color:red">[color=red] Texte en rouge [/color]</span></button>
                        <button type="button" disabled="disabled"><a href="">Lien : http://...</a></button>
                        <textarea name="contenu" rows="5" cols="5"><?php echo $donne['contenu']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>date_creation</th>
                    <td>datetime</td>
                    <td><input type="text" name="date_creation" id="date_creation" disabled="disabled" value="<?php echo $donne['date_creation']; ?>" /></td>
                </tr>
            </tbody>
        </table>
        <button type="submit">Modifier</button>

        <div>
            <?php
            if (isset($_POST['titre']) && isset($_POST['contenu']) && $_POST['titre'] != NULL && $_POST['contenu'] != NULL) {
                $_POST['contenu'] = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $_POST['contenu']);
                $_POST['contenu'] = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $_POST['contenu']);
                $_POST['contenu'] = preg_replace('#\[color=(red|green|blue|yellow|purple|olive)\](.+)\[/color\]#isU', '<span style="color:$1">$2</span>', $_POST['contenu']);
                $_POST['contenu'] = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $_POST['contenu']);
                $req = $bdd->prepare('SELECT count(*) AS nbr FROM billets WHERE titre=?');
                $req->execute(array($_POST['titre']));
                $donne = $req->fetch(PDO::FETCH_ASSOC);
                if ($donne['nbr'] != 0) {
                    echo '<strong>Information : </strong> Titre dejà utilisé';
                } else {
                    $req = $bdd->prepare('update billets set titre=:titre, contenu=:contenu, date_creation=now() where id="' . $_GET['id'] . '"');
                    $req->execute(array(
                        'titre' => $_POST['titre'],
                        'contenu' => $_POST['contenu'],
                    ));
                    echo '<strong> Modifier : </strong> <a href="admin.php"> page administration </a>';
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