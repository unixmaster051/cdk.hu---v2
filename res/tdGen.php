<?php
/**
 * Created by PhpStorm.
 * User: Rendszergazda
 * Date: 2016.03.20.
 * Time: 1:26
 */

class tdGen {


    function main($maxcols,$maxid,$startid,$tClass,$tID,$tableContent,$mid){
//        $maxcols = 8;
//        $maxid = 12;
//        $startid = 1;
        $path = null;
        switch($mid){
            case "keyring": $path = "kulcstartok/";
                break;
            case "3dsticker": $path = "3d_matrica/";
                break;
            case "3dalpha": $path = "3d_betu/";
                break;
            case "badge": $path = "kituzok/";
                break;
            default: $path = "default/large/";
                break;
        }

        echo "<table";
        if($tID != null) {
                echo "id='$tID' ";
                    if($tClass != null){
                        echo " class='$tClass' ";
                    }
        }
        echo ">\n";
        $db1=1;
        $db2=0;
        $db =1;
        for ($i = 1;$i<=ceil($maxid/$maxcols);$i++) {

            echo "<tr>\n";

            for ($j=1;$j<=$maxcols;$j++)
                if ($startid <= $maxid)
                    echo "  <td class='mark'>ID".$startid++."</td>\n";
                else
                    echo "  <td> </td>\n";

            echo "</tr>\n<tr>\n";

            for ($j=1;$j<=$maxcols;$j++) {

                echo '<td>'.$tableContent.'<img src=\''._img.'/'.$path.$db.'.jpg\' width="176px"></div></td>';
                if($db < $maxid){$db++;}

            }
            echo "</tr>\n";
            $db++ ;

        }

        echo "</table>\n";
    }

    function multi($mode,$maxcols,$maxid,$startid,$tClass,$tID,$tableContentArray,$imgWidth,$imgSpanClass){
//        $maxcols = 8;
//        $maxid = 12;
//        $startid = 1;
        $tag = null;
        $index = null;
        $ctag = null;
        $src = null;
        switch($mode){
            case "img": {
                $tag = "<img";

                $ctag = "/>";
                if($imgSpanClass != null){
                    //az első escapelt idézőjel az img src attrib-ot zárja le
                    //              EZ
                    $imgSpanClass = "class=\"".$imgSpanClass."\"";
                }
                else $imgSpanClass = null;
                if($imgWidth != null){
                    $imgWidth = "width=\"".$imgWidth."px\"";
                }
                else $imgWidth = null;
            }
                break;
            case "text":{
                $tag = "<span ";
                $ctag = "</span>";
                if($imgSpanClass != null){
                    $imgSpanClass = "class\"".$imgSpanClass."\"";
                }
                else $imgSpanClass = null;
            }
                break;
        }


        echo "<table";
        if($tID != null) {
            echo "id='$tID' ";
            if($tClass != null){
                echo " class='$tClass' ";
            }
        }
        echo ">\n";

        $src = "src=\"".$tableContentArray."\"";
        //data = newline - tag - imgSpanClass - data - ctag - newline
        if($mode = "text") {
            $data = "\n " . $tag . " " . $imgSpanClass . " " . $imgWidth . " " . $tableContentArray . " " . $ctag . "\n";
        }
        else{
            $data = "\n " . $tag . " " . $imgSpanClass . " " . $imgWidth . " " . $tableContentArray . " " . $ctag . "\n";
        }


        for ($i = 1;$i<=ceil($maxid/$maxcols);$i++) {

            echo "<tr>\n";
            for ($j=1;$j<=$maxcols;$j++)
                if ($startid <= $maxid)
                    echo "  <td class='tHead'>ID" .$startid++."</td>\n";
                else
                    echo "  <td> </td>\n";

            echo "</tr>\n<tr>\n";
            for ($j=1;$j<=$maxcols;$j++)
                echo "<td>$data</td>\n";

            echo "</tr>\n";
        }

        echo "</table>\n";
    }

}

?>


