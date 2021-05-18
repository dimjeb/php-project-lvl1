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

function Progression($length)
{
    $result = []; // массив с результатами
    $temp = rand(1, 5); // инкремент
    $result[0] = rand(1, 20); // первое число

    for($i = 1; $i <= $length - 1; $i++)
    {
            $result[] = $result[$i - 1] + $temp;
    }
    return $result;
}

function prime($number)
{
    for($i = 2; $i < $number; $i++)
    {
        if($number % $i == 0)
        {
            return false;
        }
    }
    return true;
}