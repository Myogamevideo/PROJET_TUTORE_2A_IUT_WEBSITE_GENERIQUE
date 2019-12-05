<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>SoundPerception</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <video autoplay controls loop poster="public/image/background.jpg" id="bgvid">
                <source src="public/video/background.mp4" type="video/mp4">
                <p>Votre navigateur ne prend pas en charge les vidéos HTML5.</p>
            </video>
            <div class="overlay">
                <span class="letter" data-letter="S">S</span>
                <span class="letter" data-letter="o">o</span>
                <span class="letter" data-letter="u">u</span>
                <span class="letter" data-letter="n">n</span>
                <span class="letter" data-letter="d">d</span>
                <span class="letter" data-letter="P">P</span>
                <span class="letter" data-letter="e">e</span>
                <span class="letter" data-letter="r">r</span>
                <span class="letter" data-letter="c">c</span>
                <span class="letter" data-letter="e">e</span>
                <span class="letter" data-letter="p">p</span>
                <span class="letter" data-letter="t">t</span>
                <span class="letter" data-letter="i">i</span>
                <span class="letter" data-letter="o">o</span>
                <span class="letter" data-letter="n">n</span>
                <div class="blockquote">
                    « La musique, c'est aussi grand que l'univers. Il suffit juste d'oser »
                </div>
            </div>
            <div class="icon-bar">
                <a class="active" href="#"><i class="fa fa-home"> Accueil</i></a>
                <a href="#">Boutique</a>
                <a href="#">Blog</a>
                <a href="#">Forum</a>
                <a href="#">Portofolio</a>
                <a href="#">Contact</a>
                <input type="text" placeholder="Search..">
                <button type="button"><i class="fa fa-search"></i></button>
                <div class="icon-bar-right">
                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#"><i class="fa fa-user-circle-o"></i></a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="slidershow">
                <div class="slides ">
                    <input type="radio" name="r" id="r1" checked>
                    <input type="radio" name="r" id="r2">
                    <input type="radio" name="r" id="r3">
                    <input type="radio" name="r" id="r4">
                    <input type="radio" name="r" id="r5">
                    <div class="slide s1">
                        <img src="public/image/background.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="public/image/background.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="public/image/background.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="public/image/background.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="public/image/background.jpg" alt="">
                    </div>
                </div>
                <div class="navigation">
                    <label for="r1" class="bar"></label>
                    <label for="r2" class="bar"></label>
                    <label for="r3" class="bar"></label>
                    <label for="r4" class="bar"></label>
                    <label for="r5" class="bar"></label>
                </div>
            </div>
            <div class="vertical-menu">
                <a href="#" class="active"><img src="public/image/background.jpg" alt=""></a>
                <a href="#"><img src="public/image/background.jpg" alt=""></a>
                <a href="#"><img src="public/image/background.jpg" alt=""></a>
                <a href="#"><img src="public/image/background.jpg" alt=""></a>
            </div>
            <div class="card">
                <div class="presentation-card">
                    <h2>Dernier article :</h2>
                    <button class="button"><span>Voir tous les articles</span></button>
                </div>
                <div class="liste-card">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="public/image/background.jpg" alt="" style="width:350px;height:200px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>Titre</h1>
                                <p>nzeuifnziunfz...</p>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="public/image/background.jpg" alt="" style="width:350px;height:200px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>Titre</h1>
                                <p>nzeuifnziunfz...</p>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="public/image/background.jpg" alt="" style="width:350px;height:200px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>Titre</h1>
                                <p>nzeuifnziunfz...</p>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="public/image/background.jpg" alt="" style="width:350px;height:200px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>Titre</h1>
                                <p>nzeuifnziunfz...</p>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="public/image/background.jpg" alt="" style="width:350px;height:200px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>Titre</h1>
                                <p>nzeuifnziunfz...</p>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="public/image/background.jpg" alt="" style="width:350px;height:200px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>Titre</h1>
                                <p>nzeuifnziunfz...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr width="100%" color="grey">
            <div class="card">
                <div class="presentation-card">
                    <h2>Achat mis en avant :</h2>
                    <button class="button"><span>Voir toute la boutique</span></button>
                </div>
                <div class="liste-card">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="public/image/background.jpg" alt="" style="width:350px;height:200px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>Titre</h1>
                                <p>nzeuifnziunfz...</p>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="public/image/background.jpg" alt="" style="width:350px;height:200px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>Titre</h1>
                                <p>nzeuifnziunfz...</p>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="public/image/background.jpg" alt="" style="width:350px;height:200px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>Titre</h1>
                                <p>nzeuifnziunfz...</p>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="public/image/background.jpg" alt="" style="width:350px;height:200px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>Titre</h1>
                                <p>nzeuifnziunfz...</p>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="public/image/background.jpg" alt="" style="width:350px;height:200px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>Titre</h1>
                                <p>nzeuifnziunfz...</p>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="public/image/background.jpg" alt="" style="width:350px;height:200px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>Titre</h1>
                                <p>nzeuifnziunfz...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>