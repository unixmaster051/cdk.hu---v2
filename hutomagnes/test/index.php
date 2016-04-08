<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Language" content="hu">
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
    <? include_once("/home/u871523770/public_html/CDK/res/config.php");?>

        <!-- animsition.css -->
    <link rel="stylesheet" href="<?=dirname(__FILE__)?> "CDK/css_opt/animsition.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- animsition.js -->
    <script src="/CDK/js/animsition.min.js"></script>


    <title>H�t�m�gneseink</title>
<link rel="stylesheet" href="/CDK/res/unlisted_site.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

<?
        $citiesArray = array(
            0  => "Aggtelek",
            1  => "Baja",
            2  => "B�k�scsaba",
            3  => "Bog�cs",
            4  => "Budapest",
            5  => "Bp . Sz�cheny f�rd�",
            6  => "Bugac",
            7  => "B�kf�rd�",
            8  => "B�kksz�k",
            9  => "Cserkesz�l�",
            10 => "Debrecen",
            11 => "Di�sgy�r",
            12 => "Eger",
            13 => "Esztergom",
            14 => "Fert� t�",
            15 => "Fert�d",
            16 => "G�d�ll�",
            17 => "Gy�ngy�s",
            18 => "Gyop�rosf�rd�",
            19 => "Gy�r",
            20 => "Gyula",
            21 => "Hajd�szoboszl�",
            22 => "Hark�ny",
            23 => "H�v�z",
            24 => "Holl�k�",
            25 => "Hortob�gy",
            26 => "J�svaf�",
            27 => "Kaposv�r",
            28 => "Kecskem�t",
            29 => "K�kestet�",
            30 => "Keszthely",
            31 => "Kom�rom",
            32 => "K�szeg",
            33 => "M�traderecske",
            34 => "Mez�k�vesd",
            35 => "Miskolc",
            36 => "Miskolctapolca",
            37 => "Moh�cs",
            38 => "�pusztaszer",
            39 => "Operah�z",
            40 => "Kerekegyh�za",
            41 => "Ny�regyh�za",
            42 => "Par�df�rd�",
            43 => "Par�dsasv�r",
            44 => "P�cs",
            45 => "Salg�tarj�n",
            46 => "S�rospatak",
            47 => "S�rv�r",
            48 => "S�st�",
            49 => "S�toralja�jhely",
            50 => "Sikl�s",
            51 => "Si�fok",
            52 => "Sopron",
            53 => "S�meg",
            54 => "Sz�cs�ny",
            55 => "Szeged",
            56 => "Sz�kesfeh�rv�r",
            57 => "Szeksz�rd",
            58 => "Szentenre",
            59 => "Szilv�sv�rad",
            60 => "Szolnok",
            61 => "Szombathely",
            62 => "Tata",
            63 => "Tihany",
            64 => "Tisza�jv�ros",
            65 => "Tokaj",
            66 => "Visegr�d",
            67 => "Zalaegerszeg",
            68 => "Zalakaros"
        );
        $animalsArray = array(
            0 => "H�zi�llatok",
            1 => "Vad�llatok",
            2 => "Cic�k",
            3 => "Kuty�k",
            4 => "Lovak"
        );
        $othersArray = array(
            0 => "F�ld",
            1 => "H�zi �ld�s",
            2 => "J�zus",
            3 => "Kar�csony",
            4 => "L�z�r lovaspark",
            5 => "Magyarorsz�g",
            6 => "M�tra"
        );

        $dataId_city = null;

        $n = sizeof($citiesArray);
        $latinFindArray = array(
            "�",
            "�",
            "�",
            "�",
            "�",
            "�",
            "�",
            "�",
            "�"
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
		<h1>H�t�m�gneseink</h1>
		<ul class="grid-nav">
			<li><a href="#" data-id="two-columns" class="animsition-link active">Helys�gek</a></li> <!-- 2col -->
			<li><a href="#" data-id="one-col-1" class="animsition-link">�llatok</a></li> <!-- 1col -->
			<li><a href="#" data-id="one-col-2" class="animsition-link">Egy�b</a></li>  <!-- 1col -->
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
                echo '<img src = "/CDK/hutomagnes/varosok/' .str_replace($latinFindArray,$latinReplaceArray,strtolower($citiesArray[$i])). '_sorszamok.jpg" />';
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
                echo '<img src = "/CDK/hutomagnes/allatok/' .str_replace($latinFindArray,$latinReplaceArray,strtolower($animalsArray[$i])). '_sorszamok.jpg" />';
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
                echo '<img src = "/CDK/hutomagnes/egyeb/' . str_replace( $latinFindArray, $latinReplaceArray, strtolower( $othersArray[ $i ] ) ) . '_sorszamok.jpg" />';
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