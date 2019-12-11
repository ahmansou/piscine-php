#!/usr/bin/php
<?php
if ($argc == 4)
{
    $x = trim($argv[1]);
    $op = trim($argv[2]);
    $y = trim($argv[3]);
    if ($op == '+')
        echo $x + $y;
    else if ($op == '-')
        echo $x - $y;
    else if ($op == '*')
        echo $x * $y;
    else if (($op == '/' || $op == '%') && $y == 0)
        echo "You can't devide on 0";
    else if ($op == '/')
        echo $x / $y;
    else if ($op == '%')
        echo $x % $y;
}
else
    echo "Incorrect Parameters";
?>