<html>

<head>
    <?php /**
     *
     */
	    if(isset($_GET['debug'])){
		    define(_DEBUG,TRUE);
		    echo <<<EOT
		<!-- Debug messages are ON. -->
EOT;
	    }
	    else define(_DEBUG, FALSE); //manual setting ?>
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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="res/style.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="PlatinumMenubar/menuStyles.css" type="text/css">
    <link rel="stylesheet" href="./css_opt/default.css" type="text/css">
    <link rel="stylesheet" href="./css_opt/component.css" type="text/css">
    <link rel="stylesheet" href="res/debugDivCust.css" type="text/css">
    <? if(isset($_GET['imgPath']) OR ($_GET['page'])){
        echo('<link rel="stylesheet" href="./res/galleryDivStyle.css" type="text/css">');


    }?>
    <? include_once('./res/debugIncl.php') ?>
    <!--
            debugIncl.php -will echo the debug message box's stylesheet <link rel>, include the main debug script,
            and include the debug script's wrapper's render, if constant  "_DEBUG" is declared as TRUE.

    -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <title>:: CDK city card ::</title>
</head>

<body bgcolor="#FFFFFF">

<?php $contentWidth = 800; //default beállítás ?>

<!--BANNER ELEJE, KÉPPEL, KÍVÁNT SZÉLESSÉG 800PX-->
        <!--//TODO: BANNERSZÉLESSÉG: 800PX-->
    <table border="0" cellpadding="0" cellspacing="0" width="720">
        <img class="headerImg" src="res/banner_1.png" width="<?echo $contentWidth; ?>" height="75">
    </table>
<?$contentWidth=800;?>
<!--TARTALOM DIV-->
<div align="center">


	<script type="application/javascript">
		$(function() {
			var pull                = $('#pull');
			menu            = $('nav ul');
			menuHeight      = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});
	</script>
	<script type="application/javascript">
		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
	<!--CSS MENÜ -->
	<tr>
		<nav class="clearfix" id="cssmenu"  style="position: relative">
			<ul class="clearfix" id="MenuUl" >
				<li><a href='./index.php'><span>Kezdőlap</span></a></li>
				<li class='active has-sub'><a href='#'><span>Termékeink</span></a>
					<ul>
						<li class='has-sub'><a href='index.php?imgPath=kulcstartok&?nav=kulcstartok'><span>Kulcstartók</span></a>
							<ul>
								<li><a href='#'><span>Sub Product</span></a></li>
								<li class='last'><a href='#'><span>Sub Product</span></a></li>
							</ul>
						</li>
						<li class='has-sub'><a href='#'><span>3D Matricák</span></a>
							<ul>
								<li><a href='#'><span>Sub Product</span></a></li>
								<li class='last'><a href='#'><span>Sub Product</span></a></li>
							</ul>
						</li>
						<li><a href="#"><span>3D Betűk</span></a></li>

						<li><a href="#"><span>Kitűzők</span></a></li>
						<li><a href="index.php?imgPath=null"><span>Minden kép</span></a> </li>
					</ul>
				</li>
				<li><a href='#'><span>Rólunk</span></a></li>
				<li class='last'><a href='#'><span>Kapcsolat</span></a></li>
				<!--            contentwidthes javascriptes post-get es faszság kezdete-->
			</ul>
			<a href="#" id="pull">Menu</a>
		</nav>
	</tr>
</div>
<!--BANNER VÉGE-->
<div class="content" id="content">
<?
    //print_r($_GET['imgPath']);
    $_GET['nav']= $_GET['imgPath'];
    nestedCallDivPrint("Ön itt jár: ".$_GET['imgPath'],"i");
    //Összes képet mutat
    if($_GET['nav']=="null"){
        echo('<div id="galleryDiv"> ');
                  $_GET['imgPath']='';
                    $_GET['nav']='';
                 include_once('kulcstartok.php');
            echo('</div>');
        }
        //Adott linkhez tartozó képeket mutat
                 else if(isset($_GET['nav'])) {
                         echo('<div id="galleryDiv"> ');
                            include_once($_GET['nav'].'.php');
                         echo('</div>');
                 }
//TODO:galleryDiv-re css
?>

    <tr id="content" >
        <td>
            <div align="center" <? if(isset($_GET['nav'])){echo('style="display: none;" id="hidden" '); }?>>

                <table border="0" cellpadding="0"
                       cellspacing="0">
                    <tr>
                        <!--<td width="10" bgcolor="#000000">&nbsp;</td>-->
                        <td  align="center" valign="top" width="<?echo $contentWidth;?>" bgcolor="#FFFFFF">
                            <!--TODO: EZ IS LEGYEN 800PX, VAGY $contentwidth-en keresztül állítható az egész site szélessége -->
                            <div id="mainPage" align="center">
                               <img src="./src/img/main_bg.jpeg">
                            </div>
                            <div align="center">

                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>


</body>

<!--CSS Menü vége-->


</html>
