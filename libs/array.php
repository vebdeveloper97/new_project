<?php


/**
 * @param $array
 * @return array
 */
function getArray($array)
{
    if (!empty($array)) {
        echo "<pre>";
            print_r($array);
        echo "</pre>";
    } else {
       return [];
    }
}