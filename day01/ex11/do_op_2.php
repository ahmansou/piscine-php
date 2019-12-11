#!/usr/bin/php
<?php
if ($argc == 2)
{
    $par = preg_split("/ +/", trim($argv[1]));
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