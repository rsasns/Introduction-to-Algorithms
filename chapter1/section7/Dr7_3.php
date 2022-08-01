<?php
namespace chapter1\section7;
const NUM = 1000;
/**
 * 素因数分解
 */

main();

function main()
{
    $n = rand();
    while (printf("Number ? %d\n", $n)) {
        $a=2;
        while ($n>=$a*$a) {
            if ($n % $a == 0) {
                printf("%d*", $a); $n=$n/$a;
            } else {
                $a++;
            }
        }
        printf("%d\n", $n);
        break;
    }
}