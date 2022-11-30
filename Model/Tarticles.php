<?php

include_once 'Dataaccess.php';
class Tarticles
{


    public static function getAllarticles($page)
    {


        $cur=Dataaccess::selection("select * from article where page='$page'");


        return $cur;





    }

    public static function getArticleById($id)
    {


        $cur=Dataaccess::selection("select * from article where id='$id'");


        return $cur;





    }




    public static function updatewithimage($id,$titre,$contenu,$oldimage,$newimage,$temp)
    {


        $nb=Dataaccess::miseajour("update article set titre='$titre',contenu='$contenu',image='$newimage' where id='$id'");


       if($nb!=0)
       {
           unlink($oldimage);
           move_uploaded_file($temp,$newimage);
       }





    }

    public static function updatewithoutimage($id,$titre,$contenu)
    {


        $nb=Dataaccess::miseajour("update article set titre='$titre',contenu='$contenu' where id='$id'");


        return $nb;

    }

}

//hero section
class Hero
{

    public static function getHero($id)
    {


        $cur=Dataaccess::selection("SELECT * FROM `hero` WHERE id='$id'");


        return $cur;





    }




    public static function updatewithheroimage($id,$titre,$contenu,$oldimage,$newimage,$temp)
    {


        $nb=Dataaccess::miseajour("update hero set titre='$titre',contenu='$contenu',image='$newimage'  where id='$id'");


       if($nb!=0)
       {
           unlink($oldimage);
           move_uploaded_file($temp,$newimage);
       }

    }

    public static function updatewithimage2($id,$titre,$contenu,$oldimage,$newimage,$temp)
    {


        $nb=Dataaccess::miseajour("update hero set titre='$titre',contenu='$contenu',image2='$newimage' where id='$id'");


       if($nb!=0)
       {
           unlink($oldimage);
           move_uploaded_file($temp,$newimage);
       }

    }


    public static function updatewithoutimage($id,$titre,$contenu)
    {
        $nb=Dataaccess::miseajour("update hero set titre='$titre',contenu='$contenu' where id='$id'");
        return $nb;
    }

}

// admin
class admin{
    public static function login(){
        $cur=Dataaccess::selection("select * from admin");
        return $cur;
    }
}