<?php
    //include_once ($_SERVER[ 'DOCUMENT_ROOT' ] . "/CDK/res/debugIncl.php");

    class initGallery
    {

        // var $debug;

        public function Init ()
        {
            $debug = array(
                "stylesheet"         => 0,
                "colorboxStylesheet" => 0,
                "javaScriptHeader"   => 0,
                "jQueryHeaderCall"   => 0
            );
            include_once ('gallery/resources/UberGallery.php');
            $gallery = UberGallery::init ()->createGallery ('./images/' . $_GET[ 'imgPath' ]);
        }


        public function debugProcess ()
        {
            global $debug;
            if ( _DEBUG == true ) {
//                include ($_SERVER['DOCUMENT_ROOT']."/CDK/res/debugDivRender.php");
//                nestedCallDivPrint (print_r ($debug), "i");
                $iswe = "info";
               echo "<div class='". $iswe ."'>" . print_r($debug,1) . "</div>";

            }
        }

    }

    class paginationParams
    {
        var $nav;


        public function pageParamsSet ()
        {
            global $nav;
            $nav = $_GET[ 'imgPath' ];

            return $nav;
        }
    }

    class galleryStyle extends initGallery
    {
        var $cssPath;
        var $resPath;


        public function weaveStylesheet ()
        {
            global $debug;
            //$cssPath =  $_GET['stylePath'];
            //$resPath = $_GET['resPath'];
            $resPath = './gallery/resources';
            echo ('
              <link rel="stylesheet" type="text/css" href="' . $resPath . '/UberGallery.css" />');
            $debug[ "stylesheet" ] = "OK";
            echo ('
              <link rel="stylesheet" type="text/css" href="' . $resPath . '/colorbox/3/colorbox.css" />');
            $debug[ "colorboxStylesheet" ] = "OK";
            echo ('<link rel="stylesheet" type="text/css" href="' . $resPath . '/themes/uber-responsive/style.css" />');
        }

    }

    class galleryScript extends galleryStyle
    {
        var $resPath;


        public function weaveJs ()
        {
            //$resPath = $_GET['resPath'];
            $resPath = './gallery/resources';
            global $debug;
            echo ('
                <script type="text/javascript" src="://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="' . $resPath . '/colorbox/jquery.colorbox.js"></script>

                 ');
            $debug[ "javaScriptHeader" ] = "OK";

        }


        public function jQueryHeaderCall ()
        {
            global $debug;
            echo <<<EOT
            <script type="text/javascript">
                     $(document).ready(function(){
                     $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
                    });
            </script>
EOT;
            $debug[ "jQueryHeaderCall" ] = "OK";


        }
    }

    /**
     * Created by PhpStorm.
     * User: adam
     * Date: 2015.11.28.
     * Time: 22:44
     */// bootstrap.php fájlnév
// CDK.hu projektnév
// 2015.11.28. dátum
?>