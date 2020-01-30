<link rel="stylesheet" href="public/css/style-barreNavidationCompte.css">

<?php
if(isset($_GET['reference_produit'])){
    $position=$_GET['reference_produit'];
}
?>

<div class="vertical-menu">

    <p><?php echo "$position"; ?></p>
    <a href="monCompte.php" 
    <?php 
        echo 'class="active'; ?> >Mon profil</a>
    <a href="#">Tableau de bord</a>
    <a href="modifierSite.php">Modifier le site</a>
    <a href="#">Gestion des actualités</a>
    <a href="monCompteBoutique.php">Gestion de la boutique</a>
    <a href="#">Liste des membres</a>
    <a href="#">Bannir un membre</a>
    <a href="#">Mes addresses</a>
    <a href="#">Mes abonnements</a>
    <a href="#">Se déconnecter</a>
</div> 