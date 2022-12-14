<?php
namespace chapter1\section3;
const NUM = 10;
const MAX = 100;
const MIN = 0;

/**
 * 順位付け（改良版）
 */

main();

function main()
{
    $a = [56, 25, 67, 88, 100, 61, 55, 67, 76, 56];
    $juni = array_fill(0, MAX + 2, 0); // 0クリア
    for ($i=0; $i<NUM; $i++) {
        $juni[$a[$i]] += 1; // 各得点に対応するキーのバリューを+1
    }
    $juni[MAX+1] = 1;
    for ($i=MAX; $i>=MIN; $i--) {
        $juni[$i] = $juni[$i]+$juni[$i+1]; // 1つ右の要素のバリューを加える
    }
    print("  得点  順位 \n");
    for ($i=0; $i<NUM; $i++) {
        print(sprintf("%6d%6d\n", $a[$i], $juni[$a[$i]+1]));
    }
}