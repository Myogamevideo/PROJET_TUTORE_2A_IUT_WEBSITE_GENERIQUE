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
                    <div class="calendriers">
                        <div class="petitCalendrier">
                            <div id="calendar1" class="calendar"></div>
                            <script type="text/javascript" src="public/js/rendezVous.js"></script>
                            <div class="legende">
                                <div class="legende">
                                    <label>Conseiller disponible</label>
                                    <canvas id='c1' class="rectangle"></canvas>
                                </div>
                                <div class="legende">
                                    <label>Conseiller indisponible</label>
                                    <canvas id='c1' class="conseillerIndisponible rectangle "></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="grandCalendrier">
                                <h3 class="jourChoisie"></h3>
                                <table class="tabPriseRDV">
                                    <th></th>
                                    <?php
                                        $listeHeure =['10h', '11h', '14h', '15h', '16h'];
                                        for ($i=0; $i<count($listeHeure); $i++) {
                                            echo '<th>'.$listeHeure[$i].'</th>';
                                        }
                                    ?>
                                    <tr>
                                        <td>Conseiller 1</td>
                                        <?php
                                            for ($i=0; $i<count($listeHeure); $i++) {
                                                echo '<td class="conseillerIndisponible"> </td>';
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>Conseiller 2</td>
                                        <?php
                                            for ($i=0; $i<count($listeHeure); $i++) {
                                                echo '<td> </td>';
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>Conseiller 3</td>
                                        <?php
                                            for ($i=0; $i<count($listeHeure); $i++) {
                                                echo '<td> </td>';
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>Conseiller 4</td>
                                        <td></td>
                                        <td class="conseillerIndisponible"> </td>
                                        <td></td>
                                        <td class="conseillerIndisponible"> </td>
                                        <td class="conseillerIndisponible"> </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>