<?php

/*
・再帰関数（Recursive function）:
関数の中で自身の関数を呼び出す。

・階乗計算（factorial） ex.3!
1からある数までの連続する整数の積
階乗は、正の整数に対して定義されていますので、(-2)! のような「負の数の階乗」や、
1.5! のような「小数値の階乗」は定義されません。0!は後に順列や組合せに関連して、別途定義されます。

1.入力値がマイナス・小数点の時は階乗ではない。1を返す。
2.入力値が0の時、1を返す
3.入力値がそれ以外の時、1からある数までの連続する整数の積を計算する。

- - -

the factorial of a non-negative integer,
is the product of all positive integers less than or equal to this non-negative integer.
5! = 5 * 4 * 3 * 2 * 1 = 120

*/

function factorial($n){

    if($n <= 0){
        return 1;
    }

    // echo $n.' ';
    return $n * factorial($n-1);
}

// $num = 2;
// echo "\n".$num.': ';

// $sum = factorial($num);
// echo "= ".$sum;

/*
Output

2: 2 1 = 2
4: 4 3 2 1 = 24
6: 6 5 4 3 2 1 = 720
*/

?>
