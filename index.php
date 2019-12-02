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
            <section id="slideshow">
                <a class="commands prev commands1" href="#sl_i4">&lt;</a>
                <a class="commands next commands1" href="#sl_i2">&gt;</a>
                <a class="commands prev commands2" href="#sl_i1">&lt;</a>
                <a class="commands next commands2" href="#sl_i3">&gt;</a>
                <a class="commands prev commands3" href="#sl_i2">&lt;</a>
                <a class="commands next commands3" href="#sl_i4">&gt;</a>
                <a class="commands prev commands4" href="#sl_i3">&lt;</a>
                <a class="commands next commands4" href="#sl_i1">&gt;</a>
                <div class="container">
                    <div class="c_slider"></div>
                    <div class="slider">
                        <figure>
                            <img src="public/image/background.jpg" alt="" width="640" height="310" />
                            <figcaption>The mirror of soul</figcaption>

                        </figure>
                        <figure>
                            <img src="public/image/background.jpg" alt="" width="640" height="310" />
                            <figcaption>Let's cross that bridge when we come to it</figcaption>
                        </figure>
                        <figure>
                            <img src="public/image/background.jpg" alt="" width="640" height="310" />
                            <figcaption>Sushi time</figcaption>

                        </figure>
                        <figure>
                            <img src="public/image/background.jpg" alt="" width="640" height="310" />
                            <figcaption>Waking Life</figcaption>
                        </figure>
                    </div>
                </div>
                <span id="timeline"></span>
            </section>
            <p>Some text some text some text some text..</p>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>