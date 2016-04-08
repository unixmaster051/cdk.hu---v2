<?php

    //konstansok beállítása

//    define('_DOCROOT',$_SERVER['DOCUMENT-ROOT']."/new");
    define('_DOCROOT', '/var/www/home/ws/cdk/public_html');
    define('_tempPrefix','/new');
    define('_PDIR',dirname(__FILE__));

    //munkakönyvtárak meghatározása, ideiglenes tesztkönyvtár prefixummal

    define('_res',_DOCROOT._tempPrefix."/res");
    define('_data',_DOCROOT._tempPrefix."/data");
    define('_ext',_DOCROOT._tempPrefix."/ext_lib");
    define('_fonts',_DOCROOT._tempPrefix."/fonts");
    define('_unlisted',_DOCROOT._tempPrefix."/unlisted");
    define('_mainjs',_DOCROOT._tempPrefix."/js");
    define('_old',_DOCROOT._tempPrefix."/old_html");
    define('_productres',_tempPrefix._DOCROOT."/res/products");
    define('_GRID',_DOCROOT._tempPrefix."/res/products/grid");
    define('_js',_DOCROOT._tempPrefix."/js");
    define('_img',_DOCROOT._tempPrefix."/images");
/*
    //munkakönyvtárak meghatározása, ideiglenes tesztkönyvtár prefixum nélkül - PRODUCTION BUILD


    define('_res',_DOCROOT."/res");
    define('_data',_DOCROOT."/data");
    define('_ext',_DOCROOT."/ext_lib");
    define('_fonts',_DOCROOT."/fonts");
    define('_unlisted',_DOCROOT."/unlisted");
    define('_mainjs',_DOCROOT."/js");
    define('_old',_DOCROOT."/old_html");
    define('_productres',_DOCROOT."/res/products");
    define('_GRID',_DOCROOT."/res/products/grid");
    define('_js',_DOCROOT."/js");
    define('_img',_DOCROOT."/images");
*/





    /**
 * Created by PhpStorm.
 * User: Rendszergazda
 * Date: 2016.03.19.
 * Time: 18:50
 */
?>