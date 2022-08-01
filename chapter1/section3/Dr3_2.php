<?php
namespace chapter1\section3;
const NUM = 10;
const MAX = 36;
const MIN = -20;
const BIAS = 1 - MIN;

/**
 * 順位付け（負のデータ版）
 */

main();

function main()
{
    $a = [-3, 2, 3, -1, -2, -6, 2, -1, 1, 5];
    $juni = array_fill(0, MAX + BIAS +1, 0); // 0クリア
    for ($i=0; $i<NUM; $i++) {
        $juni[$a[$i]+BIAS] += 1; // 各得点に対応するキーのバリューを+1
    }
    $juni[0] = 1;
    for ($i=MIN+BIAS; $i<=MAX+BIAS; $i++) {
        $juni[$i] = $juni[$i]+$juni[$i-1]; // 1つ左の要素のバリューを加える
    }
    print("  得点  順位 \n");
    for ($i=0; $i<NUM; $i++) {
        print(sprintf("%6d%6d\n", $a[$i], $juni[$a[$i]+BIAS-1]));
    }
}