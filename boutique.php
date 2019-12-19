<?php include('head.php') ?>
<link rel="stylesheet" href="public/css/style-boutique.css">

<body>
    <?php include('header-image.php') ?>
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
            <div class="boutique">
                <div class="filtre">
                    <button class="btn success"><i class="fa fa-music"></i> CD</button>
                    <button class="btn success"><i class="fa fa-music"></i> Vinyle</button>
                    <button class="btn success"><i class="fa fa-music"></i> T-shirt</button>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Filtres :</li>
                    </ul>
                </div>
                <div class="card">
                    <img src="public/image/background.jpg" alt="" width="50">
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php') ?></body>

</html>