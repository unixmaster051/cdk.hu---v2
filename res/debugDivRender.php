<?php
    include_once($_SERVER['DOCUMENT_ROOT']."/CDK/ext_lib/debug.php");
    function nestedCallDivPrint($text,$class)
    {
        $info = new main\debug();
        $detail = $info->debugDiv ($text,$class);
        echo ($detail);
    }

    function nestedCallDivSilent($text,$class)
    {
        $info = new main\debug();
        $detail = $info->debugDiv ($text,$class);
        return ($detail);
    }
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 2016.03.12.
 * Time: 19:11
 */// fájlnév: debugDivRender.php 
// projektnév: CDK.hu- v2 
// dátum: 2016.03.12.
//  ?>