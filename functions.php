<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

function printArr($array) {

    foreach($array as $i) {
        echo "$i <br>";
    }
}
?>