<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <?
        define(_DEBUG,TRUE);
//        include_once($_SERVER['DOCUMENT-ROOT'].'/CDK/res/debugIncl.php');
        include_once('./debugIncl.php');
    ?>
</head>
<body>
<?php
    /* FONTOS:
    * ------------------------------ */
    /*
     TODO: background: linear-gradient(rgba(252, 162, 5, 0.9) 0%, #F27C32 100%);
    * TODO: főoldal több kulcstartós halom háttérnek , opacity -vel halványítás
     * TODO: a banner nem jó már, a cd helyett valami más kell (kép csere)
     * TODO: új vektoros cdk logó használata (SVG)
     * TODO: új képekkel munka
     * TODO: képek rendezése, mappaszerkezet - refactor: images->img, img/menunev
     * TODO: .app_features @main.css:498 -- > többi property hozzáigazítása a backgnd image színeihez (moz, webkit, o, lingrad)
     * TODO: oldal egyes részeinek készre generálása (szempont: responsive!)
     * TODO: @media querykkel méretezni a galéria div-et
     * TODO: színek (szar zöld) cseréje a terrakotta színek valamelyikére -WEBKIT, O-, IE-RE IS !
     * TODO: mergeCSS.php @ /res/  include error javítása
     * TODO: smartmenu nem szükséges - összes referencia törlése
     * TODO: featured on div-be ->> almenük, alatt lévő divbe td-> products grid, w/hoverEnlarge CSS3, object->juiceboxGalleryWrapper
     * TODO: galéria div -> responsive
     * TODO: scrollTop jQuery function sectionok közti görgetésre való kiterjesztése
     * TODO: refactor --> html class-ek, id-k
      TODO: kép prefix : szám + kulcstartó 8miféle)
     *
     * KÉSZEN VAN:
     * -----------------------
     *  TODO: div.social.pull-right ikonjainak lecserélése az arculatnak megfelelő színűre
     *  TODO: responsive-vá tenni (nagyrészt ok, nope.hu/CDK/test/)
     *  TODO: több képes hover.es megoldás (stackoverflow-on) - megvan, css3-al
     *  TODO: Szélesebb contentdiv, menu - check
     *  TODO: nem kell tubuskinyomós és cd képeslapos menüpont (kuka) - check
     *  TODO: teljes szélességre ugorjon az oldal - check
     *  TODO: termékes oldal (bootstrap-es) meta tag-jeinek, egész head-jének cseréje a főoldaléval - check (még egy ellenőrzés majd)
     *  TODO: új menubar (dropdown) generálása (majd a régi főoldal részére is, platinum menubar ---> a rejtett aloldalra)
     *  TODO: konstansoknak külön file bevezetése (config.php) néven top levelként, require-el!
     *  TODO: régi oldal teljes mellőzése
     *  TODO: logo - href--> home page
     *  TODO: hűtőmágneses rejtett oldal -> jQuery pluginnal effektezés az ütős kinézet érdekében
     *  TODO: saját tdGen függvény (php) helyett valami plugin v. hasonló keresése táblázat generálására
     *  TODO: juicebox gallery Helyett dinamikus galéria keresése, amit  nem kell újragenerálni
     *  TODO: ajax, ahol lehet, hogy ne töltse újra az egész oldalt
     *
     *  
     *
     *
     *
     *
     *
     *
     *______________________________
     *
     * ....:::: PRODUCTION!!! ::::....
     * ---------------------------------
     * TODO: -refactor: no.pe.hu/*   --> cdk.hu/* , /test/*  ->>> root_dir/*
     *
     *
     *
     * ____________________________
     * MELLÉKES:
     * ----------------------
     * TODO: facebook share, g+, twitter
     */

    nestedCallDivPrint("you shouldn't have open it, you bastard..",'i');


?>
</body>
</html>
<? /**
 * Created by PhpStorm.
 * User: adam
 * Date: 2016.03.13.
 * Time: 19:10
 */// fájlnév: TODO.php 
// projektnév: CDK.hu- v2 
// dátum: 2016.03.13. ?>