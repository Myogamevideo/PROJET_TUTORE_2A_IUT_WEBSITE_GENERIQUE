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
                    <script type="text/javascript" src="public/js/gestionDesActualites.js"></script>
                        <h3>Gestion des actualités : </h3>
                        <h4>Forum :</h4>
                        <div>
                            <i class="fa fa-plus-circle fa-2x" style="color:orange;"></i>
                            <label>Créer un nouveau forum :</label>
                            <input type="text" name="newForum" require="" placeholder="Nom du forum">
                            <button class="button" type="button">Valider</button>
                            <input type="submit" name="" value="Valider">
                        </div>
                        <div>
                            <i class="fa fa-remove fa-2x" style="color:red;"></i>
                            <label>Supprimer un forum :</label>
                            <input type="text" name="removeForum" require="" placeholder="Supprimer un forum :">
                            <input type="submit" name="" value="Valider">
                        </div>
                        <div>
                            <i class="fa fa-remove fa-2x" style="color:red;"></i>
                            <label>Supprimer une réponse d'un forum :</label>
                            <input type="text" name="removeReponseForum" require="" placeholder="Supprimer une réponse d'un forum :">
                            <input type="submit" name="" value="Valider">
                        </div>
                        <h4>Blog :</h4>
                        <div>
                            <i class="fa fa-plus-circle fa-2x" style="color:orange;"></i>
                            <label>Ajouter un post :</label>
                            <input type="text" name="newPost" require="" placeholder="Ajouter un post">
                            <input type="submit" name="" value="Valider">
                        </div>
                        <div>
                            <i class="fa fa-remove fa-2x" style="color:red;"></i>
                            <label>Supprimer un post :</label>
                            <input type="text" name="removePost" require="" placeholder="Supprimer un post">
                            <input type="submit" name="" value="Valider">
                        </div>
                        <div>
                            <i class="fa fa-pencil fa-2x" style="color:red;"></i>
                            <label>Modifier un post :</label>
                            <input type="text" name="setPost" require="" placeholder="Modifier un post">
                            <input type="submit" name="" value="Valider">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>