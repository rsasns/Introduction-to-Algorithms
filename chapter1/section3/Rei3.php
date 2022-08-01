<?php
namespace chapter1\section3;

/**
 * 順位付け
 */

(new Test)->main();

class Test
{
    public const NUM = 10;
    
    public function main()
    {
        $a = [56, 25, 67, 88, 100, 61, 55, 67, 76, 56];
        $juni = [];

        for ($i=0; $i<self::NUM; $i++) {
            $juni[$i] = 1;
            for ($j=0; $j<self::NUM; $j++) {
                if ($a[$j]>$a[$i]) {
                    $juni[$i]++;
                }
            }
        }

        print("  得点  順位 \n");
        for ($i=0; $i<self::NUM; $i++) {
            print(sprintf("%6d%6d\n", $a[$i], $juni[$i]));
        }
    }
}