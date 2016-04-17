<?php
/**
 * Created by PhpStorm.
 * User: Rendszergazda
 * Date: 2016.03.18.
 * Time: 0:29
 */

class embed {

	function main($width,$height,$path,$center){
        if($center == true){
            $ret = '<object style="margin: 0px auto; display: inherit;" width="'.$width.'" height="'.$height.'" data="'.$_SERVER["DOCUMENT-ROOT"]._tempPrefix.'/data/'.$path.'/"></object>';
        }
        else {
            $ret = '<object width="' . $width . '" height="' . $height . '" data="' . $_SERVER[ "DOCUMENT-ROOT" ] . _tempPrefix . '/data/' . $path . '/"></object>';
        }
		return($ret);
	}

} 