<!DOCTYPE html>
<html lang="en-us">
<head>
	<?
        $rp = realpath(dirname(__FILE__) . '/..');
		if(isset($_GET['debug'])){
			define('_DEBUG',TRUE);
            require_once('./res/debugIncl.php');
			echo <<<EOT
		<!-- Debug messages are ON. -->
EOT;
		}
		else{
            define('_DEBUG', FALSE);
            echo <<<EOT
		<!-- Debug messages are now OFF. -->
EOT;
        } //manual setting
         require_once('/var/www/home/ws/cdk/public_html/new/res/config.php'); //LET'S HARDCODE THIS EVERYWHERE
    ?>
    <title>:: CDK city card ::</title>
	<meta charset="utf-8">
    <meta name="description"
          content="Kitűző gyártás.Elkészítjük az Ön tetszőleges méretű és formájú, fajtájú, műgyanta, és egyéb bevonatú kitűzőjét. Fémmel ill. Fém nélkül">
    <meta name="keywords"
          content="kulcstartók,kulcstartó,3 dimenziós műgyantabevonatú matricák,kitűzők,tubusprés,tubusprések,Matrica,műgyanta,műgyantás,gyártás,gyártása,3D betűk,3D,3 dimenziós,domború matrica,zselé,zselés,">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 Week">
    <meta name="author" content="CDK city card">
    <meta name="copyright" content="CDK city card">
    <meta name="distribution" content="global">
    <meta name="language" content="HU">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta name="rating" content="general">
	<link rel="stylesheet" type="text/css" href="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/products/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/products/css/owl.transitions.css"/>
	<link rel="stylesheet" type="text/css" href="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/products/css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/products/css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/products/css/main.css"/> <!-- this this this! -->
    <link rel="stylesheet" type="text/css" href="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/productsGrid.css"/>
    <?
    if(_DEBUG == true){
        echo '<!-- debug stylesheet is loaded: <link rel="stylesheet" href="'._tempPrefix.'/res/debugDivCust.css" type="text/css"> -->';
    }
    ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/products/css/cust.css"/>


	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/products/js/jquery.js"></script>
	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/products/js/ajaxchimp.js"></script>
	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/products/js/scrollTo.js"></script>
	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/products/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/products/js/wow.js"></script>
	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/products/js/parallax.js"></script>
	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/products/js/nicescroll.js"></script>
	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']._tempPrefix ?>/res/products/js/main.js"></script>
<!--    <script type="text/javascript" src="--><?//= $_SERVER['DOCUMENT-ROOT']."/CDK/js" ?><!--/jquery-2.2.2.js"></script>-->

    <!-- --------------------------------------------SCRIPTEK ------------------------------------------------------>

    <editor-fold desc="JS-s, jQuery scripts">


        <script type="text/javascript">
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        $('.scrollToTop').fadeIn();
                    } else {
                        $('.scrollToTop').fadeOut();
                    }
                });

                //Click event to scroll to top
                $('.scrollToTop').click(function () {
                    $('html, body').animate({scrollTop: 0}, 800);
                    return false;
                });

            });
        </script>
        <script type="application/javascript">
            $(document).ready(function () {
                console.log("document ready - ran @ submenu script - #1");
                $('#sub_open').click(function () {
                    $('#sub_invisible').toggleClass('AfterScroll');
                    $('#sub_invisible').toggleClass('BeforeScroll');
//                alert($(this).attr('id'));
                    console.log('toggleClass  inner-function ran @ submenu script - #2 ');
                });
            });
        </script>
        <script type="application/javascript">
            $(document).ready(function () {
                console.log('document ready - run @ onReadyScrollTop -> now scrolling to top #');
                $('html, body').animate({scrollTop: 0}, 800);

            });
        </script>
        <script type="application/javascript">
            $(document).ready(function () {
                $('#mainPageTop').click(function () {
                    $('html, body').animate({scrollTop: 0}, 800);
                    $('#sub_invisible').toggleClass('AfterScroll');
                    console.log('document ready - ran @ mainPageHrefOnClick -> now scrolling to top - #1');
                });
            });
        </script>
        <script type="application/javascript">
            $(document).ready(function () {
                $('#expandSubMenu').click(function () {
                    $('#sub_invisible').addClass('AfterScroll');
                    console.log('document ready - ran @ expandSubMenuButtonClick -> now showing/hiding submenu #1');
                });
                console.log('Nobody\'s goin\' to watch the dev. console... They will never know how cool I am... :"(  ');
            });
        </script>
        <script type="application/javascript">
            $(document).ready(function () {
                $('#expandSubMenu').click(function () {
                    $('#productWrapper').removeClass('hidden');
                    $('#productWrapper').fadeTo('slow', 1.0);
                    console.log('document ready - ran @ expandSubMenuButtonClick2 -> now showing/hiding submenu #');
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {


                $('.isMenuItem').on('click', function (event) {
                    event.preventDefault();

//                $('#productWrapper').fadeTo('slow',1.0);

                    console.log('document ready - ran @ .isMenuItem button click -> now showing/hiding submenu #1');
                    var $gridID = $(this).attr("data-id");

                    $('#productWrapperDefault').removeClass('active');
                    $('.grid-container').fadeOut(500, function () {
                        $('#' + $gridID).fadeIn(500);
                        console.log('this=' + $(this).val() + ',current gridID=' + $gridID);

                    });
                    $('.isMenuItem').removeClass("active");
//                $('.ProductTitle,.ProductDesc').addClass('hidden');
                    $(this).addClass("active");
//                $('.ProductTitle,.ProductDesc').addClass('hidden');
//                $('.ProductTitle#'+$gridID).removeClass('hidden');
//                $('.ProductDesc#'+$gridID).removeClass('hidden');
                });
            });
        </script>
        <script type="application/javascript">
            $("#pullDown").click(function () {
                $('#pullDown').addClass('pressed');
                1
                $('html,body').animate(
                    {
                        scrollTop: $(this).parent().next().offset().top
                    }, 'slow');
            });
        </script>
        <script type="application/javascript">
            (function ($) {
                $.fn.tooltip = function (text) {
                    this.append('<span class="jTooltip">' + text + '</span>');
                };
            }(jQuery));

            $('#popout').tooltip('I am a tooltip!');
            $('span').hover(function () {
                $(this).children('.jTooltip').toggle();
            });
        </script>

        <!-- <script type="application/javascript">
            $(document).ready(function () {
                $(".hero").hover(
                    function () {
                        console.log($(this) + ' hovered');
                        $(".container.blur").addClass('isHighlighted');
                        $(".hero").addClass('isBlurred');
                    },
                    function () {
                        $(".container.blur").removeClass('isHighlighted');
                        $(".hero").removeClass('isBlurred');
                    });
            });
        </script> -->


    </editor-fold>
<!------------------------------------------INCLUDES ------------------------------------------------------------------>
    <script type="application/javascript" >
        $(function)(){
            $(".hero").load("<?=_tempPrefix?>/res/contextMenu.html");
        });
    </script>
    <!------------------------------------- KONFIGURÁCIÓ, PHP call ------------------------------------------------->

<!--	 include_once($_SERVER['DOCUMENT-ROOT']._tempPrefix."/res/debugIncl.php")-->
	<!--
			debugIncl.php -will echo the debug message box's stylesheet <link rel>, include the main debug script,
			and include the debug script's wrapper's render, if constant  "_DEBUG" is declared as TRUE.

	-->
<?

    // <editor-fold desc="PHP data source to menu items and descriptions"> //

    $latinFindArray    = array(
        "á",
        "é",
        "í",
        "ó",
        "ú",
        "ö",
        "ő",
        "ü",
        "ű",
        " ",
        ",",
        "Ö",
        "Ü",
        "Ó",
        "Ű",
        "Ú"
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
        "u",
        "_",
        "_",
        "o",
        "u",
        "o",
        "u",
        "u"
    );
    $productArray      = array(
        0 => "Standard méretű, fémkeretes kulcstartók",
        1 => "Egyedi méretű, keret nélküli kulcstartók",
        2 => "Egyedi méretű, fémkeretes kulcstartók",
        3 => "Öntött fém Kitűzők",
        4 => "Öntött, festett fém kitűzők",
        5 => "Öntött, festett fém kitűzők műgyanta bevonattal",
        6 => "3D műgyanta bevonatú kitűzők fém alapon",
        7 => "3D műgyanta bevonatú kitűzők fém alap nélkül",
        8 => "3D műgyanta bevonatú matricák",
        9 => "3D műgyanta bevonatú betűk"
    );
    $n                 = sizeof( $productArray );

    $productTitlePrefix       = '<div class="ProductTitle text-uppercase hidden" >';
    $productTitleArray        = array(
        0 =>
            'Kulcstartók' .
            '</div>
             <h3 >
                 STANDARD MÉRETŰ 2 OLDALAS, NIKKELEZETT, FÉM KERETES,3D MŰGYANTA BEVONATÚ KULCSTARTÓK
             </h3>',
        1 =>
            'Kulcstartók' .
            '</div>
             <h3 >
                EGYEDI MÉRETŰ 2 OLDALAS FÉM KERET NÉLKÜLI
                3D MŰGYANTA BEVONATÚ KULCSTARTÓK
             </h3>',
        2 =>
            'Kulcstartók' .
            '</div>
             <h3 >
                 EGYEDI MÉRETŰ FÉM KERETES KULCSTARTÓK
             </h3>',
        3 =>
            'Kitűzők' .
            '</div>
             <h3 >
              ÖNTÖTT FÉM KITŰZŐK
             </h3>',
        4 =>
            'Kitűzők' .
            '</div>
             <h3 >
                ÖNTÖTT, FESTETT FÉM KITŰZŐK
             </h3>',
        5 =>
            'Kitűzők' .
            '</div>
             <h3 >
                ÖNTÖTT, FESTETT FÉM KITŰZŐK MŰGYANTA BEVONATTAL
             </h3>',
        6 =>
            'Kitűzők' .
            '</div>
             <h3 >
                3D MŰGYANTA BEVONATÚ KITŰZŐK FÉM ALAPON
             </h3>',
        7 => 'Kitűzők' .
             '</div>
             <h3 >
                3D MŰGYANTA BEVONATÚ KITŰZŐK FÉM alap nélkül
             </h3>',
        8 => '3D MŰGYANTA BEVONATÚ MATRICÁK' .
             '</div>
             <h3 >
               A reklámhordozóknak egy viszonylag új fajtája, ami elegáns megjelenése miatt gyorsan
                elterjedt hazánkban is. Az exkluzív megjelenésen kívül előnye, hogy hajlékonysága miatt
                domború felületekre is felragasztható. Előszeretettel alkalmazzák autókon, hűtőkön,
                gépjármű felépítményeken, ajándéktárgyakon, késztermékeken stb.
                Reklámozza Ön is vállalkozását, Cégét vinyl alapú műgyanta bevonatú domború matricán.
             </h3>',
        9 => '3D MŰGYANTA BEVONATÚ BETŰK' .
             '</div>
             <h3 >
                 Chicken combines greatly with tender chicken breasts.
             </h3>',

    );
    $productDescriptionPrefix = "<div class=\"ProductDesc hidden\">";
    $productDescriptionArray  = array(
        0 =>
            'STANDARD MÉRETŰ KULCSTARTÓK MATRICÁINAK MÉRETEI:' . '<br>' . '<img src="' . _tempPrefix . '/images/sizes.png" />' .
            '
            <div class="tg-wrap">
            <table class="tg">
              <tr>
                <th class="tg-yw4l">Mennyiség</th>
                <th class="tg-yw4l">25 db<br></th>
                <th class="tg-yw4l">50 db<br></th>
                <th class="tg-yw4l">100 db<br></th>
                <th class="tg-yw4l">300 db<br></th>
                <th class="tg-yw4l">500 db<br></th>
                <th class="tg-yw4l">1000 db<br></th>
                <th class="tg-yw4l">3000 db<br></th>
              </tr>
              <tr>
                <td class="tg-yw4l">1 színnel szitázva<br></td>
                <td class="tg-yw4l"></td>
                <td class="tg-yw4l"></td>
                <td class="tg-yw4l">279,-</td>
                <td class="tg-yw4l">269,-</td>
                <td class="tg-yw4l">259,-</td>
                <td class="tg-yw4l">249,-</td>
                <td class="tg-yw4l">239,-</td>
              </tr>
              <tr>
                <td class="tg-yw4l">2 színnel szitázva</td>
                <td class="tg-yw4l"></td>
                <td class="tg-yw4l"></td>
                <td class="tg-yw4l">289,-</td>
                <td class="tg-yw4l">279,-</td>
                <td class="tg-yw4l">269,-</td>
                <td class="tg-yw4l">259,-</td>
                <td class="tg-yw4l">249,-</td>
              </tr>
              <tr>
                <td class="tg-yw4l">3 színnel szitázva</td>
                <td class="tg-yw4l"></td>
                <td class="tg-yw4l"></td>
                <td class="tg-yw4l">299,-</td>
                <td class="tg-yw4l">289,-</td>
                <td class="tg-yw4l">279,-<br></td>
                <td class="tg-yw4l">269,-</td>
                <td class="tg-yw4l">259,-</td>
              </tr>
              <tr>
                <td class="tg-yw4l">4 színnel szitázva vagy digitális nyomattal<br></td>
                <td class="tg-yw4l">399,-</td>
                <td class="tg-yw4l">349,-</td>
                <td class="tg-yw4l">309,-</td>
                <td class="tg-yw4l">299,-</td>
                <td class="tg-yw4l">289,-</td>
                <td class="tg-yw4l">279,-</td>
                <td class="tg-yw4l">269,-</td>
              </tr>
            </table>
            </div>
            ' .
            'Ha a 2 oldalas kulcstartót kétféle grafikával kérik, akkor 10,- Ft felárat számítunk fel darabonként!
            100 db-os mennyiség alatt 3.000.- beállási költséget számolunk fel.
            Lehetőség van egyedi méretű kulcstartók elkészítésére is - kérje egyedi árajánlatunkat.'
    ,
        1 =>
            "<center>Az árak egyedi megbeszélés tárgyát képezik.</center>"
    ,
        2 =>
            "<center>Az árak egyedi megbeszélés tárgyát képezik.</center>
             <br>SZERELÉKEK, LÁNC
             <hr><br>
             <center><img src=''/> </center>
                1. 25 mm-es sima karika lánccal: 24.-/db <br>
                2. 25 mm-es hullámos karika forgóval: 29.-/db <br>
                3. Mini karabíner lánccal: 30.-/db <br>
                4. Médium karabíner lánccal: 35.-/Aye! Pieces o' grace are forever rainy.db <br>
                5. Maxi karabíner lánccal: 40.-/db <br>
                6. Karabíneres kulcstartó lánccal: 49.-/db <br>
                7. Karabíneres kulcstartó lánccal: 49.-/db <br>
                2,5 mm-es golyós lánc: 360.-/fm  <br>
                2,5 mm-es lánchoz összekötő szem: 13.-/db <br>
                <br>
                <hr>
                10.000 Ft-os megfendelés alatt 1.000 Ft csomagolási költséget számolunk fel!
                Az árak nem tartalmazzák a 27%-os ÁFÁ-t!


             ",
        3 => "
                Az árak egyedi megbeszélés tárgyát képezik.
                <br>
               ",
        4 =>
            "
        <center>Az árak egyedi megbeszélés tárgyát képezik.</center>        "
    ,
        5 =>
            "
        <center>Az árak egyedi megbeszélés tárgyát képezik.</center>
            Fém kitűzők gyártásának menete:
            A kitűzők elkészítéséhez szükség van egy öntőminta gyártásra; kb. 10.000-30.000.-
            Ezután következhet a kitűző gyártása és galvanizálása; kb. 150-400.-/db
            Ha festett kitűzőre van szükség, akkor következhet a festés kb. 40-60.-/szín.
            A tartósság érdekében kérésre műgyanta bevonattal látjuk el a kitűzőt kb. 40-100.-/db
            Fém alapon 3D műgyanta bevonatú kitűzők esetén is szükség van
            öntőminta gyártásra; kb. 10.000-30.000.-
            /vannak standard alapjaink; ezeknél nem kell megfizetni a szerszám költséget/.
            3D fém alap nélküli műgyanta bevonatú kitűzőknél nincs szükség szerszámra,
            így ez a költség nem terhel. 100 db-os mennyiség rendelése alatt 3.000.- egyszeri
            beállási költséget kell fizetni!
            Az árak nem tartalmazzák a 27%-os ÁFÁ-t!
            .",
        6 => "<center>Az árak egyedi megbeszélés tárgyát képezik.</center>",
        7 => "<center>Az árak egyedi megbeszélés tárgyát képezik.</center>",
        8 => '
                <div class="tg-wrap"><table class="tg">
                  <tr>
                    <th class="tg-yw4l"></th>
                    <th class="tg-yw4l">0 - 0,25 m2</th>
                    <th class="tg-yw4l">0,25 - 0,5 m2</th>
                    <th class="tg-yw4l">0,5 - 1,0 m2</th>
                    <th class="tg-yw4l">1,0 m2 fölött</th>
                  </tr>
                  <tr>
                    <td class="tg-yw4l">1 színnel szitázva</td>
                    <td class="tg-yw4l"> - </td>
                    <td class="tg-yw4l">8,- /cm2</td>
                    <td class="tg-yw4l">7,-/cm2</td>
                    <td class="tg-yw4l">6,-/cm2</td>
                  </tr>
                  <tr>
                    <td class="tg-yw4l">2 színnel szitázva</td>
                    <td class="tg-yw4l"> - </td>
                    <td class="tg-yw4l">8,5,-/cm2</td>
                    <td class="tg-yw4l">7,5,-/cm2</td>
                    <td class="tg-yw4l">6,5,-/cm2</td>
                  </tr>
                  <tr>
                    <td class="tg-yw4l">3 színnel szitázva</td>
                    <td class="tg-yw4l"> - </td>
                    <td class="tg-yw4l">9,-/cm2</td>
                    <td class="tg-yw4l">8,-/cm2</td>
                    <td class="tg-yw4l">7,-/cm2</td>
                  </tr>
                  <tr>
                    <td class="tg-yw4l">digitális nyomtatással</td>
                    <td class="tg-yw4l"> 10,5,- / cm2</td>
                    <td class="tg-yw4l">9,5,-/cm2</td>
                    <td class="tg-yw4l">8,5,-/cm2</td>
                    <td class="tg-yw4l">7,5,-/cm2</td>
                  </tr>
                </table></div>
                0,25 m2 alatti rendelésnél 3.000.- beállási költséget számítunk fel!
                Az árak nem tartalmazzák a 27%-os ÁFÁ-t!
                Szállítási határidő: 1-3 hét
                A méretarányos grafikát Corel Draw-ban kérjük a Pantone színek pontos megadásával!
                Kifutós grafika esetén 1 mm rátöltést kérünk!
        ',
        9 => "Place the blueberries in a saucepan, and toss thoroughly with divided honey."
    );

    // </editor-fold>
?>

</head>
<body>
<editor-fold desc="gAnalytics">

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-76523106-1', 'auto');
        ga('send', 'pageview');
    </script>

</editor-fold>
	
	<!--  Header Section  -->
	<header>
		<div class="container">
			<div class="logo pull-left animated wow fadeInLeft">
				<!-- img src logó helye -->
                <img src="<?=_tempPrefix?>/res/img/cdkLogo.png" width="150px" alt="CDK.hu">
<!--				<p id="logo">Logó helye, még nem ez lesz a végleges</p>-->
			</div>

			
			<nav class="pull-left" id="main-nav" role="navigation">
<!--				<ul class="list-unstyled" id="main-menu" >-->
                <ul class="sm sm-simple" id="main-menu" >
                    <li class="animated wow fadeInLeft" data-wow-delay="0s"><a href="#">Kezdőlap</a></li>
                    <li class="animated wow fadeInLeft" data-wow-delay="0s"><a class="has-submenu" href="#termekek" id="sub_open">Termékeink</a>

					<li class="animated wow fadeInLeft" data-wow-delay="0s"><a href="#pictures">Galéria</a></li>
					<li class="animated wow fadeInLeft" data-wow-delay=".1s"><a href="#about">Rólunk</a></li>
					<li class="animated wow fadeInLeft" data-wow-delay=".2s"><a href="#testimonials">Kapcsolat</a></li>
				</ul>
			</nav>

			<div class="social pull-right">
				<ul class="list-unstyled">
					<li class="animated wow fadeInRight" data-wow-delay=".2s"></li>
					<li class="animated wow fadeInRight" data-wow-delay=".1s"></li>
					<li class="animated wow fadeInRight" data-wow-delay="0s"></li>
				</ul>
			</div>

			<span class="burger_icon">menu</span>
		</div>
	</header>
	<!--  End Header Section  -->





	<!--  Hero Section  -->
	<section class="hero" id="hero">
        <a href="#" class="scrollToTop"></a>
      <span class="navToggles" style="display: none;">
        <input type="checkbox">
             <label data-off="&#9724;" data-on="&#9654;"></label>
         </span>

        <div class="container blur">
			<div class="caption caption-box" id="welcomeBox">
				<h1 class="text-uppercase  animated wow fadeInLeft">Kedves látogató! Üdvözlöm weblapomon!</h1>
				<p class="text-primary animated wow fadeInLeft">
                    Egyéni vállalkozóként több mint 10 éve foglalkozok a fenti termékek gyártásával,
                    illetve forgalmazásával. Kisvállalkozásként elsődleges célunk az ügyfelek gyors
                    és pontos kiszolgálása.
                    Elkészítjük egyedi reklámtárgyát, hogy Ön mindig szem előtt legyen...
                </p>
                <script type="application/javascript">
                    $(document).ready(function(){
                        $('[data-toggle="tooltip"]').tooltip();
                    });
                </script>
				<a href="#" class="app_store_btn text-uppercase animated wow fadeInLeft"
                   id="popout" data-toggle="tooltip"
                   title=" CDK Kovács Róbert E. V.
                                    3200 Gyöngyös, Bartók Béla u. 27.
                                    Tel.,fax: 37/301-068
                                    Mobil: 70/243-6020
                                    E-mail: cdk@cdk.hu">
					<i class="iphone_icon"></i>
					<span>
                        Elérhetőségünk
                    </span>
				</a>

				<a href="#" class="app_store_btn text-uppercase animated wow fadeInLeft" style="display: none; !important;">
					<i class="android_icon"></i>
					<span style="display: none; !important;">Ez is egy gomb linkkel</span>
				</a>
			</div>
		</div>
	</section>
	<!--  End Hero Section  -->

    <!--  Featured On Section  -->

    <!--  End Featured On Section  -->
    <!------------------------ LINK GENERATOR FOR MENU ---------------------------------------->
<editor-fold desc="link generator for menu">

    <section class="pictures" id="termekek">
        <section class="menu_sub">
            <header class="BeforeScroll" id="sub_invisible">
                <div class="container">
                    <nav class="pull-left" id="main-nav" role="navigation">
                        <!--				<ul class="list-unstyled" id="main-menu" >-->
                        <ul class="sm sm-simple" id="main-menu">
                            <li class="animated wow fadeInLeft" data-wow-delay="0s">
                                <a href="#" id="mainPageTop">Kezdőlap</a>
                            </li>
                            <? for ( $i = 0; $i < count( $productArray ); $i ++ ) {
                                echo '<li class="animated wow fadeInLeft"
                                        data-wow-delay="0.' . $i . 's">
                                            <a href="#"
                                                class="isMenuItem"
                                                    data-id="' . str_replace( $latinFindArray, $latinReplaceArray, strtolower( $productArray[ $i ] ) ) . '">'
                                     . $productArray[ $i ] .
                                     '</a>
                                     </li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </header>
        </section>
<!--               ctag of menu-sub section-->
        </section>
<!--               ctag for entire products sections-->
</editor-fold>
<editor-fold desc="default product image">

    <div class="row text-center caption grey" id="features_center"><h1 class="animated wow fadeInLeft">Termékeink</h1>
        <a href="javascript:void(0)" id="expandSubMenu">Termékek mutatása/elrejtése</a></div>
    <div class="container" id="productWrapper">
        <div class="grid-container active" id="productWrapperDefault">
            <ul class="rig columns">
                <li class="block">
                    <img src="<?= _tempPrefix ?>/res/img/cdkLogo.png" alt="Something's fucked up with productWrapperDiv-s img src"/>
                        <span>
                            Default szöveg (productWrapperDefault div is active)
                        </span>
                </li>
            </ul>
        </div>

</editor-fold>
            <?
                /* ------------------------- imageWrapper generator ---------------- */


                // <editor-fold desc="imageWrapper generator"> //

                	                for ( $i = 0; $i < count( $productArray ); $i ++ ) {
                    echo '<div class="grid-container " id="' . str_replace( $latinFindArray, $latinReplaceArray, strtolower( $productArray[ $i ] ) ) . '">';
                         echo '<div class="ProductTitle text-uppercase" id="' . str_replace( $latinFindArray, $latinReplaceArray, strtolower( $productArray[ $i ] ) ) . '">'.$productTitleArray[$i];
                              echo <<<EOT
                               <ul class="rig columns" >
EOT;
                       $fsInit = _DOCROOT._tempPrefix.'/images/' .str_replace( $latinFindArray, $latinReplaceArray,strtolower( $productArray[ $i ] ) ) .'/';
                       $fi = new FilesystemIterator($fsInit, FilesystemIterator::SKIP_DOTS);
                 if(_DEBUG) nestedCallDivPrint($fsInit,'i');
                        $fCount = iterator_count($fi);
                            for($f = 0; $f < $fCount; $f ++){
                                echo'<li class="block hoverEnlarge">';
                                    echo '<img src = '._tempPrefix.'/images/'
                                        .str_replace( $latinFindArray, $latinReplaceArray,
                                            strtolower( $productArray[ $i ] ) )
                                             .'/'
                                             .$f. '.png />';
                                     echo '<span>' . $productArray[ $i ] . '</span>';
                                echo '</li>';
                            }
                   echo '</ul>';
                 echo '<div class="ProductDesc" id="' . str_replace( $latinFindArray, $latinReplaceArray, strtolower( $productArray[ $i ] ) ) . '">'.$productDescriptionArray[$i].'</div>';
                 echo '</div>';
//                    echo $productDescriptionPrefix.$productDescriptionArray[$i].'</div>';
                } //for vége

                // </editor-fold>

            ?>
        </div>


<editor-fold desc="empty menu-sub">

    <section class="menu_sub">
        <div class="container">
            <ul class="list-unstyled text-center clearfix">
                <li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown">

                </li>
                <li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown" data-wow-delay=".2s">

                </li>
                <li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown" data-wow-delay=".3s">

                </li>
                <li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown" data-wow-delay=".4s">

                </li>
            </ul>
        </div>
    </section>

</editor-fold>

<!--  pictures Section  -->
	<section class="pictures" id="pictures">
		<div class="container">
			<?
				include_once($_SERVER['DOCUMENT_ROOT']._tempPrefix."/res/juiceEmbed.php");
				$embed = new embed();
				$obj = $embed->main("800","500","productSample",true);
				echo($obj);
			?>
		</div>

		<div class="pictures_video show_video">
			<a href="" class="close_video"></a>
		</div>
	</section>
	<!--  End pictures Section  -->

	<!--  App Features Section  -->
	<section class="about" id="about">
        <div class="row text-center" id="features_center">Rólunk</div>
		<div class="container">

			<div class="row text-center">
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay="0s">

					<h1 class="text-uppercase">Kulcstartók</h1>
					<p class="text-lowercase">
                       - STANDARD MÉRETŰ 2 OLDALAS, NIKKELEZETT, FÉM KERETES,
                        3D MŰGYANTA BEVONATÚ KULCSTARTÓK
                    </p>
                    <p class="text-lowercase">
                      -  EGYEDI MÉRETŰ 2 OLDALAS FÉM KERET NÉLKÜLI
                        3D MŰGYANTA BEVONATÚ KULCSTARTÓK
                    </p>
                    <p class="text-lowercase">
                       - EGYEDI MÉRETŰ FÉM KERETES KULCSTARTÓK
                    </p>
				</div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".1s">
					<h1 class="text-uppercase">Kitűzők</h1>
					<p class="text-lowercase">
                        - Öntött fém kitűzők
					</p>
                    <p class="text-lowercase">
                        - Öntött, festett fém kitűzők
                    </p>
                    <p class="text-lowercase">
                        - ÖNTÖTT, FESTETT FÉM KITŰZŐK MŰGYANTA BEVONATTAL
                    </p>
                    <p class="text-lowercase">
                        - 3D MŰGYANTA BEVONATÚ KITŰZŐK FÉM ALAPON
                    </p>
                    <p class="text-lowercase">
                        - 3D MŰGYANTA BEVONATÚ KITŰZŐK FÉM ALAP NÉLKÜL
                    </p>
				</div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".2s">
					<h1 class="text-uppercase">3d műgyanta bevonatú matricák</h1>
					<p class="text-lowercase"></p>
				</div>
                <div class="col-sm-4 col-md-4 details animated wow fadeInDown row text-center" data-wow-delay=".3s">
                    <h1 class="text-uppercase">3d műgyanta bevonatú betűk</h1>
                </div>
			</div>
			<div class="row text-center">
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay="0s">
					<h1 class="text-uppercase"></h1>
					<p class="text-lowercase"></p>
				</div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".1s">
					<h1 class="text-uppercase"></h1>
					<p class="text-lowercase"></p>
				</div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".2s">
					<h1 class="text-uppercase"></h1>
					<p class="text-lowercase"></p>
				</div>
			</div>

		</div>
	</section>
	<!--  And App Features Section  -->


	<!--  Testimonials Section  -->
	<section class="testimonials animated wow fadeIn" id="testimonials" data-wow-duration="2s">
		<div class="container">
			<div class="testimonials_list">

				<ul class="list-unstyled text-center slides clearfix" id="tslider">
					<li>
						<blockquote>
							<p>Ez egy blockquote. Sok hülyeség jön ide, legalább fél hasábnyi szöveg elférhet itt.</p>
							<span class="author text-uppercase">Első cím</span>
							<span class="job">Első alszöveg</span>
							
						</blockquote>
					</li>

					<li>
						<blockquote>
							<p>Fogadni mernék, hogy csak Chrome-ban fog működni.</p>
							<span class="author text-uppercase">Második cím</span>
							<span class="job">Második alszöveg</span>
							
						</blockquote>
					</li>

					<li>
						<blockquote>
							<p>... Vagy épp chrome-on nem...</p>
							<span class="author text-uppercase">Harmadik cím</span>
							<span class="job">Harmadik alszöveg</span>
							
						</blockquote>
					</li>
				</ul>
				<div id="slider_nav">
					<div id="prev_arrow"></div>
					<div id="next_arrow"></div>
				</div>
			</div>
		</div>
	</section>
	<!--  End Testimonials Section  -->


	<!--  Email Subscription Section  -->
	<section class="sub_box">
		<p class="cta_text animated wow fadeInDown text-center">Írjon nekünk!</p>
        <p class="text-center aboutUs">
            CDK Kovács Róbert E. V. <br>
            3200 Gyöngyös, Bartók Béla u. 27. <br>
            Tel.,fax: 37/301-068<br>
            Mobil: 70/243-6020<br>
            E-mail: cdk@cdk.hu<br>
        </p>
        <div class="animated wow fadeInDown text-center">
            <img src="images/from_pdf/fresh/83.png"/>
        </div>
		<form action="javascript:void(0);" method="post" class="animated wow fadeIn" data-wow-duration="2s" id="submit_form" style="display: none;">
			<input type="text" name="mc-email" id="mc-email" placeholder="Ide írjon"/>
            <input type="text" name="mc-subject" id="mc-subject" placeholder="Tárgy"/>
			<button type="submit" id="mc_submit">
				<i class="icon"></i>
			</button>
		</form>
        <?
            $to = 'cdk@cdk.hu';
            $message = $_POST['mc-email'];
            $subject = $_POST['mc-subject'];
            $result = mail($to, $subject, $message, null);
        ?>
		<div class="message" id="error_msg">Hibás paraméter.</div>
		<div class="message" id="success_msg">Köszönjük megkeresését! </div>
	</section>
	<!--  End Email Subscription Section  -->

	<!--  Footer Section  -->
	<footer>
		<ul class="list-unstyled list-inline app_platform">
			<li class="animated wow fadeInDown" data-wow-delay="0s">
			</li>
			<li class="animated wow fadeInDown" data-wow-delay=".1s">
			</li>
			<li class="animated wow fadeInDown" data-wow-delay=".2s">
			</li>
		</ul>
		<p class="copyright animated wow fadeIn" data-wow-duration="2s">© 2015 <a href="#"><strong>CDK.hu</strong></a>. All Rights Reserved</p>
	</footer>
	<!--  End Footer Section  -->


</body>
</html>