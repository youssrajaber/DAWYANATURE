<?php


include_once '../model/Tarticles.php';


if(isset($_POST['upd']))
{


    $id=$_POST['id'];













    // update with image
    if($_FILES['image']['size']!=0)
    {

        $titre=$_POST['titre'];
        $contenu=$_POST['contenu'];
        $oldimage=$_POST['oldimage'];
        $newimage="../images_activity/".$_FILES['image']['name'];
        $temp=$_FILES['image']['tmp_name'];


        Tarticles::updatewithimage($id,$titre,$contenu,$oldimage,$newimage,$temp);

    }

    // update without image
    else{

        $titre=$_POST['titre'];
        $contenu=$_POST['contenu'];
        Tarticles::updatewithoutimage($id,$titre,$contenu);

    }




?>
    <script>
        window.location="../admin-page/articles_admin.php";
    </script>
<?php

}

if(isset($_POST['upd2']))
{
    $id=$_POST['idd'];
    // update with h-image
    if($_FILES['himage']['size']!=0)
    {

        $titre=$_POST['titre'];
        $contenu=$_POST['contenu'];
        $oldimage=$_POST['oldhimage'];
        $newimage="../images_activity/".$_FILES['himage']['name'];
        $temp=$_FILES['himage']['tmp_name'];


        hero::updatewithheroimage($id,$titre,$contenu,$oldimage,$newimage,$temp);

    }

    // update with image-2
    if($_FILES['image2']['size']!=0)
    {

        $titre=$_POST['titre'];
        $contenu=$_POST['contenu'];
        $oldimage=$_POST['oldimage2'];
        $newimage="../images_activity/".$_FILES['image2']['name'];
        $temp=$_FILES['image2']['tmp_name'];


        hero::updatewithimage2($id,$titre,$contenu,$oldimage,$newimage,$temp);

    }

    // update without image
    else{

        $titre=$_POST['titre'];
        $contenu=$_POST['contenu'];
        hero::updatewithoutimage('hero',$titre,$contenu);

    }




?>
    <script>
        window.location="../admin-page/articles_admin.php";
    </script>
<?php

}
