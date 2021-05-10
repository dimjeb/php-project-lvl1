<?php
namespace Brain\Games\Cli;
function gcd($num1, $num2)
{
    ($num1 > $num2) ? $min = $num2 : $min = $num1;
    $gcd = 1;
    for ($i = 2; $i <= $min; $i++) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            $gcd = $i;
        }
    }
    return $gcd;
}


function in($greet)
{
    echo $greet, ' ';
    return trim(fgets(STDIN));
}
