<?php
namespace chapter1\section4;

/**
 * ランダムな順列（効率の悪い方法）
 */

(new Test)->main();

class Test
{
    public const N = 20;

    public function main()
    {
        $a[1] = rand(0, self::N); // 1~Nの乱数を一つ得る。これを順列($a)の1番目のデータとする
        $flag = 1;
        for ($i=2; $i<=self::N; $i++) {
            do {
                $a[$i] = rand(0, self::N); $flag=0; // 1~Nの乱数を一つ得る
                for ($j=1; $j<$i; $j++) { // $a[$i]で求めた乱数が既に$aの中に存在する場合乱数を再取得する
                    if ($a[$i] == $a[$j]) {
                        $flag=1; break;
                    }
                }
            } while ($flag==1);
        }
        
        for ($i=1; $i<=self::N; $i++) {
            print(sprintf("%d ", $a[$i]));
        }
        print("\n");
    }
}