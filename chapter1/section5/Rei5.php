<?php
namespace chapter1\sction5;
/**
 * モンテカルロ法によるπの計算
 */
const NUM = 100;

main();

function main()
{
    $in = 0;

    for ($i=0; $i<NUM; $i++) {
        $x = rnd();
        $y = rnd();
        if ($x * $x + $y * $y <= 1) {
            $in++;
        }
    }

    bcscale(6);
    $pai = bcmul(4, bcdiv($in, NUM));
    printf("πの値=%f\n", $pai);
}

function rnd(): float
{
    return  rand() / getrandmax();
}