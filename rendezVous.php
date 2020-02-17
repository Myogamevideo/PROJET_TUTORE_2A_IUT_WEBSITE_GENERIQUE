<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-rendezVous.css">
<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
                <h2>Prise de rendez-vous :</h2>
                <div class="contentAll">
                    <div class="total">
                        <div class="divInfoClient">
                            <div class="divInput">
                                <label>Nom :</label>
                                <input type="text" name="nomRDV" require="" id="nomRDV" placeholder="Nom...">  
                            </div>
                            <div class="divInput">
                                <label>Prénom :</label>
                                <input type="text" name="prenomRDV" require="" id="prenomRDV" placeholder="Prénom...">  
                            </div>
                            <div class="divInput">
                                <label>E-mail :</label>
                                <input type="text" name="email" require="" id="email" placeholder="E-mail...">  
                            </div>
                        </div>
                        <div class="divInput">
                            <label>Objet de la rencontre :</label>
                            <select name="objetRDV" id="objetRDV">
                                <option value="">--Please choose an option--</option>
                                <option value="entretin">Demander un entretient</option>
                                <option value="pbAvecCommande">Problème avec une commade</option>
                            </select>
                        </div>
                    </div>
                    <div class="calendrier">
                        <div class="petitCalendrier">
                            <div id="calendar" class="calendar"></div>
                            <script type="text/javascript" src="public/js/rendezVous.js"></script>
                        </div>
                    </div>
                </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>