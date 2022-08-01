<?php
namespace chapter1\section3;
const NUM = 10;

/**
 * 順位付け
 */

main();

function main()
{
    $a = [56, 25, 67, 88, 100, 61, 55, 67, 76, 56];
    $juni = [];
    for ($i=0; $i<NUM; $i++) {
        $juni[$i] = 1;
        for ($j=0; $j<NUM; $j++) {
            if ($a[$j]>$a[$i]) {
                $juni[$i]++;
            }
        }
    }
    print("  得点  順位 \n");
    for ($i=0; $i<NUM; $i++) {
        print(sprintf("%6d%6d\n", $a[$i], $juni[$i]));
    }
}