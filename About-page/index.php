<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../front-end-tools/bootstarp/bootstrap.min.css">
</head>
<body>
<?php
    include_once '../model/Tcaroussel.php';
    include_once '../model/Tarticles.php';
?>
    <!-- navbar -->
    <?php
        include_once '../navbar/navbar.php';
    ?>

    <!-- hero -->
    <?php
        $article1=Tarticles::getArticleById(11);
        while ($ar1=$article1->fetch()){
            $titre1=$ar1[1];
            $contenu1=$ar1[2];
            $image1=$ar1[3];
        ?>
            <section class="hero container">
                <div class="row">
                    <div class="col-12 mobile-v">
                        <h1><?=$titre1?></h1>
                        <i>La nature a sa musique pour 
                        qui sait l’écouter…</i>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <img class="fl1" src="<?=$image1?>" alt="boujmil">
                    </div>
                    <div class="col-12 col-md-6 hero-text col-lg-8">
                        <h1 class="pc-v up1"><?=$titre1?></h1>
                        <i class="pc-v up1">La nature a sa musique pour 
                        qui sait l’écouter…</i>
                        <p class="up2">
                        <?=$contenu1?>
                        </p>
                    </div>
                </div>
            </section>
        <?php
            }
            $article1->closeCursor();
    ?>

    <!-- s1 -->
    <?php
        $article1=Tarticles::getArticleById(12);
        while ($ar1=$article1->fetch()){
            $titre1=$ar1[1];
            $contenu1=$ar1[2];
            $image1=$ar1[3];
        ?>
            <section class="container ss">
            <div class="row">
                <div class="text col-12 col-lg-6">
                    <h2><?=$titre1?></h2>
                    <p>
                        <?=$contenu1?>
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <img class="upw" src="<?=$image1?>" alt="image2">
                </div> 
            </div>
        </section> 
            <?php
        }
        $article1->closeCursor();
    ?>
    <hr>
    <!-- s2 -->
    <?php
        $article1=Tarticles::getArticleById(13);
        while ($ar1=$article1->fetch()){
            $titre1=$ar1[1];
            $contenu1=$ar1[2];
            $image1=$ar1[3];
        ?>
            <section class="container ss">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <img class="upw" src="<?=$image1?>" alt="image">
                    </div>
                    <div class="text col-12 col-lg-6" >
                        <h2 class="tt"><?=$titre1?></h2>
                        <p>
                            <?=$contenu1?>
                        </p>
                    </div>
                </div>
            </section>
        <?php
            }
            $article1->closeCursor();
    ?>
    <hr>
    <!-- s3 -->
    <?php
        $article1=Tarticles::getArticleById(14);
        while ($ar1=$article1->fetch()){
            $titre1=$ar1[1];
            $contenu1=$ar1[2];
            $image1=$ar1[3];
        ?>
            <section class="container ss">
                <div class="row">
                        <div class="text col-12 col-lg-6">
                            <h2 class="h2"><?=$titre1?></h2>
                            <p>
                            <?=$contenu1?>
                            </p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <img class="upw" src="<?=$image1?>" alt="">
                        </div> 
                </div>
            </section>
        <?php
            }
            $article1->closeCursor();
    ?>
    <hr>
    <!-- BROCHURES -->
    <?php
        $h=Hero::getHero('fl');
        while($article=$h->fetch()){
            $i1=$article[3];$i2=$article[4]
            ?>
                <section class="container fly">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="flayer">LES BROCHURES</h2>
                            </div>
                            <div class="py-3 flayer-img col-12 col-md-4">
                                <img class="fl" src="<?=$i1?>" alt="brochure1">
                            </div>
                            <div class="py-3 flayer-img col-12 col-md-4">
                                <img class="fr" src="<?=$i1?>" alt="brochure2" >
                            </div>
                        </div>
                </section>
            <?php
        }
        $h->closeCursor();
    ?>

    <i class="c-a" style="display: none !importent"></i>
    <i class="fl" style="display: none !importent"></i>
    <i class="fr" style="display: none !importent"></i>
    <i class="underline-A" style="display: none !importent"></i>
    <i class="underline-hover-effect" style="display: none !importent"></i>

    <!-- footer -->
    <footer class="mb-0 mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-7 col-md-4">
                    <h4>DAWYA NATURE</h4>
                    <p>La nature a sa musique <br> pour qui sait l’écouter…</p>
                </div>
                <div class="col-5 col-md-4">
                    <h4>Liens utiles</h4>
                    <a href="../About page/index.php">A propos</a> <br>
                    <a href="../boujmil-page/index.php">BOUJMIL</a><br>
                    <a href="../Activity-page/index.php">Activités</a><br>
                    <a href="">Contact</a><br>
                </div>
                <div class="col-12 col-md-4 row">
                     <div class="col-7 col-md-12">
                         <h4>Contact</h4>
                         <p><a href="mailto:ouedkoumdawya@gmail.com">Envoyer un mail</a></p>
                         <p><a href="tel:+212 6 17 86 24 73">Cliquez pour appeler</a></p>
                     </div>
                    <span class="col-5 col-md-12">
                        <h4>Social</h4>
                        <a href=""> Facebook</a> 
                        <a href="">Instagram</a>
                        <a href="Dawya- natures-experiences.ma">Social webSite</a>
                    </span>
                    
                </div>
                <div class="col-12 text-center pb-3">
                     <hr>
                    <p>© DAWYA NATURE |<a href=""> Mentions juridiques</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- blob -->
    <img  class="blob b-r" src="../front-end-tools/BLOBR.png" alt="">
    <img  class="blob b-l-t" src="../front-end-tools/BLOBL.png" alt="">
    <img  class="blob b-l-2" src="../front-end-tools/BLOB.png" alt="">
    <img  class="blob b-l-3" src="../front-end-tools/BLOB.png" alt="">
    <img  class="blob b-r-2" src="../front-end-tools/BLOB.png" alt="">
    <img  class="blob b-r-3" src="../front-end-tools/BLOB.png" alt="">
    <img  class="blob b-r-4" src="../front-end-tools/BLOB.png" alt="">
    <div class="b-hide">
        blob
    </div>
    
    

<script src="../front-end-tools/bootstarp/bootstrap.min.js"></script>
<script src="../front-end-tools/script.js"></script>
<script src="../navbar/script.js"></script>
</body>
</html>




