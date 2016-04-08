<?php

    //function to echo all defined constants

    $rp = realpath(dirname(__FILE__) . '/..');
    include_once($rp."/config.php");

    include_once("./debugIncl.php");
    define(_DEBUG,TRUE);

    $fileContent ='
<!DOCTYPE html>
        <html>
            <head lang="en">
                <meta charset="UTF-8">
                <title>defined global constants @ config.php</title>
                <link rel="stylesheet" href="./debugDivCust.css" type="text/css">
            </head>
                <body>
                    <!-- Debug messages are ON. -->
                    ';
    $fileContent.=nestedCallDivSilent("This is an automatically generated html page showing currently defined global constants.
                    To use them, just include, or require in the php file.","w");

    $tc = get_defined_constants(false);


    foreach ($tc as $key => $value) {
        $fileContent.= nestedCallDivSilent("Key: $key; Value: $value\n","i");
    }


    $fileContent.= "
                </body>
         </html>
";
//    $savePath = basename(dirname($_SERVER['PHP_SELF']))."/conf";
    $savePath = dirname(__FILE__);
    $fname='consts_'.date('m-d-Y_hia').'.html';
    $savePath.= "/".$fname;

    $fh = fopen($savePath, 'w') or die("Can't create file ".$savePath);
    fwrite($fh,$fileContent);
    fclose($fh);

    echo <<<EOT
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
     <link rel="stylesheet" href="./debugDivCust.css" type="text/css">
</head>
<body>

EOT;

    echo nestedCallDivSilent("File \" ".$fname." \" generated succesfully at ".$savePath." , redirecting in 5s...",'i');
    echo <<<EOT

</body>
</html>
EOT;

    header("Refresh:4;url=http://cdk.hu/new/res/conf/".$fname);
/**
 * Created by PhpStorm.
 * User: Rendszergazda
 * Date: 2016.03.19.
 * Time: 21:20
 */
?>