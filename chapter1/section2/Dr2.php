<?php
namespace chapter1\section2;

/**
 * 暗号の解読
 */

main();

function main()
{
    $abc = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I',
        'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
        'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
    ];
    $table = [
        'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O',
        'P', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K',
        'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M', '?'
    ];
    
    $ango = 'KSOIDHEPZ';
    $p = str_split($ango);
    for ($i=0; $i<=count($p)-1; $i++) {
        $key = current(array_keys($abc, $p[$i]));
        if (array_key_first($abc) <= $key && $key <= array_key_last($abc)) {
            $index = $key - current(array_keys($abc, 'A'));
        } else {
            $index = 26;
        }
        print ($table[$index]);
    }
    print("\n");
}