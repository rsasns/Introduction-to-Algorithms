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
    
    for ($i=2; $i<=NUM; $i++) {
        $prime[$i] = 1;
    }

    $Limit = (int)sqrt(NUM);
    for ($i=2; $i<=$Limit; $i++) {
        if ($prime[$i]==1) {
            for ($j=2*$i; $j<=NUM; $j++) {
                if ($j%$i==0)
                    $prime[$j] = 0;
            }
        }
    }

    printf("\n 求められた素数 \n");
    for ($i=2; $i<=NUM; $i++) {
        if ($prime[$i]==1)
            printf("%5d", $i);
    }
    printf("\n");
}