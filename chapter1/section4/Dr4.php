<?php
namespace chapter1\section4;

/**
 * ランダムな順列（改良版）
 */

(new Test)->main();

class Test
{
    public const N = 20;

    public function main()
    {
        for ($i=1; $i<=self::N; $i++) {
            $a[$i] = $i;
        }

        for ($i=self::N; $i>1; $i--) {
            $j = rand(1,$i-1); // 1~N-1の乱数を$jに入れる
            $d = $a[$i]; // $a[$i]の元々の要素を取得して$dに入れる
            $a[$i] = $a[$j];  // $a[$i]に$a[$j]を入れる
            $a[$j] = $d;    // $a[$j]に$a[$i]の元々の要素を入れる
        }
        
        for ($i=1; $i<=self::N; $i++) {
            print(sprintf("%d ", $a[$i]));
        }
        print("\n");
    }
}