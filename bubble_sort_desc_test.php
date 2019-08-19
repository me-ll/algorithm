<?php
/*
Test code for bubble_sort_desc.php

Bubble sort in descending order
バブルソート　降順
*/

// -- File for test --
require "bubble_sort_desc.php";

// -- Arrays to check --
$test_arrays[0] = array(9,8,7,6,5,4,3,2,1,0);
$test_arrays[1] = array(0,1,2,3,4,5,6,7,9,8);
$test_arrays[2] = array(0,1,2,3);
$test_arrays[3] = array(10,8,11,2,3,4,5,6,100,7,9,30,600,21,0);
$test_arrays[4] = array(0,1,2,3); //false

foreach($test_arrays as $key => $test_array){

    echo $key.":";

    $test_result = bubbleSortDesc($test_array);

    //false
    if($key === 4){
        $test_result = $test_arrays[4];
    }

    $test_count  = count($test_result);

    $islarge = true;
    for($i = 0; $i < $test_count-1; $i++){ //Not to check last value

        //if the left value is greater than its right one
        if($test_result[$i] < $test_result[$i+1] ){
            $islarge = false;
        }

        if($islarge === false){
            echo "NG\n";
            print_r($test_result);
            break;
        }
    }

    if($islarge === true){
        echo "OK\n";
    }

}

/*
Output:

0:OK
1:OK
2:OK
3:OK
4:NG
Array
(
    [0] => 0
    [1] => 1
    [2] => 2
    [3] => 3
)
*/

?>