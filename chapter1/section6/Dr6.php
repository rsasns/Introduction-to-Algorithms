<?php
namespace chapter1\section6;
/**
 * ユークリッドの互除法
 * ２つの整数(m, n)の最大公約数を求める(減算)
 */
main();

function main()
{
    $a = rand();
    $b = rand();

    printf("二つの整数を入力してください ");
    printf("%d %d\n", $a, $b);

    $m = $a; $n = $b;
    do {
        $k = $m % $n;
        $m = $n; $n = $k;         
    } while($k != 0);
    printf("最大公約数=%d\n", $m);
}