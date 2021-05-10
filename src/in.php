<?php
function in($greet)
{
    echo $greet, ' ';
    return trim(fgets(STDIN));
}
