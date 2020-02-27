<?php
// on teste si le formulaire a été soumis
if (isset ($_POST['go']) && $_POST['go']=='Poster') {
	// on teste la déclaration de nos variables
	if (!isset($_POST['auteur']) || !isset($_POST['titre']) || !isset($_POST['message'])) {
	$erreur = 'Les variables nécessaires au script ne sont pas définies.';
	}
	else {
	// on teste si les variables ne sont pas vides
	if (empty($_POST['auteur']) || empty($_POST['titre']) || empty($_POST['message'])) {
		$erreur = 'Au moins un des champs est vide.';
	}

	// si tout est bon, on peut commencer l'insertion dans la base
	else {
		// on calcule la date actuelle
        $date = date("Y-m-d H:i:s");
        $idMembre = "SELECT id FROM membre WHERE ".$_POST['auteur']."==pseudo";
		// préparation de la requête d'insertion (pour la table forum_sujets)
		$sql = "INSERT INTO topic VALUES("", "'.$idMembre.'", "'$_POST['titre'].'", "'.$date.'")";

		$bdd->query($sql)
		// on recupère l'id qui vient de s'insérer dans la table forum_sujets
		$id_sujet = mysql_insert_id();

		// lancement de la requête d'insertion (pour la table forum_reponses
		$sql = 'INSERT INTO forum_reponses VALUES("", "'.mysql_escape_string($_POST['auteur']).'", "'.mysql_escape_string($_POST['message']).'", "'.$date.'", "'.$id_sujet.'")';

		// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

		// on ferme la connexion à la base de données
		mysql_close();

		// on redirige vers la page d'accueil
		header('Location: index.php');

		// on termine le script courant
		exit;
	}
	}
}
?>

<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-accueil.css">

    <body>
        <?php include('header-image.php') ?>
        <main>
            <!-- on fait pointer le formulaire vers la page traitant les données -->
            <form action="insert_sujet.php" method="post">
                <table>
                    <tr>
                        <td>[b]Auteur :[/b]</td>
                        <td><input type="text" name="auteur" maxlength="30" size="50" value="<?php if (isset($_POST['auteur'])) echo htmlentities(trim($_POST['auteur'])); ?>"></td>
                    </tr>
                    <tr>
                        <td>[b]Titre :[/b]</td>
                        <td><input type="text" name="titre" maxlength="50" size="50" value="<?php if (isset($_POST['titre'])) echo htmlentities(trim($_POST['titre'])); ?>"></td>
                    </tr>
                    <tr>
                        <td>[b]Message :[/b]</td>
                        <td><textarea name="message" cols="50" rows="10"><?php if (isset($_POST['message'])) echo htmlentities(trim($_POST['message'])); ?></textarea></td>
                    </tr>
                    <tr>
                        <td align="right"><input type="submit" name="go" value="Poster"></td>
                    </tr>
                </table>
            </form>
            <?php
                // on affiche les erreurs éventuelles
                if (isset($erreur)) echo '<br /><br />',$erreur;
            ?>
        </main>
        <?php include('footer.php') ?>
    </body>
</html>