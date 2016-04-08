<?php
/**
 * Created by PhpStorm.
 * User: Rendszergazda
 * Date: 2016.01.25.
 * Time: 21:08
 */

namespace inc;


class js {
    public $script = null;

    function jquery($script,$version){
        if($version == "old"){
            $script = ' <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> ';
        }
        else{
            $script = ' <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> ';
        }
        return $script;
    }
}
    ?>