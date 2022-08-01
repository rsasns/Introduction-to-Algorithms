<?php
namespace chapter1\section1;

/**
 * Hornerの方法
 */

(new Test)->main();

class Test
{
    public function main(): void
    {
        $a = [1, 2, 3, 4, 5]; // 係数
        for ($x=1; $x<=5; $x++) {
            print(sprintf("fn(%f)=%f\n", $x, $this->fn($x, $a, 4)));
        }
    }

    public function fn(float $x, array $a, int $n)
    {
        $p = $a[$n];
        for ($i=$n-1; $i>=0; $i--) {
            $p = $p * $x + $a[$i];
        }
        return $p;
    }
}