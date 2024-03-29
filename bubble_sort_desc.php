<?php
/*
Bubble sort in descending order
バブルソート　降順
*/

function bubbleSortDesc($arr){

    $the_number_of_arr = count($arr)-1;

    for($ii = $the_number_of_arr; $ii >= 0; $ii--){
        $is_changed = false;

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
            // break;
            return $arr;
        }
    }
}



// $check_arr = array(10,8,11,2,3,4,5,6,100,7,9,30,600,21,0);
// $result = bubbleSortDesc($check_arr);
// print_r($result);

/*
//$check_arr = array(10,8,11,2,3,4,5,6,100,7,9,30,600,21,0);

Output:
Array
(
    [0] => 600
    [1] => 100
    [2] => 30
    [3] => 21
    [4] => 11
    [5] => 10
    [6] => 9
    [7] => 8
    [8] => 7
    [9] => 6
    [10] => 5
    [11] => 4
    [12] => 3
    [13] => 2
    [14] => 0
)
*/
?>
