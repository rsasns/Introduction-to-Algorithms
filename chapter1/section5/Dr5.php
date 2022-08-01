<?php
namespace chapter1\sction5;
/**
 * モンテカルロ法による面積の計算
 */
const NUM = 1000;

main();

function main()
{
    $in = 0;

    for ($i=0; $i<NUM; $i++) {
        $x = 2 * rnd();
        $y = rnd();
        if ($x * $x/ 4 + $y * $y <= 1) {
            $in++;
        }
    }

    bcscale(6);
    $s = bcmul(4.0, bcmul(2.0, bcdiv($in, NUM)));
    printf("楕円の面積=%f\n", $s);
}

function rnd(): float
{
    return  rand() / getrandmax();
}