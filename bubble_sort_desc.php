<?php

/*
Bubble sort in descending order
バブルソート　降順
*/

// $arr = array(9,8,7,6,5,4,3,2,1,0);
// $arr = array(0,1,2,3,4,5,6,7,9,8);
// $arr = array(0,1,2,3);
$arr = array(10,8,11,2,3,4,5,6,100,7,9,30,600,21,0);

$cnt = count($arr);
$the_number_of_arr = $cnt-1;

for($ii = $the_number_of_arr; $ii >= 0; $ii--){

    $is_changed = false;

    // for($i = $the_number_of_arr; $i > 0; $i--){ //extra loop
    for($i = $the_number_of_arr; $i > $the_number_of_arr - $ii; $i--){

        $current = $i;
        $next    = $i - 1;

        if($arr[$next]  < $arr[$current]){

            $tmp = $arr[$current];
            $arr[$current] = $arr[$next];
            $arr[$next] = $tmp;

            $is_changed = true;
        }

    }

    //It's done whern it is not chenged anything.
    if($is_changed === false){
        break;
    }

}

print_r($arr);
/*
$arr = array(10,8,11,2,3,4,5,6,100,7,9,30,600,21,0);

Array
(
    [0] => 600
    [1] => 100
    [2] => 10
    [3] => 30
    [4] => 21
    [5] => 8
    [6] => 11
    [7] => 9
    [8] => 7
    [9] => 6
    [10] => 5
    [11] => 2
    [12] => 4
    [13] => 3
)
*/
?>
