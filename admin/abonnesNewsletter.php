<?php include('../head.php') ?>
<link rel="stylesheet" href="../public/css/style-forum.css">

<body>
	<?php include('../header-image.php') ?>
	<main>
		<div class="container">
			<div class="containerAll">
				<h2>Liste des abonnés :  :</h2>
				<div class="divTopic">
					<div class="topic">
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
						$sql->closeCursor();
				?>
				</div>
			</div>
		</div>
	</main>
	<?php include('../footer.php') ?>
</body>

</html>