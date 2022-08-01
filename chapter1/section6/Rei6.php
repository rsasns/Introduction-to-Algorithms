<?php
namespace chapter1\section6;
/**
 * ユークリッドの互除法
 * ２つの整数(m, n)の最大公約数を求める(除算)
 */
main();

function main()
{
    $a = rand();
    $b = rand();

    printf("二つの整数を入力してください ");
    printf("%d %d\n", $a, $b);

    $m = $a; $n = $b;
    while ($m != $n) {
        if ($m > $n) {
            $m -= $n;
        } else {
            $n -= $m;
        }
    }
    printf("最大公約数=%d\n", $m);
}