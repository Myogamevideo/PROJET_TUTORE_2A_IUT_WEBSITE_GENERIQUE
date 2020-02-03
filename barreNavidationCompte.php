<link rel="stylesheet" href="public/css/style-barreNavidationCompte.css">

<?php
if(isset($_GET['position'])){
    $position=$_GET['position'];
}
?>

<div class="vertical-menu">
    <a href="monCompte.php?position=monCompte" class="home"
    <?php 
        if(strcmp ($_GET['position'], "monCompte")==0){
            echo 'class="active"';
        }
    ?> >Mon profil</a>
    <a href="#">Tableau de bord</a>
    <a href="modifierSite.php?position=modifierSite"
    <?php 
        if(strcmp ($_GET['position'], "modifierSite")==0){
            echo 'class="active"';
        }
    ?> >Modifier le site</a>
    <a href="gestionDesActualites.php?position=gestionDesActualites"
    <?php 
        if(strcmp ($_GET['position'], "gestionDesActualites")==0){
            echo 'class="active"';
        }
    ?>
    >Gestion des actualités</a>
    <a href="monCompteBoutique.php?position=monCompteBoutique"
    <?php 
        if(strcmp ($_GET['position'], "monCompteBoutique")==0){
            echo 'class="active"';
        }
    ?> >Gestion de la boutique</a>
    <a href="#">Liste des membres</a>
    <a href="bannir.php?position=bannir"
    <?php 
        if(strcmp ($_GET['position'], "bannir")==0){
            echo 'class="active"';
        }
    ?>>Bannir un membre</a>
    <a href="mesAdresses.php?position=mesAdresses"
    <?php 
        if(strcmp ($_GET['position'], "mesAdresses")==0){
            echo 'class="active"';
        }
    ?> >Mes adresses</a>
    <a href="mesAbonnements.php?position=mesAbonnements"
    <?php 
        if(strcmp ($_GET['position'], "mesAbonnements")==0){
            echo 'class="active"';
        }
    ?> >Mes abonnements</a>
    <a href="changerMdp.php?position=changerMdp"
    <?php 
        if(strcmp ($_GET['position'], "changerMdp")==0){
            echo 'class="active"';
        }
    ?> >Changer de mot de passe</a>
    <a href="#">Se déconnecter</a>
</div> 