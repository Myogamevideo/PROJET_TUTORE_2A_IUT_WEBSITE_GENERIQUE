<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-gestionDesActualites.css">

<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxMonCompte">
                <h2>Mon compte</h2>
                <div class="divMonCompte">
                    <div class="barreNavigation">
                        <?php include('barreNavidationCompte.php')  ?>
                    </div>
                    <div class="divGestionDesActualites">
                        <script type="text/javascript" src="public/js/MonCompte.js"></script>
                        <h3>Gestion des actualités : </h3>
                        <div class="contenaireGestionActualite">
                            <h4>Forum :</h4>
                            <div>
                                <i class="fa fa-plus-circle fa-2x" style="color:#99ff99;"></i>
                                <label>Créer un nouveau forum :</label>
                                <input type="text" name="newForum" placeholder="Nom du forum">
                                <button class="button" type="button">Valider</button>
                            </div>
                            <div>
                                <i class="fa fa-remove fa-2x" style="color:#ff3333;"></i>
                                <label>Supprimer un forum :</label>
                                <input type="text" name="removeForum" placeholder="Supprimer un forum :">
                                <button class="button" type="button">Valider</button>
                            </div>
                            <div>
                                <i class="fa fa-remove fa-2x" style="color:#ff3333;"></i>
                                <label>Supprimer une réponse d'un forum :</label>
                                <input type="text" name="removeReponseForum" placeholder="Supprimer une réponse d'un forum :">
                                <button class="button" type="button">Valider</button>
                            </div>
                            <h4>Blog :</h4>
                            <?php
                            $articles = $bdd->query('SELECT titre FROM billets ORDER BY id DESC');
                            if (isset($_GET['recherche']) and !empty($_GET['recherche'])) {
                                $recherche = htmlspecialchars($_GET['recherche']);
                                $articles = $bdd->query('SELECT titre FROM billets WHERE titre LIKE "%' . $recherche . '%" ORDER BY id DESC');
                                if ($articles->rowCount() == 0) {
                                    $articles = $bdd->query('SELECT titre FROM billets WHERE CONCAT(titre, contenu) LIKE "%' . $recherche . '%" ORDER BY id DESC');
                                }
                            }
                            ?>
                            <form method="GET">
                                <input type="search" name="recherche" placeholder="Recherche un article ..." />
                                <button type="submit" class="button">Search</button>
                            </form>

                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>titre</th>
                                        <th>contenu</th>
                                        <th>date_creation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($articles->rowCount() > 0) {
                                        while ($a = $articles->fetch()) {
                                            $reponse = $bdd->prepare('SELECT * FROM billets WHERE titre=? ORDER BY date_creation');
                                            $reponse->execute(array($a['titre']));
                                            while ($donnees = $reponse->fetch()) {
                                                echo
                                                    '<tr>
                            <td>' . $donnees['id'] . '</td>
                            <td>' . $donnees['titre'] . '</td>
                            <td style="max-height: 2em;
                            max-width: 30em;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: nowrap;">' . $donnees['contenu'] . '</td>
                            <td>' . $donnees['date_creation'] . '</td>
                            <td><form method="POST" action="deletenews.php?id=' . $donnees['id'] . '"> <input type="submit" value="Supprimer cette article"/></form></td>
                            <td><form method="POST" action="modifiernews.php?id=' . $donnees['id'] . '"> <input type="submit" value="Modifier cette article"/></form></td>
                        </tr>';
                                            }
                                            $reponse->closeCursor();
                                        }
                                    } else {
                                        echo 'Aucun résultat pour: ' . $recherche . '...';
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <form method="POST" action="ajouternews.php?id='.$donnees['id'].'"> <input type="submit" value="Ajouter un article" /></form><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>