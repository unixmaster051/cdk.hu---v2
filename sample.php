<?php
    require_once('/var/www/home/ws/cdk/public_html/new/res/config.php');
    ini_set('display_errors', 1);
    echo <<<EOT
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
EOT;


//  <editor-fold desc="teszt">

    require_once(_DOCROOT."/res/appendNode.php");

    $c = new \tools\appendNode();
    $f = $c -> main("idName");
    echo <<<EOT
It works now!
</body>
</html>

EOT;



//</editor-fold>
