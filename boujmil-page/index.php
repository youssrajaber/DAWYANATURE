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
    <!-- navbar -->
    <?php
        include_once '../navbar/navbar.php';
    ?>

    <section  class="container sct1" id="sct1">
        <div class="row py-5 dfbojmil">
            <div class="py-5 col-md-6 col-lg-5 col-sm-12">
                <img id="img1" src="img/mps.png" alt="Maps">
            </div>
            <div class="py-5 col-md-6 col-lg-7 col-sm-12 cls1" >
                <h2 class="underline-A">VILLAGE DE BOUJMIL</h2>
                <img id="imgg" src="img/mps.png" alt="Maps" class="py-5">
                <p id="para">Boujmil est un village perché dans une zone de moyenne
                    montagne de l’arrière pays typique des montagnes Jbela. 
                    A flan de coteau et au pied d’une dorsale calcaire 
                    La zone est constituée de 4 à 5 vallées ancestrales 
                    et totalement préservées.  
                    Ces espaces magnifiques, entretenues par les paysans 
                    locaux avec une vue plongeante sur Tamuda Bay
                    le Barrage Asmir et les montagnes du RIF sont un paradis
                    pour les randonneurs et/ou les curieux de la nature.
                </p>
            </div>
        </div>
    </section>

    <section class="container sct2" id="sct2">
        <div class="cls">
            <h2 class=" underline-hover-effect">ACCES AU SITE DE BOUJMIL</h2>
        </div>
        <div class=" py-5 row kilometre">
            <div class="col-12 py-5 col-md-6 col-lg-7 col-sm-12">
                <ul>
                    <li>Depuis Tanger: 2h20</li>
                    <li>Depuis Tétouan: 50 mn </li>
                    <li>Depuis Cabo Négro: 45 mn </li>
                    <li>Depuis Marina Smir: 37 mn </li>
                    <li>Depuis la Restinga: 30 mn: 12 km dont 6 de piste </li>
                  
                </ul>
            </div>
            <div class="img py-5 col-md-6 col-lg-5 col-sm-12 earth">
                <img src="img/earth.png" alt="mps">
           </div>
        </div>
    </section>
    <section class="container sct4">
        <h2 class="underline-hover-effect">NOTRE POSITION</h2>
        <div class=" row">
            <div class="col-12 maps py-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12950.135694630488!2d-5.436822349202445!3d35.7622588163957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1667636489923!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <section class="container sct3">
        <h2 class="underline-hover-effect">GALLERIE</h2>
        <div class="gallery">
            <div class="hover1">
                <img src="img/1.jpg" alt="img-1">
            </div>
            <div class="v-stretch hover1">
                <img src="img/12.jpg" alt="img-2">
            </div>
            <div class="h-stretch hover1">
                <img src="img/13.jpg" alt="img-3">
            </div>
            <div class="hover1">
                <img src="img/14.jpg" alt="img-4">
            </div>
            <div class="hover1">
                <img src="img/15.jpg" alt="img-5">
            </div>
            <div  class="v-stretch hover1">
                <img src="img/18.jpg" alt="img-6">
            </div>
            <div class="hover1">
                <img src="img/20.jpg" alt="img-6">
            </div>
            <div class="hover1">
                <img src="img/19.jpg" alt="img-6">
            </div>
            <div class="hover1">
                <img src="img/17.jpg" alt="img-6">
            </div>
        </div>
    </section>
     
    <i class="c-a" style="display: none !importent"></i>
    <i class="fl" style="display: none !importent"></i>
    <i class="fr" style="display: none !importent"></i>
    <i class="underline-A" style="display: none !importent"></i>
    <i class="underline-hover-effect" style="display: none !importent"></i>

    <!-- footer -->
    <footer data-scroll-section data-scroll  class="mb-0 mt-5">
        <div class="container">
           <div class="row pt-5">
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
                    <div class="col-12 col-md-12">
                        <h4>Contact</h4>
                        <p><a href="mailto:ouedkoumdawya@gmail.com">Envoyer un mail</a></p>
                        <p><a href="tel:+212 6 17 86 24 73">Cliquez pour appeler</a></p>
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