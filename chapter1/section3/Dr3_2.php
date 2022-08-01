<?php
namespace chapter1\section3;

/**
 * 順位付け（負のデータ版）
 */

(new Test)->main();

class Test
{
    public const NUM = 10;
    public const MAX = 36;
    public const MIN = -20;
    public const BIAS = 1 - self::MIN;

    public function main()
    {
        $a = [-3, 2, 3, -1, -2, -6, 2, -1, 1, 5];
        $juni = array_fill(0, self::MAX + self::BIAS +1, 0); // 0クリア

        for ($i=0; $i<self::NUM; $i++) {
            $juni[$a[$i]+self::BIAS] += 1; // 各得点に対応するキーのバリューを+1
        }

        $juni[0] = 1;
        for ($i=self::MIN+self::BIAS; $i<=self::MAX+self::BIAS; $i++) {
            $juni[$i] = $juni[$i]+$juni[$i-1]; // 1つ左の要素のバリューを加える
        }

        print("  得点  順位 \n");
        for ($i=0; $i<self::NUM; $i++) {
            print(sprintf("%6d%6d\n", $a[$i], $juni[$a[$i]+self::BIAS-1]));
        }
    }
}