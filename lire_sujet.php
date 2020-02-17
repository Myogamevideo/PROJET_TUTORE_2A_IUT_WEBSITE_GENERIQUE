<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-accueil.css">

<body>
	<?php include('header-image.php') ?>
	<main>
        <?php
            if (!isset($_GET['id_sujet_a_lire'])) {
                echo 'Sujet non défini.';
            }
            else {
        ?>
        <table width="500" border="1">
            <tr>
                <td>Auteur</td>
                <td>Messages</td>
            </tr>
            <?php
            // on prépare notre requête
            $sql = 'SELECT pseudo, F.idTopic, M.id, F.idUtilisateur, contenu, dateReponse FROM messageForum F, membre M WHERE idTopic="$_GET['id_sujet_a_lire']" AND M.id=F.idUtilisateur ORDER BY dateReponse ASC';

            // on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
            $req = $bdd->query($sql);

            // on va scanner tous les tuples un par un
            while ($data = $req->fetch()) {

            // on décompose la date
            //sscanf($data['date_reponse'], "%4s-%2s-%2s %2s:%2s:%2s", $annee, $mois, $jour, $heure, $minute, $seconde);

            // on affiche les résultats
            echo '<tr>';
            echo '<td>';

            // on affiche le nom de l'auteur de sujet ainsi que la date de la réponse
            echo htmlentities(trim($data['pseudo']));
            echo '<br />';
            //echo $jour , '-' , $mois , '-' , $annee , ' ' , $heure , ':' , $minute;
            echo htmlentities(trim($data['dateReponse']));

            echo '</td><td>';

            // on affiche le message
            echo nl2br(htmlentities(trim($data['contenu'])));
            echo '</td></tr>';
            }

            // on libère l'espace mémoire alloué pour cette reqête
            $req->closeCursor();
            ?>

            <!-- on ferme notre table html -->
        </table>
        <br />
        <br />
        <!-- on insère un lien qui nous permettra de rajouter des réponses à ce sujet -->
        <a href="./insert_reponse.php?numero_du_sujet=<?php echo $_GET['id_sujet_a_lire']; ?>">Répondre</a>
        <?php
        }
        ?>
        <br />
        <br />
        <!-- on insère un lien qui nous permettra de retourner à l'accueil du forum -->
        <a href="./index.php">Retour à l'accueil</a>
	</main>
	<?php include('footer.php') ?>
</body>

</html>