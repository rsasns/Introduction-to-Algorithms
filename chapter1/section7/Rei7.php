<?php
namespace chapter1\section7;
/**
 * エラトステネスのふるい
 * 素数の判定
 */

main();

function main()
{
    $n = rand();

    while(printf("data? %d", $n)) {
        if ($n>=2) {
            $Limit = sqrt($n);
            for ($i = $Limit; $i>1; $i--) {
                if ($n % $i == 0)
                break;
            }
            if ($i == 1) {
                printf("素数\n");
            } else {
                printf("素数でない\n");
                break;
            }
        }
    }
}