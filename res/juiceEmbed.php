<?php
/**
 * Created by PhpStorm.
 * User: Rendszergazda
 * Date: 2016.03.18.
 * Time: 0:29
 */

class embed {

	function main($width,$height,$path){

		$ret = '<object width="'.$width.'" height="'.$height.'" data="'.$_SERVER["DOCUMENT-ROOT"].'/CDK/data/'.$path.'/"></object>';

		return($ret);
	}

} 