<?php


class Tcaroussel
{

// add image
    public static function addimages($tmp,$destination)
    {
        //



        move_uploaded_file($tmp,$destination);
    }



  // delete image

    public static function removeimage($name)
    {
        unlink($name);

       
    }



    // get all images :


    public static function getallimages()
    {
        return $images=glob('../images_carrousel/*.{jpg,png,gif}', GLOB_BRACE);
    }


}