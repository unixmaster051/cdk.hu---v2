<?php
    require_once('/var/www/home/ws/cdk/public_html/new/res/config.php');

    if(_DEBUG == TRUE){
    echo('<link rel="stylesheet" href="'._tempPrefix.'/res/debugDivCust.css" type="text/css">');
    include_once($_SERVER['DOCUMENT_ROOT']._tempPrefix."/ext_lib/debug.php");
    include_once($_SERVER['DOCUMENT_ROOT']._tempPrefix."/res/debugDivRender.php");
}
    /**
     * Created by PhpStorm.
     * User: adam
     * Date: 2016.03.12.
     * Time: 19:07
    // projektnév: CDK.hu- v2
// dátum: 2016.03.12.
     */
     ?>