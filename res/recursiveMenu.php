<?php
    /**
     * Created by PhpStorm.
     * User: Rendszergazda
     * Date: 2016.04.18.
     * Time: 17:56
     */

    namespace render;


    class recursiveMenu {
        // recursive function to create multilevel menu list, $parentId 0 is the Root
// function addapted from: http://crisp.tweakblogs.net/blog/317/formatting-a-multi-level-menu-using-only-one-query.html
        function multilevelMenu( $parentId, $ctgLists, $ctgData ) {
            $html = '';       // stores and returns the html code with Menu lists

            // if parent item with child IDs in ctgLists
            if ( isset( $ctgLists[ $parentId ] ) ) {
                $html = '<ul>';      // open UL

                // traverses the array with child IDs of current parent, and adds them in LI tags, with their data from $ctgData
                foreach ( $ctgLists[ $parentId ] as $childId ) {
                    // define CSS class in anchors, useful to be used in CSS style to design the menu
                    if ( $parentId == 0 ) {
                        $clsa = ' class="firsrli"';
                    }       // class for anchors in main /first categories
                    else if ( isset( $ctgLists[ $childId ] ) ) {
                        $clsa = ' class="litems"';
                    }       // class for anchors in lists with childs
                    else {
                        $clsa = '';
                    }

                    // open LI
                    $html .= '<li><a href="' . $ctgData[ $childId ][ 'lurl' ] . '" title="' . $ctgData[ $childId ][ 'lname' ] . '"' . $clsa . '>' . $ctgData[ $childId ][ 'lname' ] . '</a>';

                    $html .= multilevelMenu( $childId, $ctgLists, $ctgData );     // re-calls the function to find parent with child-items recursively

                    $html .= '</li>';      // close LI
                }
                $html .= '</ul>';       // close UL
            }

            return $html;
        }

    }