<?php
namespace chapter1\section1;

/**
 * 漸化式
 * n個の中からr個選ぶ組み合わせの数(nCr)を求める
 */

(new Test)->main();

class Test
{
    public function main(): void
    {
        for ($n=0; $n<=5; $n++) {
            for ($r=0; $r<=$n; $r++) {
                print(sprintf("%dC%d=%ld ", $n, $r, $this->combi($n, $r)));
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