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

?>