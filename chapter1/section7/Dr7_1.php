<?php
namespace chapter1\section7;
const NUM = 1000;
/**
 * エラトステネスのふるい
 * 素数の判定
 */

main();

function main()
{
    $prime = [];
    $m = 0;
    
    for ($n=2; $n<=NUM; $n++) {
        $Limit = (int)sqrt($n);
        for ($i = $Limit; $i>1; $i--) {
            if ($n % $i == 0)
            break;
        }
        if ($i == 1) 
            $prime[$m++] = $n;
    }

    printf("\n 求められた素数 \n");
    for ($i=0; $i<$m; $i++) {
        printf("%5d", $prime[$i]);
    }
    printf("\n");
}