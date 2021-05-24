<?php

//namespace Brain\Games\Cli;

function in(string $greet): string
{
    echo $greet, ' ';
    return trim((string)fgets(STDIN));
}
