<?php
/**
 * Created by PhpStorm.
 * User: Rendszergazda
 * Date: 2016.04.12.
 * Time: 17:39
 */

namespace tools;


class appendNode {

    function main($ID) {
        $ret = '
        <script type="application/javascript" src="'._tempPrefix.'/js/jquery.js'.'">
            var container = $("<div>");
            $.each(items, function (index, itm) {
                var el = $("<div>");
                el.attr("id", ID_PREFIX + index);
                el.html(createHtml(itm));
                container.append(el);
            });

            $("#'.$ID.'").append(container);
        </script>
        ';
        return $ret;
    }
} 