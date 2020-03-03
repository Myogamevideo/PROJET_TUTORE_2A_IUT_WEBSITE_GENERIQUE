<?php include('../head.php') ?>
<link rel="stylesheet" href="../public/css/style-forum.css">

<body>
	<?php include('../header-image.php') ?>
	<main>
		<div class="container">
			<div class="containerAll">
				<h2>Forum :</h2>
				<div class="divTopic">
					<div class="topic">
						<h3>Liste des abonnés : </h3>
						<?php
						$query = 'SELECT mail FROM abonnéNewsletter';
						$sql = $bdd->query($query);
						?>
                        <p>
                        <?php
                        while ($data = $sql->fetch()) {
                            echo $data['mail'];
                            echo '<br/>';
                        }
                        ?>
                        </p>
					</div>
				<?php
						$reponse->closeCursor();
				?>
				</div>
			</div>
		</div>
	</main>
	<?php include('../footer.php') ?>
</body>

</html>