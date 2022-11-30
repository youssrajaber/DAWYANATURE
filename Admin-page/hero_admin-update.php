<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../front-end-tools/bootstarp/bootstrap.min.css">
    <link rel="stylesheet" href="s.css">
</head>
<body>


<?php
include_once '../Model/Tarticles.php';
?>

<?php
     $id=$_GET['id'];
    // activities
    $article=hero::gethero($id);

    while ($ar=$article->fetch())
    {
    $id=$ar[0];
    $titre=$ar[1];
    $contenu=$ar[2];
    $himage=$ar[3];
    $image2=$ar[4];

    ?>
    <form action="../traitement/articles_admin_update2.php" enctype="multipart/form-data" method="POST">
    <input type="hidden"   name="idd"   value="<?=$id?>">
    <input type="hidden"   name="oldhimage"   value="<?=$himage?>">
    <input type="hidden"   name="oldimage2"   value="<?=$image2?>">
    <section class="container pt-5">
        <div class="row ">

            <div class="col-md-6">
                <div class="c">
                    <h2>Content</h2>
                    <textarea name="contenu" class="textarea1 col-12"><?=$contenu?></textarea>
                </div>
            </div>
            <div class="col-12  col-md-6 c">
                <div class="row">
                    <div class="col-6">
                        <h2>Image : </h2>
                        <img src="<?=$himage?>" style="width:100%"/>
                        <input class="form-control mt-2" type="file" name="himage"/>
                    </div>
                    <div class="col-6">
                        <h2>Image : </h2>
                        <img src="<?=$image2?>" style="width:100%"/>
                        <input class="form-control mt-2" type="file" name="image2"/>
                    </div>
                    <div class="py-4 col-12 c mt-3">
                        <h2>Titre : </h2><textarea name="titre" class="textarea2 col-12"><?=$titre?></textarea>
                    </div>
                </div>
            </div>
            

            

            

            <div class="col-12 row py-2">
                <div class="col col-sm-2">
                <input class="bnt btn-primary form-control" type="submit" value="Modifier" name="upd2"/>
                </div>
                <div class="col col-sm-2">
                    <a class="btn btn-dark form-control" href="articles_admin.php">Retour</a>
                </div>
            </div>
        </div>
    </section>

    
    <?php

    }
    ?>
<script src="../front-end-tools/bootstarp/bootstrap.min.js"></script>
</body>
</html>

<?php







