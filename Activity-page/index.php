<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="s.css">
    <link rel="stylesheet" href="../front-end-tools/bootstarp/bootstrap.min.css">
</head>
<body >
<?php

        include_once '../model/Tcaroussel.php';
        include_once '../model/Tarticles.php';
?>



    <!-- navbar -->
    <?php
        include_once '../navbar/navbar.php';
    ?>

    <!-- hero2 -->
    <section data-scroll-section class=" hero container">
        <div class="row hero-row">
            
            <div class="hero-container">
                <i>
                    <h1 data-scroll data-scroll-class="fade-up" data-scroll-position="top" data-scroll-repeat="true" data-scroll-speed="1"  class="hero-h1">                   
                        <strong>DA</strong><strong style="color: rgb(255, 119, 0);">W</strong><strong>YA</strong> <br>
                        <strong>NATURE ACTIVITES</strong>
                    </h1>
                </i>
                <span>
                    <img   class="col-5 col-md-4   hero-img" src="../front-end-tools/10 t.jpg" alt="boujmil">
                    <p  class="mobile-p col-6"> 
                        OFFRES TOURISTIQUES UNIQUES de (RE)DECOUVERTE de
                        la NATURE dans l’arrière pays de la côte méditerranéenne
                    </p>
                </span>
                
                   
            </div>
            <div class="col-6"></div>
            <div class="text col-6">
                <p>
                    OFFRES TOURISTIQUES UNIQUES de (RE)DECOUVERTE de
                    la NATURE dans l’arrière pays de la côte méditerranéenne 
                </p>
            </div>
            <div class="col-2"></div>   
    
            <div class="col-12 col-md-10 row third-row">
    
                <img class="col col-md-4 s-img" data-scroll-position="top" data-scroll  data-scroll-speed="2"  src="../front-end-tools/11.jpg" alt="">
    
                <div  class="col-3 scroll-down-animation my-auto">
                    <span class="mouse">
                      <span class="move"></span>
                    </span>
                    Scroll down
                </div>
            
            </div>    
            
        </div> 
    </section>
    
    <!-- activities -->
    <!-- left act -->
    <?php
        $article1=Tarticles::getArticleById(1);
        while ($ar1=$article1->fetch()){
            $titre1=$ar1[1];
            $contenu1=$ar1[2];
            $image1=$ar1[3];
        ?>
            <section  class=" activities container">
            <div  class="row">
                <div class="col-12 col-md-4 upw">
                    <img    class="ac-img" style="width:100% !importent" src="<?=$image1?>" alt="<?=$titre1?>">
                </div>
                <div class=" col-12 col-md-8">
                    <div class="title my-5 col-12">
                        <h3 class="number"  >01</h3>
                        <h4>
                            —Activité
                        </h4>
                        <h2   ><?=$titre1?></h2>
                    </div>
                    <div class=" par my-5 col-12">
                        <p><?=$contenu1?></p>
                    </div>
                </div>
                
                <div class="col-12 mobile-par">
                    <p><?=$contenu1?></p>
                </div>
            </div>
        </section> 
            <?php
        }
        $article1->closeCursor();
    ?>
    
    <!-- right act -->
    <?php
        $article1=Tarticles::getArticleById(2);
        while ($ar1=$article1->fetch()){
            $titre1=$ar1[1];
            $contenu1=$ar1[2];
            $image1=$ar1[3];
        ?>
            <section  class=" activities container">
            <div  class="row">
                <div class=" col-12 col-md-8">
                    <div class="title my-5 col-12">
                        <h3 class="number"  >02</h3>
                        <h4>
                            —Activité
                        </h4>
                        <h2><?=$titre1?></h2>
                    </div>
                    <div class=" par my-5 col-12">
                        <p><?=$contenu1?></p>
                    </div>
                </div>
                <div class="col-12 col-md-4 upw">
                    <img   class="ac-img" src="<?=$image1?>" alt="<?=$titre1?>">
                </div>
                <div class="col-12 mobile-par">
                    <p><?=$contenu1?></p>
                </div>
            </div>
        </section> 
            <?php
        }
        $article1->closeCursor();
    ?>

    <!-- left act -->
    <?php
        $article1=Tarticles::getArticleById(3);
        while ($ar1=$article1->fetch()){
            $titre1=$ar1[1];
            $contenu1=$ar1[2];
            $image1=$ar1[3];
        ?>
            <section  class=" activities container">
            <div  class="row">
                <div class="col-12 col-md-4 upw">
                    <img   class="ac-img" src="<?=$image1?>" alt="<?=$titre1?>">
                </div>
                <div class=" col-12 col-md-8">
                    <div class="title my-5 col-12">
                        <h3 class="number"  >03</h3>
                        <h4>
                            —Activité
                        </h4>
                        <h2><?=$titre1?></h2>
                    </div>
                    <div class=" par my-5 col-12">
                        <p><?=$contenu1?></p>
                    </div>
                </div>
                
                <div class="col-12 mobile-par">
                    <p><?=$contenu1?></p>
                </div>
            </div>
        </section> 
            <?php
        }
        $article1->closeCursor();
    ?>

    <!-- right act -->
    <?php
        $article1=Tarticles::getArticleById(4);
        while ($ar1=$article1->fetch()){
            $titre1=$ar1[1];
            $contenu1=$ar1[2];
            $image1=$ar1[3];
        ?>
            <section  class=" activities container">
            <div  class="row">
                <div class=" col-12 col-md-8">
                    <div class="title my-5 col-12">
                        <h3 class="number"  >04</h3>
                        <h4>
                            —Activité
                        </h4>
                        <h2><?=$titre1?></h2>
                    </div>
                    <div class=" par my-5 col-12">
                        <p><?=$contenu1?></p>
                    </div>
                </div>
                <div class="col-12 col-md-4 upw">
                    <img   class="ac-img" src="<?=$image1?>" alt="<?=$titre1?>">
                </div>
                
                <div class="col-12 mobile-par">
                    <p><?=$contenu1?></p>
                </div>
            </div>
        </section> 
            <?php
        }
        $article1->closeCursor();
    ?>

    <!-- left act -->
    <?php
        $article1=Tarticles::getArticleById((5));
        while ($ar1=$article1->fetch()){
            $titre1=$ar1[1];
            $contenu1=$ar1[2];
            $image1=$ar1[3];
        ?>
            <section  class=" activities container">
            <div  class="row">
                <div class="col-12 col-md-4 upw">
                    <img   class="ac-img" src="<?=$image1?>" alt="<?=$titre1?>">
                </div>
                <div class=" col-12 col-md-8">
                    <div class="title my-5 col-12">
                        <h3 class="number"  >05</h3>
                        <h4>
                            —Activité
                        </h4>
                        <h2><?=$titre1?></h2>
                    </div>
                    <div class=" par my-5 col-12">
                        <p><?=$contenu1?></p>
                    </div>
                </div>
                <div class="col-12 mobile-par">
                    <p><?=$contenu1?></p>
                </div>
            </div>
        </section> 
            <?php
        }
        $article1->closeCursor();
    ?>

    <!-- right act -->
    <?php
        $article1=Tarticles::getArticleById(6);
        while ($ar1=$article1->fetch()){
            $titre1=$ar1[1];
            $contenu1=$ar1[2];
            $image1=$ar1[3];
        ?>
            <section  class=" activities container">
            <div  class="row">
                <div class=" col-12 col-md-8">
                    <div class="title my-5 col-12">
                        <h3 class="number"  >06</h3>
                        <h4>
                            —Activité
                        </h4>
                        <h2><?=$titre1?></h2>
                    </div>
                    <div class=" par my-5 col-12">
                        <p><?=$contenu1?></p>
                    </div>
                </div>
                <div class="col-12 col-md-4 upw">
                    <img   class="ac-img" src="<?=$image1?>" alt="<?=$titre1?>">
                </div>
                
                <div class="col-12 mobile-par">
                    <p><?=$contenu1?></p>
                </div>
            </div>
        </section> 
            <?php
        }
        $article1->closeCursor();
    ?>

    <!-- left act -->
    <?php
        $article1=Tarticles::getArticleById(7);
        while ($ar1=$article1->fetch()){
            $titre1=$ar1[1];
            $contenu1=$ar1[2];
            $image1=$ar1[3];
        ?>
            <section  class=" activities container">
            <div  class="row">
                <div class="col-12 col-md-4 upw">
                    <img   class="ac-img" src="<?=$image1?>" alt="<?=$titre1?>">
                </div>
                <div class=" col-12 col-md-8">
                    <div class="title my-5 col-12">
                        <h3 class="number"  >07</h3>
                        <h4>
                            —Activité
                        </h4>
                        <h2><?=$titre1?></h2>
                    </div>
                    <div class=" par my-5 col-12">
                        <p><?=$contenu1?></p>
                    </div>
                </div>
                
                <div class="col-12 mobile-par">
                    <p><?=$contenu1?></p>
                </div>
            </div>
        </section> 
            <?php
        }
        $article1->closeCursor();
    ?>

    <!-- right act -->
    <?php
        $article1=Tarticles::getArticleById(8);
        while ($ar1=$article1->fetch()){
            $titre1=$ar1[1];
            $contenu1=$ar1[2];
            $image1=$ar1[3];
        ?>
            <section  class=" activities container">
            <div  class="row">
                <div class=" col-12 col-md-8">
                    <div class="title my-5 col-12">
                        <h3 class="number"  >08</h3>
                        <h4>
                            —Activité
                        </h4>
                        <h2><?=$titre1?></h2>
                    </div>
                    <div class=" par my-5 col-12">
                        <p><?=$contenu1?></p>
                    </div>
                </div>
                <div class="col-12 col-md-4 upw">
                    <img   class="ac-img" src="<?=$image1?>" alt="<?=$titre1?>">
                </div>
                
                <div class="col-12 mobile-par">
                    <p><?=$contenu1?></p>
                </div>
            </div>
        </section> 
            <?php
        }
        $article1->closeCursor();
    ?>

    <!-- left act -->
    <?php
        $article1=Tarticles::getArticleById(9);
        while ($ar1=$article1->fetch()){
            $titre1=$ar1[1];
            $contenu1=$ar1[2];
            $image1=$ar1[3];
        ?>
            <section  class=" activities container">
            <div  class="row">
                <div class="col-12 col-md-4 upw">
                    <img   class="ac-img" src="<?=$image1?>" alt="<?=$titre1?>">
                </div>
                <div class=" col-12 col-md-8">
                    <div class="title my-5 col-12">
                        <h3 class="number"  >09</h3>
                        <h4>
                            —Activité
                        </h4>
                        <h2><?=$titre1?></h2>
                    </div>
                    <div class=" par my-5 col-12">
                        <p><?=$contenu1?></p>
                    </div>
                </div>
                
                <div class="col-12 mobile-par">
                    <p><?=$contenu1?></p>
                </div>
            </div>
        </section> 
            <?php
        }
        $article1->closeCursor();
    ?>

    <!-- right act -->
    <?php
        $article1=Tarticles::getArticleById(10);
        while ($ar1=$article1->fetch()){
            $titre1=$ar1[1];
            $contenu1=$ar1[2];
            $image1=$ar1[3];
        ?>
            <section  class=" activities container">
            <div  class="row">
                <div class=" col-12 col-md-8">
                    <div class="title my-5 col-12">
                        <h3 class="number"  >10</h3>
                        <h4>
                            —Activité
                        </h4>
                        <h2><?=$titre1?></h2>
                    </div>
                    <div class=" par my-5 col-12">
                        <p><?=$contenu1?></p>
                    </div>
                </div>
                <div class="col-12 col-md-4 upw">
                    <img   class="ac-img" src="<?=$image1?>" alt="<?=$titre1?>">
                </div>
                
                <div class="col-12 mobile-par">
                    <p><?=$contenu1?></p>
                </div>
            </div>
        </section> 
            <?php
        }
        $article1->closeCursor();
    ?>

        <i class="c-a" style="display: none !importent"></i>
        <i class="fl" style="display: none !importent"></i>
        <i class="fr" style="display: none !importent"></i>
        <i class="underline-A" style="display: none !importent"></i>
        <i class="underline-hover-effect" style="display: none !importent"></i>

   <!-- footer -->
   <footer>
        <div class="container">
            <div class="row c-a-w">
                <div id="c-a" class="col-12 c-a">
                    <span>
                        <h2>
                            Choisissier votre activite
                        </h2>
                        <h4>Reserver maintenent</h4>
                    </span>
                    <a href="../reserver/index.php">
                        <img src="../front-end-tools/icon-next.png" alt="">
                    </a>
                </div>
            </div>
           <b class="row">
               <div class="col-7 col-md-4">
                   <h4>DAWYA NATURE</h4>
                   <p>La nature a sa musique <br> pour qui sait l’écouter…</p>
               </div>
               <div class="col-5 col-md-4">
                   <h4>Liens utiles</h4>
                   <a href="../About-page/index.php">A propos</a> <br>
                   <a href="../boujmil-page/index.php">BOUJMIL</a><br>
                   <a href="../Activity-page/index.php">Activités</a><br>
                   <a href="">Contact</a><br>
               </div>
               <div class="col-12 col-md-4 row">
                    <div class="col-12 col-md-12">
                        <h4>Contact</h4>
                        <p><a href="mailto:ouedkoumdawya@gmail.com">Envoyer un mail</a></p>
                        <p>
                            <a href="tel:+212 6 17 86 24 73">Cliquez Pour Appeler</a>
                        </p>
                    </div>
                   <span class=" row">
                       <h4 class="col-12">Social</h4>
                       <a  href=""><i class="fa-brands fa-facebook-f"></i> Facebook</a>
                       <a  href=""><i class="fa-brands fa-instagram"></i> Instagram</a>
                        <a  href="Dawya- natures-experiences.ma"><i class="fa-light fa-browser"></i> Social webSite</a>
                   </span>
                   
               </div>
               <div class="col-12 text-center pb-3">
                    <hr>
                   <p>© DAWYA NATURE |<a href=""> Mentions juridiques</a></p>
               </div>
            </b>
        </div>
    </footer>

    <!-- blob -->
    <img  class="blob b-r" src="../front-end-tools/BLOBR.png" alt="">
    <img  class="blob b-l-t" src="../front-end-tools/BLOBL.png" alt="">
    <img  class="blob b-l-2" src="../front-end-tools/BLOB.png" alt="">
    <img  class="blob b-l-3" src="../front-end-tools/BLOB.png" alt="">
    <img  class="blob b-l-4" src="../front-end-tools/BLOBL.png" alt="">
    <img  class="blob b-r-2" src="../front-end-tools/BLOB.png" alt="">
    <img  class="blob b-r-3" src="../front-end-tools/BLOB.png" alt="">
    <img  class="blob b-r-4" src="../front-end-tools/BLOB.png" alt="">
    <img  class="blob b-r-5" src="../front-end-tools/BLOB.png" alt="">
    <img  class="blob b-b" src="../front-end-tools/BLOB.png" alt="">
    <div class="b-hide">
        blob
    </div>

        


    
<script src="../front-end-tools/bootstarp/bootstrap.min.js"></script>
<script src="../front-end-tools/script.js"></script>
<script src="../navbar/script.js"></script>
</body>
</html>