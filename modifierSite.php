<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-modifierSite.css">
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
                    <div class="divModifierSite">
                        <h3>Tableau de bord : </h3>
                        <div class="tanleauDeBord">
                            <div>
                                <div>
                                    <h4>Modification générale :</h4>
                                    <div class="borderAction">
                                        <label>Le nom de l'entreprise :</label>
                                        <input id="modificationNomDuSite" type="text" name="modificationNomDuSite" require="">
                                    </div>
                                    <div class=button>
                                        <button class="buttonAction">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            Valider
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <h4>Modification de l'espace vente</h4>
                                    <div class="borderAction">
                                        <label>Le nom de l'espace vente :</label>
                                        <input id="espaceVente" type="text" name="espaceVente" require="">
                                    </div>
                                    <div class=button>
                                        <button class="buttonAction">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            Valider
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <h4>Modification du portefolio</h4>
                                    <div class="borderAction">
                                        <div>
                                            <label>Qui sommes nous ?</label>
                                            <textarea placeholder="Présenter votre entreprise..."></textarea>
                                        </div>
                                        <div>
                                            <label>Notre vision d'avenir :</label>
                                            <textarea placeholder="Présenter les objectif de votre entreprise..."></textarea>
                                        </div>
                                        <div>
                                            <label>Nos projets déjà rélisés :</label>
                                            <textarea placeholder="Présenter quelques projets, ou réalisations de votre entreprise..."></textarea>
                                        </div>
                                        <div>
                                            <label>Nous recrutons :</label>
                                            <textarea placeholder="Présenter votre position au niveau du recrutement..."></textarea>
                                        </div>
                                    </div>
                                    <div class=button>
                                        <button class="buttonAction">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            Valider
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <h4>Modification de la page contact :</h4>
                                    <div class="borderAction">
                                        <div>
                                            <label>Le numéro de téléphone de votre entreprise :</label>
                                            <input id="modificationTelephone" type="text" name="modificationTelephone" require="">
                                        </div>
                                        <div>
                                            <label>L'e-mail de votre entreprise :</label>
                                            <input id="modificationEmail" type="text" name="modificationEmail" require="">
                                        </div>
                                        <div>
                                            <label>L'adresse de votre entreprise :</label>
                                            <input id="modificationAdresse" type="text" name="modificationAdresse" require="">
                                        </div>
                                    </div>
                                    <div class=button>
                                        <button class="buttonAction">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            Valider
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>
</html>










