<html>
<head>
        <meta http-equiv="Content-Type"
              content="text/html; charset=utf-8">
        <meta name="description"
              content="Kitűző gyártás.Elkészítjük az Ön tetszőleges méretű és formájú, fajtájú, műgyanta, és egyéb bevonatú kitűzőjét. Fémmel ill. Fém nélkül">
        <meta name="keywords"
              content="kulcstartók,kulcstartó,3 dimenziós műgyantabevonatú matricák,cd-s képeslapok,kitűző,kitűzők,Tubuskinyomó,Tubuskinyomók,tubusprés,tubusprések,Matrica,műgyanta,műgyantás,gyártás,gyártása,3D betűk,3D,3 dimenziós,domború matrica,zselé,zselés,">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="1 Week">
        <meta name="author" content="CDK city card">
        <meta name="copyright" content="CDK city card">
        <meta name="distribution" content="global">
        <meta name="language" content="HU">
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
        <meta name="rating" content="general">
        <meta name="generator" content="fabio.hu">
        <link href="res/style.css" rel="stylesheet" type="text/css"/>
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
        <link rel="stylesheet" href="PlatinumMenubar/menuStyles.css" type="text/css">
        <link rel="stylesheet" href="./css_opt/default.css" type="text/css">
        <link rel="stylesheet" href="./css_opt/component.css" type="text/css">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="script.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <title>:: CDK city card ::</title>
                <?php
                    $_GET['resPath'] = '/gallery/resources';
                    include_once ('./res/bootstrap.php');
                    $styleRel = new galleryStyle();
                    $styleRel->weaveStylesheet();
                    $scriptSrc = new galleryScript();
                    $scriptSrc->weaveJs();
                    $scriptCall = new galleryScript();
                    $scriptCall->jQueryHeaderCall();
                    $bootstrapDone = TRUE;
                ?>
</head>
    <body>
<?php
    $Init = new initGallery();
         $Init->Init();
    $paramsSet = new paginationParams();
        $paramsSet->pageParamsSet();
    $initDebug = new initGallery();
        $initDebug->debugProcess();

            if($bootstrapDone == TRUE){
               nestedCallDivPrint("bootstrap OK","i");
            }
?>


    </body>
</html>
<?php

/**
 * Created by PhpStorm.
 * User: adam
 * Date: 2015.11.28.
 * Time: 21:51
 */// kulcstartok.php fájlnév
// CDK.hu projektnév
// 2015.11.28. dátum
?>