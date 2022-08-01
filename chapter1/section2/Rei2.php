<?php
namespace chapter1\section2;

/**
 * 度数分布（ヒストグラム）
 */

(new Test)->main();

class Test
{
    private const NUM = 20;

    public function main(): void
    {
        $a = [35, 25, 56, 78, 43, 66, 71, 73, 80, 90,
                0, 73, 35, 65, 100, 78, 80, 85, 35, 50];
        $histo = [];

        for ($i=0; $i<=10; $i++) {
            $histo[$i] = 0;
        }

        for ($i=0; $i<=Test::NUM; $i++) {
            $rank = $a[$i] / 10; // 写像
            if (0 <= $rank && $rank <= 10) {
                $histo[$rank]++;
            }
        }

        for ($i=0; $i<=10; $i++) {
            print(sprintf("%3d - :%3d\n", $i * 10, $histo[$i]));
        }
    }
}