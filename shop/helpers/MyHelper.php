<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 25.01.2018
 * Time: 8:47
 */

namespace shop\helpers;

class MyHelper
{
    public static function myPrint($object, int $exit = 1) : void
    {
        echo "<pre>";
        print_r($object);
        echo "</pre>";

        if ($exit)
            exit();
    }

}