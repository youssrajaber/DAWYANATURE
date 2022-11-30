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

    // activities
    $id=$_GET['id'];
    $article=Tarticles::getArticleById($id);

    while ($ar=$article->fetch())
    {

    $titre=$ar[1];
    $contenu=$ar[2];
    $image=$ar[3];

    ?>
    <form action="../traitement/articles_admin_update2.php" enctype="multipart/form-data" method="POST">
    <input type="hidden"   name="id"   value="<?=$id?>">
    <input type="hidden"   name="oldimage"   value="<?=$image?>">
    <section class="container pt-5">
        <div class="row ">

            <div class="col-md-8">
                <div class="c">
                    <h2>Content</h2>
                    <textarea name="contenu" class="textarea1 col-12"><?=$contenu?></textarea>
                </div>
                <div class="py-4 c mt-3">
                    <h2>Titre : </h2><input type="text"  class="form-control" name="titre"  value="<?=$titre?>">
                </div>
            </div>
            <div class="col-12 col-md-4 c">
                <div>
                    <h2>Image : </h2>
                    <img src="<?=$image?>" class="col-12"/>
                    <input class="form-control mt-2" type="file" name="image"/>
                </div>
            </div>
            

            

            

            <div class="col-12 row py-2">
                <div class="col col-sm-2">
                <input class="bnt btn-primary form-control" type="submit" value="Modifier" name="upd"/>
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







