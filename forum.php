<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-accueil.css">

<body>
	<?php include('header-image.php') ?>
	<main>
		<!-- on place un lien permettant d'accéder à la page contenant le formulaire d'insertion d'un nouveau sujet -->
		<a href="insert_sujet.php">Insérer un sujet</a><br /><br />
		<?php
		// préparation de la requete
		$query = 'SELECT T.id, M.id, pseudo, idAuteur, titre, creation, lastModification FROM topic T, membre M WHERE M.id = idAuteur ORDER BY lastModification LIMIT 4';
		// on compte le nombre de sujets du forum
		$sql = $bdd->query($query);
		$results = $sql->fetchAll();
		//$nb_sujets = count($results);
		$nb_sujets = $sql->rowCount();

		if ($nb_sujets == 0) {
			echo 'Aucun sujet';
		}
		else {
			?>
			<table width="500" border="1">
				<tr>
					<td>Auteur</td>
					<td>Titre du sujet</td>
					<td>Date dernière réponse</td>
				</tr>
			<?php
			while ($data = $sql->fetchAll()) {
				// on décompose la date
				//sscanf($data['lastModification'], "%4s-%2s-%2s %2s:%2s:%2s", $annee, $mois, $jour, $heure, $minute, $seconde);

				// on affiche les résultats
				echo '<tr>';
				echo '<td>';

				// on affiche le nom de l'auteur de sujet
				echo htmlentities(trim($data['pseudo']));
				echo '</td><td>';

				// on affiche le titre du sujet, et sur ce sujet, on insère le lien qui nous permettra de lire les différentes réponses de ce sujet
				echo '<a href="lire_sujet.php?id_sujet_a_lire=' , $data['T.id'] , '">' , htmlentities(trim($data['titre'])) , '</a>';

				echo '</td><td>';

				// on affiche la date de la dernière réponse de ce sujet
				echo $data['lastModification'];
				}
				?>
			</td></tr></table>
			<?php
			}
			//$reponse->closeCursor();
			?>
		</main>
	<?php include('footer.php') ?>
</body>

</html>