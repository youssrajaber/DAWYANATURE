<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../front-end-tools/bootstarp/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include_once '../Model/Tcaroussel.php';
include_once '../Model/Tarticles.php';
?>
<section class="container_fluid">
    <form action="">
        <div class="links">
            <input class="btn btn-dark l" name="act" type="submit" value="accueille">
            <input class="btn btn-dark l" name="act" type="submit" value="A propos">
            <input class="btn btn-dark l" name="act" type="submit" value="Boujmil">
            <input class="btn btn-dark l" name="act" type="submit" value="Activités">
            <input class="btn btn-dark l" name="act" type="submit" value="C. juridique">
        </div>
    </form>
    <div class="table-c">
        <!-- <h3>Choisissez le page</h3> -->

<?php 
if(isset($_GET['act'])){
    $page= $_GET['act'];
    if($page=='Activités'){
    ?>
        <table class="table mt-5 mx-1 table-striped table-bordered">
            <tr>
                <th colspan="5">
                    <h1 >Hero section:</h1>
                </th>
            </tr>
            <tr class="table-dark">
                <th><h2>Titre</h2></th>
                <th><h2>content</h2></th>
                <th><h2>1er-image</h2></th>
                <th><h2>2eme-image</h2></th>
                <th><h2>action</h2></th>
            </tr>
            
            <?php
            $h=Hero::getHero('Hero');
            while($article=$h->fetch()){
                echo  "<tr>";
                echo "<td class='col-1'>$article[1]</td>";
                echo "<td class='col-2'>$article[2]</td>";
                echo "<td  class='col-1 text-center'><img src='$article[3]'  width='100'   height='100'    /></td>";
                echo "<td  class='col-1 text-center'><img src='$article[4]'  width='100'   height='100'    /></td>";


                echo "<td class='col-1 text-center'><a class='btn btn-dark' href='hero_admin-update.php?id=$article[0]'>Mise à jour</a></td>";

                echo  "</tr>";
            }

            $h->closeCursor();
            ?>
        </table>
    <?php
            }
    ?>
    <?php
        if($page=='A propos'){
        ?>
            <table class="table mt-5 mx-1 table-striped table-bordered">
                <tr>
                    <th colspan="5">
                        <h1 >LES BROCHURES:</h1>
                    </th>
                </tr>
                <tr class="table-dark">
                    <th><h2>1er-image</h2></th>
                    <th><h2>2eme-image</h2></th>
                    <th><h2>action</h2></th>
                </tr>
                
                <?php
                $ll=Hero::getHero('fl');
                while($article=$ll->fetch()){
                    echo  "<tr>";
                    echo "<td  class='col-1 text-center'><img src='$article[3]'  width='100'   height='100'    /></td>";
                    echo "<td  class='col-1 text-center'><img src='$article[4]'  width='100'   height='100'    /></td>";
                    echo "<td class='col-1 text-center'><a class='btn btn-dark' href='hero_admin-update.php?id=$article[0]'>Mise à jour</a></td>";
                    echo  "</tr>";
                }
                $ll->closeCursor();
            ?>
            </table>
            <?php
                }
            ?>
        <table class="table mt-5 mx-1 table-striped table-bordered">
            <tr>
                <th colspan="5">
                    <h1 >Liste des activités:</h1>
                </th>
            </tr>
            <tr class="table-dark">
                <th><h2>Titre</h2></th>
                <th><h2>content</h2></th>
                <th><h2>image</h2></th>
                <th><h2>action</h2></th>
            </tr>
            
            <?php
            $articles=Tarticles::getAllarticles($page);
            while($article=$articles->fetch()){
                echo  "<tr>";
                echo "<td class='col-1'>$article[1]</td>";
                echo "<td class='col-5'>$article[2]</td>";
                echo "<td  class='col-1 text-center'><img src='$article[3]'  width='100'   height='100'    /></td>";
                echo "<td class='col-1 text-center'><a class='btn btn-dark' href='articles_admin_update.php?id=$article[0]'>Mise à jour</a></td>";

                echo  "</tr>";
            }

            $articles->closeCursor();
            ?>
        </table>
        </div>
    </section>
    <?php
    }
?>

<script src="../front-end-tools/bootstarp/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>


<?php
