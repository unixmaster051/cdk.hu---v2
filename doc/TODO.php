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
     * TODO: background: linear-gradient(rgba(252, 162, 5, 0.9) 0%, #F27C32 100%);
     * TODO: főoldal több kulcstartós halom háttérnek , opacity -vel halványítás
     *       a banner nem jó már, a cd helyett valami más kell (kép csere)
     *       új vektoros cdk logó használata (SVG)
     *       új képekkel munka
     *       képek rendezése, mappaszerkezet - refactor: images->img, img/menunev
     * TODO: .about @main.css:498 -- > többi property hozzáigazítása a backgnd image színeihez (moz, webkit, o, lingrad)
     * TODO: oldal egyes részeinek készre generálása (szempont: responsive!)
     * TODO: @media querykkel méretezni a galéria div-et
     *       színek (szar zöld) cseréje a terrakotta színek valamelyikére -WEBKIT, O-, IE-RE IS !
     *
     *       smartmenu nem szükséges - összes referencia törlése
     *       featured on div-be ->> almenük, alatt lévő divbe td-> products grid, w/hoverEnlarge CSS3, object->juiceboxGalleryWrapper
     *       galéria div -> responsive
     * TODO: scrollTop jQuery function sectionok közti görgetésre való kiterjesztése
     * TODO: refactor --> html class-ek, id-k
     *        kép prefix : szám + kulcstartó 8miféle)
     *   TODO: felesleges html-kód takarítása
     *  TODO: a más arányú i.e nem négyzetes képeket ne nyomja össze az imageGrid-ben
     * KÉSZEN VAN:
     * -----------------------
     *       div.social.pull-right ikonjainak lecserélése az arculatnak megfelelő színűre
     *       responsive-vá tenni (nagyrészt ok, nope.hu/CDK/test/)
     *       több képes hover.es megoldás (stackoverflow-on) - megvan, css3-al
     *       Szélesebb contentdiv, menu - check
     *       nem kell tubuskinyomós és cd képeslapos menüpont (kuka) - check
     *       teljes szélességre ugorjon az oldal - check
     *       termékes oldal (bootstrap-es) meta tag-jeinek, egész head-jének cseréje a főoldaléval - check (még egy ellenőrzés majd)
     *       új menubar (dropdown) generálása (majd a régi főoldal részére is, platinum menubar ---> a rejtett aloldalra)
     *       konstansoknak külön file bevezetése (config.php) néven top levelként, require-el!
     *       régi oldal teljes mellőzése
     *       logo - href--> home page
     *       hűtőmágneses rejtett oldal -> jQuery pluginnal effektezés az ütős kinézet érdekében
     *       saját tdGen függvény (php) helyett valami plugin v. hasonló keresése táblázat generálására
     *       juicebox gallery Helyett dinamikus galéria keresése, amit  nem kell újragenerálni
     *       ajax, ahol lehet, hogy ne töltse újra az egész oldalt
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
     * TODO: nem használt referenciák törlése -> js frameworks, includes, images, stylesheets
     * TODO: CODE CLEANUP - nem használt kódok, scriptek, function-ok törlése, kód egyszerűsítése, kommentelt részek átnézése/törlés ahol lehet
     * TODO: maradék tag-ek, propertyk, attrib-ok refactorozása
     * TODO: mergeCSS.php @ /res/  include error javítása
     * TODO: null the _tempPrefix everywhere!
     *
     * ____________________________
     * MELLÉKES:
     * ----------------------
     *       facebook share, g+, twitter - note: nem kell
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