<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

/* Name: John Laygo
   Date: 04/17/2020
   URl:
   Pair Program 2
*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program</title>
</head>
<body>
<h1>Pair Program 2</h1>
<?php

echo "PHP Array Practice<br><br>";

echo "Step 2 <br><br>";
$numbers = array(7, 9, 8, 9, 8, 8, 6);

function printArr($array) {

    foreach($array as $i) {
        echo "$i <br>";
    }
}

printArr($numbers);

?>

</body>
</html>
