<!DOCTYPE html>
<html lang="en-us">
<head>
	<?
	define('_DOCROOT',$_SERVER['DOCUMENT-ROOT']."/CDK");
		if(isset($_GET['debug'])){
			define(_DEBUG,TRUE);
			echo <<<EOT
		<!-- Debug messages are ON. -->
EOT;
		}
		else define(_DEBUG, FALSE); //manual setting
        $rp = realpath(dirname(__FILE__) . '/..');
        require_once($rp."/res/config.php");

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
	<link rel="stylesheet" type="text/css" href="<?= $_SERVER['DOCUMENT-ROOT']."/CDK/" ?>/res/products/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?= $_SERVER['DOCUMENT-ROOT']."/CDK/" ?>/res/products/css/owl.transitions.css"/>
	<link rel="stylesheet" type="text/css" href="<?= $_SERVER['DOCUMENT-ROOT']."/CDK/" ?>/res/products/css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="<?= $_SERVER['DOCUMENT-ROOT']."/CDK/" ?>/res/products/css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="<?= $_SERVER['DOCUMENT-ROOT']."/CDK/" ?>/res/products/css/main.css"/> <!-- this this this! -->
    <link rel="stylesheet" type="text/css" href="<?= $_SERVER['DOCUMENT-ROOT']."/CDK/" ?>/res/productsGrid.css"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?= $_SERVER['DOCUMENT-ROOT']."/CDK/" ?>/res/products/css/cust.css"/>


	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']."/CDK" ?>/res/products/js/jquery.js"></script>
	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']."/CDK" ?>/res/products/js/ajaxchimp.js"></script>
	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']."/CDK" ?>/res/products/js/scrollTo.js"></script>
	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']."/CDK" ?>/res/products/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']."/CDK" ?>/res/products/js/wow.js"></script>
	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']."/CDK" ?>/res/products/js/parallax.js"></script>
	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']."/CDK" ?>/res/products/js/nicescroll.js"></script>
	<script type="text/javascript" src="<?= $_SERVER['DOCUMENT-ROOT']."/CDK" ?>/res/products/js/main.js"></script>
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
              $('#productWrapper').toggleClass('hidden');
               $('#productWrapper').fadeTo('slow',1.0);
               console.log('document ready - ran @ expandSubMenuButtonClick2 -> now showing/hiding submenu #');
           });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.isMenuItem').on('click', function(event){
                event.preventDefault();
                $('#productWrapper').fadeTo('slow',1.0);
                console.log('document ready - ran @ expandSubMenuButtonClick2 -> now showing/hiding submenu #');

                console.log('document ready - ran @ .isMenuItem button click -> now showing/hiding submenu #1');
                $('#productWrapperDefault').fadeOut(500, function(){
                    $('#' + gridID).fadeIn(500);
                });
                var gridID = $(this).attr("data-id");

                $('.isMenuItem').removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.isMenuItem').on('click', function(event){
                event.preventDefault();
                $('#productWrapper').fadeOut(500, function(){
                    $('#' + gridID).fadeIn(500);
                });
                var gridID = $(this).attr("data-id");


            });
        });
    </script>

    <!------------------------------------- KONFIGURÁCIÓ, PHP call ------------------------------------------------->

<!--	 include_once($_SERVER['DOCUMENT-ROOT']."/CDK"."/res/debugIncl.php")-->
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
    $productArray = array(
        0 => "Kulcstartók",
        1=> "3D Betűk",
        2=> "3D Matricák",
        3=> "Kitűzők",
        4=> "Láncok",
        5=> "Műgyanta"
    );
    $n = sizeof($productArray);
    ?>

</head>
<body>
	
	<!--  Header Section  -->
	<header>
		<div class="container">
			<div class="logo pull-left animated wow fadeInLeft">
				<!-- img src logó helye -->
                <img src="<?=_DOCROOT?>/res/img/logo.png" width="250px" alt="Nem végeleges logó, csak teszt...">
<!--				<p id="logo">Logó helye, még nem ez lesz a végleges</p>-->
			</div>

			
			<nav class="pull-left" id="main-nav" role="navigation">
<!--				<ul class="list-unstyled" id="main-menu" >-->
                <ul class="sm sm-simple" id="main-menu" >
                    <li class="animated wow fadeInLeft" data-wow-delay="0s"><a href="#">Kezdőlap</a></li>
                    <li class="animated wow fadeInLeft" data-wow-delay="0s"><a class="has-submenu" href="#termekek" id="sub_open">Termékeink</a>

					<li class="animated wow fadeInLeft" data-wow-delay="0s"><a href="#pictures">Galéria</a></li>
					<li class="animated wow fadeInLeft" data-wow-delay=".1s"><a href="#app_features">Rólunk</a></li>
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
		<div class="container">
			<div class="caption">
				<h1 class="text-uppercase  animated wow fadeInLeft">Ide jön majd a tartalom</h1>
				<p class="text-lowercase  animated wow fadeInLeft">....</p>

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
        <div class="row text-center caption grey" id="features_center"><h1 class="animated wow fadeInLeft">Termékeink</h1><a href="javascript:void(0)" id="expandSubMenu">Termékek mutatása</a></div>
        <div class="container" id="productWrapper" style="display: block !important;">
            <div class="grid-container" id="productWrapperDefault" style="display: block !important;">
                <ul class="rig columns">
                    <li class="block"><span></span></li>
                </ul>
            </div>
            <?



                /* ------------------------- imageWrapper generator ---------------- */
                for ( $i = 0; $i < count( $productArray ); $i ++ ) {
                    echo '<div class="grid-container" id="' . str_replace( $latinFindArray, $latinReplaceArray, strtolower( $productArray[ $i ] ) ) . '">';
                    echo <<<EOT
                     <ul class="rig columns" >
                        <li class="block">
EOT;
                            echo '<img src = "/CDK/images/'
                                 .str_replace( $latinFindArray, $latinReplaceArray,
                                    strtolower( $productArray[ $i ] ) )
                                    .'/'
                                 . str_replace( $latinFindArray, $latinReplaceArray,
                                    strtolower( $productArray[ $i ] ) )
                                    .'_'.$i. '.jpg" />';
                            echo '<span>' . $productArray[ $i ] . '</span>';
                            echo <<<EOT
                        </li>
                    </ul>
                </div>
EOT;
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
				include_once($_SERVER['DOCUMENT_ROOT']."/CDK/res/juiceEmbed.php");
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
	<section class="app_features" id="app_features">
        <div class="row text-center" id="features_center">Rólunk</div>
		<div class="container">

			<div class="row text-center">
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay="0s">
					<img src="img/f_icon1.png" alt="" title="">
					<h1 class="text-uppercase">malesuada fames turpis.</h1>
					<p class="text-lowercase">vel ultrices mauris libero id diam. Vivamus tellus sagittis facilisis nisi quis mollis risus quisque ultrices elit.</p>
				</div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".1s">
					<img src="img/f_icon2.png" alt="" title="">
					<h1 class="text-uppercase">malesuada fames turpis.</h1>
					<p class="text-lowercase">vel ultrices mauris libero id diam. Vivamus tellus sagittis facilisis nisi quis mollis risus quisque ultrices elit.</p>
				</div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".2s">
					<img src="img/f_icon3.png" alt="" title="">
					<h1 class="text-uppercase">malesuada fames turpis.</h1>
					<p class="text-lowercase">vel ultrices mauris libero id diam. Vivamus tellus sagittis facilisis nisi quis mollis risus quisque ultrices elit.</p>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay="0s">
					<img src="img/f_icon4.png" alt="" title="">
					<h1 class="text-uppercase">malesuada fames turpis.</h1>
					<p class="text-lowercase">vel ultrices mauris libero id diam. Vivamus tellus sagittis facilisis nisi quis mollis risus quisque ultrices elit.</p>
				</div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".1s">
					<img src="img/f_icon5.png" alt="" title="">
					<h1 class="text-uppercase">malesuada fames turpis.</h1>
					<p class="text-lowercase">vel ultrices mauris libero id diam. Vivamus tellus sagittis facilisis nisi quis mollis risus quisque ultrices elit.</p>
				</div>
				<div class="col-sm-4 col-md-4 details animated wow fadeInDown" data-wow-delay=".2s">
					<img src="img/f_icon6.png" alt="" title="">
					<h1 class="text-uppercase">malesuada fames turpis.</h1>
					<p class="text-lowercase">vel ultrices mauris libero id diam. Vivamus tellus sagittis facilisis nisi quis mollis risus quisque ultrices elit.</p>
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
		<p class="cta_text animated wow fadeInDown">Írjon nekünk!</p>
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