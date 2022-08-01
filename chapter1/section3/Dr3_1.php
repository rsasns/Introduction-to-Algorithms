<?php
namespace chapter1\section3;

/**
 * 順位付け（改良版）
 */

(new Test)->main();

class Test
{
    public const NUM = 10;
    public const MAX = 100;
    public const MIN = 0;
    
    public function main()
    {
        $a = [56, 25, 67, 88, 100, 61, 55, 67, 76, 56];
        $juni = array_fill(0, self::MAX + 2, 0); // 0クリア

        for ($i=0; $i<self::NUM; $i++) {
            $juni[$a[$i]] += 1; // 各得点に対応するキーのバリューを+1
        }

        $juni[self::MAX+1] = 1;
        for ($i=self::MAX; $i>=self::MIN; $i--) {
            $juni[$i] = $juni[$i]+$juni[$i+1]; // 1つ右の要素のバリューを加える
        }

        print("  得点  順位 \n");
        for ($i=0; $i<self::NUM; $i++) {
            print(sprintf("%6d%6d\n", $a[$i], $juni[$a[$i]+1]));
        }
    }
}