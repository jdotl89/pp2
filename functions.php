<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

function printArr($array) {

    foreach($array as $i) {
        echo "$i <br>";
    }
}

function largest($array) {
    $largest = 0;
    foreach ($array as $i) {
        if($i > $largest) {
            $largest = $i;
        }
    }

    return $largest;
}

function removeDups($array) {
    $newArray = array_unique($array);

    return $newArray;
}

function distribution($array) {
    sort($array);
    $count = 0;
    $distribute = array();
    foreach($array as $i) {
        foreach($array as $j) {
            if($i == $j) {
                $count++;
            }
        }
        $distribute[$i] = $count;
        $count = 0;
    }

    return $distribute;
}
?>