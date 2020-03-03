<?php include('../head.php') ?>
<link rel="stylesheet" href="../public/css/style-bannir.css">

<body>
    <?php include('../header-image.php') ?>
    <main>
        <div class="container">
            <div class="boxMonCompte">
                <h2>Mon compte</h2>
                <div class="divMonCompte">
                    <div class="barreNavigation">
                        <?php include('../barreNavidationCompte.php')  ?>
                    </div>
                    <div class="divBannirMembre">
                        <form method="post">
                            <h3>Bannir un membre : </h3>
                            <div class="divInput">
                                <label>Veuillez saisir le pseudo de la personne à bannir :</label>
                                <input type="text" placeholder="Pseudo de la personne à bannir..." name="pseudoBan" id="pseudoBan" require="">
                            </div>
                            <div class="divInput">
                                <label>Veuillez saisir le modif du bannissement :</label>
                                <textarea placeholder="Motif du bannissement.." name="motifBan" id="motifBan"></textarea>
                            </div>
                            <button class="buttonAction" type="submit" value="Valider">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Valider
                            </button>
                        </form>
                        <div class="alert alert-danger">
                            <?php
                            if (isset($_POST['pseudoBan']) && isset($_POST['motifBan']) && $_POST['pseudoBan'] != NULL && $_POST['motifBan'] != NULL) {
                                $req = $bdd->prepare('SELECT count(*) AS nbr FROM membre where pseudo=?');
                                $req->execute(array($_POST['pseudoBan']));
                                $donne = $req->fetch(PDO::FETCH_ASSOC);
                                if ($donne['nbr'] == 0) {
                                    echo '<strong>Information : </strong> Pseudo inexistant';
                                } else {
                                    $req = $bdd->prepare('SELECT statu FROM membre where pseudo=?');
                                    $req->execute(array($_POST['pseudoBan']));
                                    $data = $req->fetch();
                                    if ($data['statu'] != 'admin' && $data['statu'] != 'ban') {
                                        $req = $bdd->prepare('UPDATE membre SET motifBan=:motifBan , date_ban=NOW(), statu=:statu where pseudo=:pseudo');
                                        $req->execute(array(
                                            'motifBan' => $_POST['motifBan'],
                                            'pseudo' => $_POST['pseudoBan'],
                                            'statu' => "ban",
                                        ));
                                        $req = $bdd->prepare('DELETE FROM chatuser WHERE pseudo=?');
                                        $req->execute(array($_POST['pseudoBan']));
                                        $req = $bdd->prepare('DELETE FROM commentaires WHERE auteur=?');
                                        $req->execute(array($_POST['pseudoBan']));
                                        $req = $bdd->prepare('DELETE FROM avisProduit WHERE auteur=?');
                                        $req->execute(array($_POST['pseudoBan']));
                                        echo '<strong>Information : </strong> Cette personne vient d\'etre banni';
                                        echo '<ul>';
                                        echo '<li> Utilisation du chat bloqué / supression d\'ancien message </li>';
                                        echo '<li> Commande bloqué / commande en cours toujours livrable </li>';
                                        echo '<li> Utilisation de espace commentaire ou avis produit bloqué / supression d\'ancien commentaire et avis </li>';
                                        echo '<li> Profil toujours en mémoire dU site (possibilité de debanisement apres contact du support) </li>';
                                        echo '</ul>';
                                    } else {
                                        echo '<strong>Information : </strong> Cette personne est admin ou déjà banni (Contactez la BDD)';
                                    }
                                }
                            } else {
                                echo '<strong>Information : </strong> Un ou plusieurs champs sont vide';
                            }
                            ?>
                        </div>
                        <h3>Liste des membres banni : </h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Pseudo</th>
                                    <th>Email</th>
                                    <th>Motif du ban</th>
                                    <th>Date du ban</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $reponse = $bdd->query('SELECT * FROM membre where statu="ban" ORDER BY date_ban');
                                while ($donnees = $reponse->fetch()) {
                                ?>
                                    <tr>
                                        <td><?php echo $donnees['pseudo']; ?></td>
                                        <td><?php echo $donnees['email']; ?></td>
                                        <td><?php echo $donnees['motifBan']; ?></td>
                                        <td><?php echo $donnees['date_ban']; ?></td>
                                        <td>
                                            <form method="post">
                                                <input type="hidden" name="idP" id="idP" value="<?php echo $donnees['id']; ?>">
                                                <button class="buttonAction" type="submit" value="Valider">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    Enlever le ban
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php }
                                $reponse->closeCursor();
                                ?>
                            </tbody>
                        </table>
                        <div class="alert alert-danger">
                            <?php
                            if (isset($_POST['idP']) && $_POST['idP'] != 0) {
                                $req = $bdd->prepare('UPDATE membre SET motifBan=null , date_ban=null, statu=null where id=?');
                                $req->execute(array($_POST['idP']));
                                echo '<strong>Information : </strong> Cette personne vient d\'etre debanni';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <?php include('../footer.php') ?>
</body>

</html>