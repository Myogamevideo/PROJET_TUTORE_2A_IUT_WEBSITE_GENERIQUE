<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-minichat.css">

<body>
    <?php include('header-image.php') ?>
    <main>
        <div class="container">
            <div class="containerAll">
                <h2>Mini chatt :</h2>
                <script type="text/javascript" src="public/js/minichat.js"></script>
                <div class="chat-popup" id="myForm">
                    <form class="formChatt" method='POST' action='minichat.php'>

                        <div>
                            <h1>Chat</h1>
                            <label for="pseudo">Pseudo : </>
                            <input type="text" name="pseudo" id="pseudo">

                            <label for="message">Message : </label>
                            <input type="text" name="message" id="message">
                
                            <input type="submit">
                            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                        </div>

                        <div>
                            <p>Discussion :</p>
                            <?php
                                $reponse = $bdd->query('select * from chatuser order by id desc limit 10') or die(print_r($bdd->errorInfo()));
                                while ($donnees = $reponse->fetch()) {
                                echo htmlspecialchars($donnees['pseudo']) . ' : ' . htmlspecialchars($donnees['message']);
                                ?><br><?php
                                }
                                $reponse->closeCursor();
                            ?> 
                        </div>
                    </form>
                </div>
                <div>
                <?php 
                    if (isset($_POST['pseudo']) and isset($_POST['message']) and $_POST['message'] != NULL and $_POST['pseudo'] != NULL) {
                        $req = $bdd->prepare('insert into chatuser(pseudo,message) values(:pseudo,:message)');
                        $req->execute(array(
                            'pseudo' => $_POST['pseudo'],
                            'message' => $_POST['message']
                        ));
                        header('Location: minichat.php');
                        
                    }
                ?>                      
                </div>
        
            </div>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>