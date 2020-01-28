<div class="navbar">
    <a class="active" href="index.php"><i class="fa fa-home"></i>Accueil</a>
    <a href="boutique.php">Boutique</a>
    <a href="blog.php">Blog</a>
    <a href="#">Forum</a>
    <a href="portefolio.php">Portofolio</a>
    <a href="contact.php">Contact</a>
    <input type="text" placeholder="Search..">
    <button type="button"><i class="fa fa-search fa-1x grey"></i></button>
    <div class="subnav">
        <a class="subnavbtn" href="#"><i class="fa fa-shopping-cart fa-1x grey"></i></a>
    </div>
    <div class="subnav">
        <a class="subnavbtn"><i class="fa fa-user-circle-o fa-1x grey"></i></a>
        <div class="subnav-content">
            <a href="connexion.php">Connexion</a>
            <a href="inscription.php">Inscription</a>
            <?php if (isset($_SESSION['pseudo']) and $_SESSION['pseudo'] != null) { ?>
                <a href="monCompte.php">Mon compte</a>
                <a href="deconnexion.php">Deconnexion</a>
            <?php } ?>
        </div>
    </div>
</div>