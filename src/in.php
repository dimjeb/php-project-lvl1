<?php

//namespace Brain\Games\Cli;

function in(string $greet)
{
    echo $greet, ' ';
    return trim(fgets(STDIN));
}
