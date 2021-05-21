<?php

//namespace Brain\Games\Cli;

function in($greet)
{
    echo $greet, ' ';
    return trim(fgets(STDIN));
}
