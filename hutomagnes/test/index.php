<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Language" content="hu">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <? include_once('/var/www/home/ws/cdk/public_html/new/res/config.php');?>

        <!-- animsition.css -->
    <link rel="stylesheet" href="<?=_tempPrefix?>/css_opt/animsition.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- animsition.js -->
    <script src="<?=_tempPrefix?>/js/animsition.min.js"></script>


    <title>Hűtőmágneseink</title>
<link rel="stylesheet" href="<?=_tempPrefix?>/res/unlisted_site.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

<?
    $citiesArray = array(
        0  => "Aggtelek",
        1  => "Baja",
        2  => "Békéscsaba",
        3  => "Bogács",
        4  => "Budapest",
        5  => "Bp . Szécheny fürdõ",
        6  => "Bugac",
        7  => "Bükfürdõ",
        8  => "Bükkszék",
        9  => "Cserkeszõlõ",
        10 => "Debrecen",
        11 => "Diósgyõr",
        12 => "Eger",
        13 => "Esztergom",
        14 => "Fertõ tó",
        15 => "Fertõd",
        16 => "Gödöllõ",
        17 => "Gyöngyös",
        18 => "Gyopárosfürdõ",
        19 => "Gyõr",
        20 => "Gyula",
        21 => "Hajdúszoboszló",
        22 => "Harkány",
        23 => "Hévíz",
        24 => "Hollókõ",
        25 => "Hortobágy",
        26 => "Jósvafõ",
        27 => "Kaposvár",
        28 => "Kecskemét",
        29 => "Kékestetõ",
        30 => "Keszthely",
        31 => "Komárom",
        32 => "Kõszeg",
        33 => "Mátraderecske",
        34 => "Mezõkövesd",
        35 => "Miskolc",
        36 => "Miskolctapolca",
        37 => "Mohács",
        38 => "Ópusztaszer",
        39 => "Operaház",
        40 => "Kerekegyháza",
        41 => "Nyíregyháza",
        42 => "Parádfürdõ",
        43 => "Parádsasvár",
        44 => "Pécs",
        45 => "Salgótarján",
        46 => "Sárospatak",
        47 => "Sárvár",
        48 => "Sástó",
        49 => "Sátoraljaújhely",
        50 => "Siklós",
        51 => "Siófok",
        52 => "Sopron",
        53 => "Sümeg",
        54 => "Szécsény",
        55 => "Szeged",
        56 => "Székesfehérvár",
        57 => "Szekszárd",
        58 => "Szentenre",
        59 => "Szilvásvárad",
        60 => "Szolnok",
        61 => "Szombathely",
        62 => "Tata",
        63 => "Tihany",
        64 => "Tiszaújváros",
        65 => "Tokaj",
        66 => "Visegrád",
        67 => "Zalaegerszeg",
        68 => "Zalakaros"
    );
    $animalsArray = array(
        0 => "Háziállatok",
        1 => "Vadállatok",
        2 => "Cicák",
        3 => "Kutyák",
        4 => "Lovak"
    );
    $othersArray = array(
        0 => "Föld",
        1 => "Házi áldás",
        2 => "Jézus",
        3 => "Karácsony",
        4 => "Lázár lovaspark",
        5 => "Magyarország",
        6 => "Mátra"
    );

    $dataId_city = null;

        $n = sizeof($citiesArray);
    $latinFindArray = array(
        "á",
        "é",
        "í",
        "ó",
        "ú",
        "ö",
        "õ",
        "ü",
        "ű"
    );
    $latinReplaceArray = array(
        "a",
        "e",
        "i",
        "o",
        "u",
        "o",
        "o",
        "u",
        "u"
    );
    ?>

<style type="text/css">

   /* Removed inline styles in order to have simplified code */

</style>
    <script type="application/javascript">
        $(document).ready(function () {
            $(".animsition").animsition({
                inClass: 'fade-in-left-sm',
                outClass: 'fade-out-left-sm',
                inDuration: 1500,
                outDuration: 800,
                linkElement: '.animsition-link',
                // e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
                loading: true,
                loadingParentElement: 'body', //animsition wrapper element
                loadingClass: 'animsition-loading',
                loadingInner: '', // e.g '<img src="loading.svg" />'
                timeout: false,
                timeoutCountdown: 5000,
                onLoadEvent: true,
                browser: ['animation-duration', '-webkit-animation-duration'],
                // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
                // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
                overlay: false,
                overlayClass: 'animsition-overlay-slide',
                overlayParentElement: 'body',
                transition: function (url) {
                    window.location.href = url;
                }
            });
        });
    </script>
</head>

<body>

<div class="wrapper animsition">
	<div class="container">
		<h1>Hűtőmágneseink</h1>
		<ul class="grid-nav">
			<li><a href="#" data-id="two-columns" class="animsition-link active">Helységek</a></li> <!-- 2col -->
			<li><a href="#" data-id="one-col-1" class="animsition-link">Állatok</a></li> <!-- 1col -->
			<li><a href="#" data-id="one-col-2" class="animsition-link">Egyéb</a></li>  <!-- 1col -->
		</ul>
    <hr/>

        <!--------------------------------Link generator for cities -------------------------------------------->
        <div id="two-columns" class="grid-container" style="display:block;">
            <ul class="rig columns-2">
                <? for ( $i = 0; $i < count( $citiesArray ); $i ++ ) {
                    echo '<li>';
                    echo '<a class="isMenuItem" href = "#" data-id="'.str_replace($latinFindArray,$latinReplaceArray,strtolower($citiesArray[$i])).'">';
                    echo( $citiesArray[ $i ] );
                    echo <<<EOT
                         </a>
                    </li >
EOT;
                }
                ?>
            </ul>
        </div>
		<!--/#two-columns-->
        <!--------------------------------Link generator for animals -------------------------------------------->

		<div id="one-col-1" class="grid-container">
            <ul class="rig columns-3">
                <? for ( $i = 0; $i < count( $animalsArray ); $i ++ ) {
                    echo '<li>';
                    echo '<a class="isMenuItem" href = "#" data-id="'.str_replace($latinFindArray,$latinReplaceArray,strtolower($animalsArray[$i])).'">';
                    echo( $animalsArray[ $i ] );
                    echo <<<EOT
                         </a>
                    </li >
EOT;
                }
                ?>
            </ul>
        </div>
		<!--/#one-col-1-->
        <!--------------------------------Link generator for others -------------------------------------------->

		<div id="one-col-2" class="grid-container">
			<ul class="rig columns-4">
                <? for ( $i = 0; $i < count( $othersArray ); $i ++ ) {
                    echo '<li>';
                    echo '<a class="isMenuItem" href = "#" data-id="'.str_replace($latinFindArray,$latinReplaceArray,strtolower($othersArray[$i])).'">';
                    echo( $othersArray[ $i ] );
                    echo <<<EOT
                         </a>
                    </li >
EOT;
                }
                ?>
            </ul>
		</div>
		<!--/#one-col-2-->
        <?

            /*----------------------------- imageGrid generator for cities ---------------------------------------- */

            for ( $i = 0; $i < count( $citiesArray ); $i ++ ) {
                echo '<div class="grid-container" id="' .str_replace($latinFindArray,$latinReplaceArray,strtolower( $citiesArray[ $i ] )) . '">';
                echo <<<EOT
             <ul class="rig columns" >
                <li>
EOT;
                echo '<img src = "'._tempPrefix.'/hutomagnes/varosok/' .str_replace($latinFindArray,$latinReplaceArray,strtolower($citiesArray[$i])). '_sorszamok.jpg" />';
                echo '<h3 >' . $citiesArray[ $i ] . '</h3>';
                echo <<<EOT
                <p> alc�m</p>
                </li>
            </ul>
        </div>
EOT;
            }
            /*----------------------------- imageGrid generator for animals ---------------------------------------- */


            for ( $i = 0; $i < count( $animalsArray ); $i ++ ) {
                echo '<div class="grid-container" id="' .str_replace($latinFindArray,$latinReplaceArray,strtolower( $animalsArray[ $i ] )) . '">';
                echo <<<EOT
             <ul class="rig columns" >
                <li>
EOT;
                echo '<img src = "'._tempPrefix.'/hutomagnes/allatok/' .str_replace($latinFindArray,$latinReplaceArray,strtolower($animalsArray[$i])). '_sorszamok.jpg" />';
                echo '<h3 >' . $animalsArray[ $i ] . '</h3>';
                echo <<<EOT
                <p> alc�m</p>
                </li>
            </ul>
        </div>
EOT;

            }

            /*----------------------------- imageGrid generator for others ---------------------------------------- */

            for ( $i = 0; $i < count( $othersArray ); $i ++ ) {
                echo '<div class="grid-container" id="' . str_replace( $latinFindArray, $latinReplaceArray, strtolower( $othersArray[ $i ] ) ) . '">';
                echo <<<EOT
             <ul class="rig columns" >
                <li>
EOT;
                echo '<img src = "'._tempPrefix.'/hutomagnes/egyeb/' . str_replace( $latinFindArray, $latinReplaceArray, strtolower( $othersArray[ $i ] ) ) . '_sorszamok.jpg" />';
                echo '<h3 >' . $othersArray[ $i ] . '</h3>';
                echo <<<EOT
                <p> alc�m</p>
                </li>
            </ul>
        </div>
EOT;
            }
        ?>



		<hr />

		<p class="centered">Copyright CDK.hu</p>
	</div>
	<!--/.container-->
</div>
<!--/.wrapper-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.grid-nav li a').on('click', function(event){
		event.preventDefault();
		$('.grid-container').fadeOut(500, function(){
			$('#' + gridID).fadeIn(500);
		});
		var gridID = $(this).attr("data-id");

		$('.grid-nav li a').removeClass("active");
		$(this).addClass("active");
	});
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.isMenuItem').on('click', function(event){
            event.preventDefault();
            $('.grid-container').fadeOut(500, function(){
                $('#' + gridID).fadeIn(500);
            });
            var gridID = $(this).attr("data-id");


        });
    });
</script>
</body>
</html>