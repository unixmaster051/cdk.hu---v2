<?php
    echo <<<EOT
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>

    <script type="text/javascript">
    $(function(){
        $('.showme').click(function () {
            $('.error-notification').remove();
            var $err = $('<div>').addClass('error-notification')
                .html('<div><img class="imgClose" src="http://www.mobissimo.com/images/module-close.png" /><p><img src="http://www.mousescrappers.com/forums/xperience/icons/teacups24.png" /><h2>Paolo is awesome</h2>(click on this box to close)</p></div>')
                .css('left', $(this).position().left);
            $(this).after($err);
            $err.fadeIn('fast');
        });
        $('.imgClose').live('click', function () {
            $(this).parent().fadeOut('fast', function () { $(this).parent().remove(); });
        });
    });

</script>
EOT;

?>
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 2016.03.12.
 * Time: 17:58
 */// fájlnév: jsFadeOut.php 
// projektnév: CDK.hu- v2 
// dátum: 2016.03.12. 