<!DOCTYPE html>
<html lang="en-us">
<head>
	<?
        $rp = realpath(dirname(__FILE__) . '/..');

		if(isset($_GET['debug'])){
			define('_DEBUG',TRUE);
			echo <<<EOT
		<!-- Debug messages are ON. -->
EOT;
		}
		else define('_DEBUG', FALSE); //manual setting

         require_once('/var/www/home/ws/cdk/public_html/new/res/config.php');


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
        $(document).ready(function() {
            console.log( "document ready - ran @ submenu script - #1" );
            $('#sub_open').click(function(){
                $('#sub_invisible').toggleClass('AfterScroll');
                $('#sub_invisible').toggleClass('BeforeScroll');
//                alert($(this).attr('id'));
                console.log('toggleClass  inner-function ran @ submenu script - #2 ');
            });
        });
    </script>
    <script type="application/javascript">
        $(document).ready(function(){
            console.log('document ready - run @ onReadyScrollTop -> now scrolling to top #');
            $('html, body').animate({scrollTop: 0}, 800);

        });
    </script>
    <script type="application/javascript">
        $(document).ready(function(){
            $('#mainPageTop').click(function(){
                $('html, body').animate({scrollTop: 0}, 800);
                $('#sub_invisible').toggleClass('AfterScroll');
                console.log('document ready - ran @ mainPageHrefOnClick -> now scrolling to top - #1');
            });
        });
    </script>
    <script type="application/javascript">
        $(document).ready(function(){
           $('#expandSubMenu').click(function(){
               $('#sub_invisible').addClass('AfterScroll');
               console.log('document ready - ran @ expandSubMenuButtonClick -> now showing/hiding submenu #1');
           });
            console.log('Nobody\'s goin\' to watch the dev. console... They will never know how cool I am... :"(  ');
        });
    </script>
    <script type="application/javascript">
        $(document).ready(function(){
           $('#expandSubMenu').click(function(){
              $('#productWrapper').removeClass('hidden');
               $('#productWrapper').fadeTo('slow',1.0);
               console.log('document ready - ran @ expandSubMenuButtonClick2 -> now showing/hiding submenu #');
           });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {


            $('.isMenuItem').on('click', function(event){
                event.preventDefault();

//                $('#productWrapper').fadeTo('slow',1.0);

                 console.log('document ready - ran @ .isMenuItem button click -> now showing/hiding submenu #1');
                var $gridID = $(this).attr("data-id");

                $('#productWrapperDefault').removeClass('active');
                $('.grid-container').fadeOut(500,function(){
                    $('#' + $gridID).fadeIn(500);
                    console.log('this='+$(this)+',current gridID='+$gridID);

                });
                $('.isMenuItem').removeClass("active");
                $(this).addClass("active");

            });
        });
    </script>
    <script type="application/javascript">
        $("#pullDown").click(function() {
            $('#pullDown').addClass('pressed');
            $('html,body').animate(
                {
                    scrollTop:$(this).parent().next().offset().top
                }, 'slow');
        });
    </script>

    <script type="application/javascript">
        $("#pullUp").click(function() {
            $('#pullDown').addClass('pressed');
            $('html,body').animate(
                {
                    scrollTop:$(this).parent().prev().offset().top
                }, 'slow');
        });
    </script>

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
    $latinFindArray = array(
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
        "Ö","Ü","Ó","Ű","Ú"
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
        "o","u","o","u","u"
    );
    $productArray = array(
        0 => "Standard méretű, fémkeretes kulcstartók",
        1 => "Egyedi méretű, keret nélküli kulcstartók",
        2 => "Egyedi méretű, fémkeretes kulcstartók",
        3=> "3D Betűk",
        4=> "3D Matricák",
        5=> "Öntött fém Kitűzők",
        6 => "Öntött, festett fém kitűzők",
        7=> "Láncok",
        8=> "Műgyanta"
    );
    $n = sizeof($productArray);

    $productTitlePrefix = '<div class="ProductTitle text-uppercase" >';
    $productTitleArray       = array(
        0 => $productTitlePrefix.
             'Kulcstartók'.
             '</div>
             <h3 class="text-uppercase">
                 STANDARD MÉRETŰ 2 OLDALAS, NIKKELEZETT, FÉM KERETES,3D MŰGYANTA BEVONATÚ KULCSTARTÓK
             </h3>',
        1 => $productTitlePrefix.
             'Kulcstartók'.
             '</div>
             <h3 class="text-uppercase">
                EGYEDI MÉRETŰ 2 OLDALAS FÉM KERET NÉLKÜLI
                3D MŰGYANTA BEVONATÚ KULCSTARTÓK
             </h3>',
        2 =>  $productTitlePrefix.
              'Kulcstartók'.
              '</div>
             <h3 class="text-uppercase">
                 EGYEDI MÉRETŰ FÉM KERETES KULCSTARTÓK
             </h3>',
        3 => "3db",
        4 => "3dm",
        5 => $productTitlePrefix.
             'Kitűzők'.
             '</div>
             <h3 class="text-uppercase">
              ÖNTÖTT FÉM KITŰZŐK
             </h3>',
        6 => $productTitlePrefix.
             'Kitűzők'.
             '</div>
             <h3 class="text-uppercase">
                ÖNTÖTT, FESTETT FÉM KITŰZŐK
             </h3>',
        7 => "láncok",
        8 => "műgyanta"
    );
    $productDescriptionPrefix = "<div class=\"ProductDesc\">";
    $productDescriptionArray = array(
        0 => $productDescriptionPrefix.
             'STANDARD MÉRETŰ KULCSTARTÓK MATRICÁINAK MÉRETEI:'.'<br>'.'<img src="" />'.
             '<table>
             </table>'.
             'Ha a 2 oldalas kulcstartót kétféle grafikával kérik, akkor 10,- Ft felárat számítunk fel darabonként!
            100 db-os mennyiség alatt 3.000.- beállási költséget számolunk fel.
            Lehetőség van egyedi méretű kulcstartók elkészítésére is - kérje egyedi árajánlatunkat.' .
             "</div>",
        1 => $productDescriptionPrefix.
             "Kérje egyedi árajánlatunkat.".
             "</div>",
        2 => $productDescriptionPrefix.
             "Kérje egyedi árajánlatunkat".
             "</div>",
        3 =>$productDescriptionPrefix. "
                Kérje egyedi árajánlatunkat.
                <br>
                <br>
                <hr>
                1. 25 mm-es sima karika lánccal: 24.-/db <br>
                2. 25 mm-es hullámos karika forgóval: 29.-/db <br>
                3. Mini karabíner lánccal: 30.-/db <br>
                4. Médium karabíner lánccal: 35.-/db <br>
                5. Maxi karabíner lánccal: 40.-/db <br>
                6. Karabíneres kulcstartó lánccal: 49.-/db <br>
                7. Karabíneres kulcstartó lánccal: 49.-/db <br>
                2,5 mm-es golyós lánc: 360.-/fm  <br>
                2,5 mm-es lánchoz összekötő szem: 13.-/db <br>
                <br>
                10.000 Ft-os megfendelés alatt 1.000 Ft csomagolási költséget számolunk fel!
                Az árak nem tartalmazzák a 27%-os ÁFÁ-t!
               ".
            "</div>",
        4 =>$productDescriptionPrefix.
            "Kérje egyedi árajánlatunkat".
            "</div>",
        5 => $productDescriptionPrefix.
             "Kérje egyedi árajánlatunkat.".
             "</div>"
    );
?>

</head>
<body>
	
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
					<li class="animated wow fadeInRight" data-wow-delay=".2s"><a href="#"><img src="<?=_DOCROOT?>/res/img/fb2.png" alt="" title="Oszd meg Facebook-on!" width="35px"></a></li>
					<li class="animated wow fadeInRight" data-wow-delay=".1s"><a href="#"><img src="<?=_DOCROOT?>/res/img/twitter2.png" alt="" title="Tweeteld!" width="35px"></a></li>
					<li class="animated wow fadeInRight" data-wow-delay="0s"><a href="#"><img src="<?=_DOCROOT?>/res/img/google.png" alt="" title="Oszd meg Google-en!" width="35px"></a></li>
				</ul>
			</div>

			<span class="burger_icon">menu</span>
		</div>
	</header>
	<!--  End Header Section  -->





	<!--  Hero Section  -->
	<section class="hero" id="hero">
        <a href="#" class="scrollToTop"></a>
      <span class="navToggles">
        <input type="checkbox">
             <label data-off="&#9724;" data-on="&#9654;"></label>
         </span>

        <div class="container blur">
			<div class="caption caption-box">
				<h1 class="text-uppercase  animated wow fadeInLeft">Kedves látogató! Üdvözlöm weblapomon!</h1>
				<p class="text-primary animated wow fadeInLeft">
                    Egyéni vállalkozóként több mint 10 éve foglalkozunk a fenti termékek gyártásával,
                    illetve forgalmazásával. Kisvállalkozásként elsődleges célunk az ügyfelek gyors
                    és pontos kiszolgálása.
                    Elkészítjük egyedi reklámtárgyát, hogy Ön mindig szem előtt legyen...
                </p>

				<a href="#" class="app_store_btn text-uppercase animated wow fadeInLeft">
					<i class="iphone_icon"></i>
					<span>Egy gomb linkkel</span>
				</a>

				<a href="#" class="app_store_btn text-uppercase animated wow fadeInLeft">
					<i class="android_icon"></i>
					<span>Ez is egy gomb linkkel</span>
				</a>
			</div>
		</div>
	</section>
	<!--  End Hero Section  -->

    <!--  Featured On Section  -->

    <!--  End Featured On Section  -->
    <!------------------------ LINK GENERATOR FOR MENU ---------------------------------------->
    <section class="pictures" id="termekek">
        <section class="menu_sub">
            <header class="BeforeScroll" id="sub_invisible">
                <div class="container">
                    <nav class="pull-left" id="main-nav" role="navigation">
                        <!--				<ul class="list-unstyled" id="main-menu" >-->
                        <ul class="sm sm-simple" id="main-menu" >
                           <li class="animated wow fadeInLeft" data-wow-delay="0s">
                               <a href="#" id="mainPageTop">Kezdőlap</a>
                           </li>
                            <? for ( $i = 0; $i < count( $productArray ); $i ++ ) {
                                echo '<li class="animated wow fadeInLeft"
                                        data-wow-delay="0.'.$i.'s">
                                            <a href="#"
                                                class="isMenuItem"
                                                    data-id="'.str_replace($latinFindArray,$latinReplaceArray,strtolower($productArray[$i])).'">'
                                                    .$productArray[$i].
                                            '</a>
                                     </li>';
                                }
                            ?>
                        </ul>
                    </nav>
                </div>
            </header>
        </section>
        <div class="row text-center caption grey" id="features_center"><h1 class="animated wow fadeInLeft">Termékeink</h1><a href="javascript:void(0)" id="expandSubMenu">Termékek mutatása/elrejtése</a></div>
        <div class="container" id="productWrapper" >
            <div class="grid-container active" id="productWrapperDefault">
                <ul class="rig columns">
                    <li class="block">
                        <img src="<?=_tempPrefix?>/res/img/cdkLogo.png" alt="Something's fucked up with productWrapperDiv-s img src"/>
                        <span>
                            Default szöveg (productWrapperDefault div is active)
                        </span>
                    </li>
                </ul>
            </div>
            <?



                /* ------------------------- imageWrapper generator ---------------- */
                for ( $i = 0; $i < count( $productArray ); $i ++ ) {
                    echo '<div class="grid-container " id="' . str_replace( $latinFindArray, $latinReplaceArray, strtolower( $productArray[ $i ] ) ) . '">';
                    echo $productTitleArray[$i];
                    echo <<<EOT
                     <ul class="rig columns" >
EOT;
                        $fi = new FilesystemIterator(__DIR__, FilesystemIterator::SKIP_DOTS);
                        $fCount = iterator_count($fi);
                            for($f = 0; $f < $fCount; $f ++){
                                echo'<li class="block hoverEnlarge">';
                                    echo '<img src = '._tempPrefix.'/images/'
                                        .str_replace( $latinFindArray, $latinReplaceArray,
                                            strtolower( $productArray[ $i ] ) )
                                        .'/'
//                                        . str_replace( $latinFindArray, $latinReplaceArray,
//                                            strtolower( $productArray[ $i ] ) )
//                                        .'_'
                                         .$f. '.jpg />';
                                     echo '<span>' . $productArray[ $i ] . '</span>';
                                echo '</li>';
                            }
                        echo $productDescriptionArray[$i];
                   echo '</ul>';
                echo '</div>';
                }


            ?>

        </div>
        <div class="pictures_video show_video">
            <a href="" class="close_video"></a>
        </div>
    </section>

    <section class="menu_sub">
        <div class="container">
            <ul class="list-unstyled text-center clearfix">
                <li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown">
                    <img src="img/google_logo.png" alt="" title="">
                </li>
                <li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown" data-wow-delay=".2s">
                    <img src="img/facebook_logo.png" alt="" title="">
                </li>
                <li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown" data-wow-delay=".3s">
                    <img src="img/yahoo_logo.png" alt="" title="">
                </li>
                <li class="col-xs-6 col-sm-6 col-md-3 animated wow fadeInDown" data-wow-delay=".4s">
                    <img src="img/paypal_logo.png" alt="" title="">
                </li>
            </ul>
        </div>
    </section>

	<!--  pictures Section  -->
	<section class="pictures" id="pictures">
		<div class="container">
			<?
				include_once($_SERVER['DOCUMENT_ROOT']._tempPrefix."/res/juiceEmbed.php");
				$embed = new embed();
				$obj = $embed->main("800","500","kulcstartok");
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
					<img src="img/f_icon1.png" alt="" title="">
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
					<img src="img/f_icon2.png" alt="" title="">
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
					<img src="img/f_icon3.png" alt="" title="">
					<h1 class="text-uppercase">3d műgyanta bevonatú matricák</h1>
					<p class="text-lowercase"></p>
				</div>
                <div class="col-sm-4 col-md-4 details animated wow fadeInDown row text-center" data-wow-delay=".3s">
                    <h1 class="text-uppercase">3d műgyanta bevonatú betűk</h1>
                </div>
			</div>
			<div class="row text-center">
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay="0s">
					<img src="img/f_icon4.png" alt="" title="">
					<h1 class="text-uppercase"></h1>
					<p class="text-lowercase"></p>
				</div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".1s">
					<img src="img/f_icon5.png" alt="" title="">
					<h1 class="text-uppercase"></h1>
					<p class="text-lowercase"></p>
				</div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".2s">
					<img src="img/f_icon6.png" alt="" title="">
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
        <p class="text-center">
            CDK Kovács Róbert E. V. <br>
            3200 Gyöngyös, Bartók Béla u. 27. <br>
            Tel.,fax: 37/301-068<br>
            Mobil: 70/243-6020<br>
            E-mail: cdk@cdk.hu<br>
        </p>
		<form action="javascript:void(0);" method="post" class="animated wow fadeIn" data-wow-duration="2s" id="submit_form">
			<input type="email" id="mc-email" placeholder="Enter your email"/>
			<button type="submit" id="mc_submit">
				<i class="icon"></i>
			</button>
		</form>
		<div class="message" id="error_msg">Hibás e-mail cím.</div>
		<div class="message" id="success_msg">Köszönjük a feliratkozást.</div>
	</section>
	<!--  End Email Subscription Section  -->






	<!--  Footer Section  -->
	<footer>
		<ul class="list-unstyled list-inline app_platform">
			<li class="animated wow fadeInDown" data-wow-delay="0s">
				<a href=""><img src="img/android_icon.png" alt="" title=""></a>
			</li>
			<li class="animated wow fadeInDown" data-wow-delay=".1s">
				<a href=""><img src="img/ios_icon.png" alt="" title=""></a>
			</li>
			<li class="animated wow fadeInDown" data-wow-delay=".2s">
				<a href=""><img src="img/windows_icon.png" alt="" title=""></a>
			</li>
		</ul>
		<p class="copyright animated wow fadeIn" data-wow-duration="2s">© 2015 <a href="#" target="_blank"><strong>CDK.hu</strong></a>. All Rights Reserved</p>
	</footer>
	<!--  End Footer Section  -->


</body>
</html>