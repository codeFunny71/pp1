<?php
include 'functions.php';
/**
 * Created by PhpStorm.
 * User: marcusabsher
 * Date: 2019-01-04
 * Time: 10:23
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL | E_STRICT);
    ?>
</head>
<body>

    <?php
        $numbers = array(7,9,8,9,8,8,6);
        echo "Testing printArr() function";
        echo "<br>";
        printArr($numbers);

    ?>
    <br>
    <?php
        echo "Testing largest() function";
        echo "<br>";

        print_r(largest($numbers));
    ?>
    <br><br>
    <?php
        echo "Testing average() function";
        echo "<br>";
        print_r(average($numbers));
    ?>
    <br><br>
    <?php
        echo "Testing removeDups() function";
        echo "<br>";
        //removeDups($numbers);
        printArr(removeDups($numbers));
    ?>
    <br><br>
    <?php
        echo "Testing distribution() function";
        echo "<br>";
        print_r(distribution($numbers));
    ?>


</body>
</html>