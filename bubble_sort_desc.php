<?php

/*
Bubble sort in descending order
*/

// $arr = array(9,8,7,6,5,4,3,2,1,0);
// $arr = array(0,1,2,3,4,5,6,7,9,8);
// $arr = array(0,1,2,3,4,5,6,7,8,9);
$arr = array(10,8,11,2,3,4,5,6,100,7,9,30,600,21);


$cnt = count($arr);

for($ii = $cnt-1; $ii >= 0; $ii--){
    // echo $ii.":";

    
    $is_changed = false;

    for($i = $ii; $i >= $ii-$i; $i--){
        // echo $i." ";

        $current = $i;
        $next    = $i - 1;

        if($arr[$next]  < $arr[$current]){

            $tmp = $arr[$current];
            $arr[$current] = $arr[$next];
            $arr[$next] = $tmp;

            $is_changed = true;
        }

    }

    // echo $ii.":";
    // foreach($arr as $val){
    //     echo $val." ";
    // }
    // echo "<br>";

    //It's done whern it is not chenged anything.
    if($is_changed === false){
        break;
    }

}

print_r($arr);
/*
Array
(
    [0] => 600
    [1] => 10
    [2] => 100
    [3] => 8
    [4] => 11
    [5] => 30
    [6] => 2
    [7] => 3
    [8] => 6
    [9] => 4
    [10] => 5
    [11] => 7
    [12] => 9
    [13] => 21
)
*/
?>
