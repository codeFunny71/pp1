<?php
/**
 * Created by PhpStorm.
 * User: marcusabsher
 * Date: 2019-01-04
 * Time: 10:42
 */
function printArr($array){
    foreach($array as $item){
        echo $item."<br>";
    }
    echo "<br>";
}
function largest($array){
    return max($array);
}

function average($array){
    return array_sum ($array)/sizeof($array);
}

function removeDups($array){
    return array_unique($array);
}

/**
 * @param $array
 */
function distribution($array){
    sort($array);

    return array_count_values($array);
}

?>