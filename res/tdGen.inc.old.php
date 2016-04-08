<?php
/**
 *  include_once(_PDIR."/tdGen.php");
$c = new tdGen();
//params are " $mode,$maxcols,$maxid,$startid,$tClass,$tID,$tableContentArray,$imgWidth,$imgSpanClass "

//input param tableContentArray@main is text between span tags, or src attribute of image, depending on mode setting (img, text).
//filling array with image links
$img = array();

$img = range(1,12);

$f = $c -> main(4,12,1,'imgtable',null,"<div class='hoverEnlarge'>",$_GET['mid']);
 *
 *
 * Created by PhpStorm.
 * User: Rendszergazda
 * Date: 2016.04.04.
 * Time: 20:08
 */
?>