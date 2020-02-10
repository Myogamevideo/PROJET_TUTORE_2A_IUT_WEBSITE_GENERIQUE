<footer>
    <div class="footer-gauche">
        <?php
        $req = $bdd->query('SELECT nomDuSite FROM parametres WHERE 1');
        $donnees = $req->fetch();
        echo '<h3>'.$donnees['nomDuSite'].'</h3>';
        ?>
        <h4>Copyright © Tous droits réservés.</h4>
        <div>
            <a href="#">Anglais</a>
            <a href="#">Français</a>
        </div>
    </div>
    <div class="footer-droite">
        <div class="footer-alignement">
            <div class="footer-reseau">
                <div>
                    <h3>Nous suivre :</h3>
                    <a href="https://www.facebook.com/villedeclermontferrand/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/villedeclermontfd/" class="fa fa-instagram"></a>
                    <a href="https://www.linkedin.com/company/ville-de-clermont-ferrand/" class="fa fa-linkedin"></a>
                    <a href="https://www.youtube.com/user/TV8Clermont" class="fa fa-youtube"></a>
                </div>
            </div>
            <div class="footer-newsletter">
                <h3>Abonnez-vous à la Newsletter : </h3>
                <div>
                    <input type="text" id="name" name="name" required placeholder="Veuillez entrer votre addresse e-mail" size="40">
                    <button>Go !</button>
                </div>
            </div>
        </div>
        <div class="footer-bas">
            <?php 
                echo '<a href="#">A propos de '.$donnees['nomDuSite'].'</a>'
            ?>
            <a href="#">Contact</a>
            <a href="#">Plan du site</a>
            <a href="#">Politique sur les cookies</a>
            <a href="#">Conditions d'utilisation</a>
        </div>
    </div>
</footer>