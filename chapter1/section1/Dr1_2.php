<?php
namespace chapter1\section1;

/**
 * Pascalの三角形
 */

(new Test)->main();

class Test
{
    private const N = 12;

    public function main(): void
    {
        for ($n=0; $n<=self::N; $n++) {
            for ($t=0; $t<(self::N-$n)*3;$t++) { // 空白
                print(" ");
            }
            for ($r=0; $r<=$n; $r++) {
                print(sprintf("%3ld  ", $this->combi($n, $r)));
            }
            print("\n");
        }
    }

    public function combi(int $n, int $r)
    {
        $p = 1;
        for ($i=1; $i<=$r; $i++) {
            $p = $p * ($n - $i + 1) / $i;
        }
        return $p;
    }
}