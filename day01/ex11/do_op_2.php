#!/usr/bin/php
<?php
if ($argc == 2)
{
    $oper = array("+", "-", "*", "/", "%");
    $par = preg_replace("/ +/", "", trim($argv[1]));
    $isop = 0;
    foreach ($oper as $ope)
        if (strstr($par, $ope))
            $isop = 1;
    if ($isop == 1)
    {
        foreach ($oper as $ope)
        {
            if (strstr($par, $ope))
            {
                if (substr_count($par, $ope) > 1)
                {
                    echo "Syntax Error";
                    break;
                }
                $arr = explode($ope, $par);
                $op = $ope;
                $x = $arr[0];
                $y = $arr[1];
                if (!is_numeric($x) || !is_numeric($y))
                {
                    echo "Syntax Error";
                    break;
                }
                if ($op == '+')
                    echo $x + $y;
                else if ($op == '-')
                    echo $x - $y;
                else if ($op == '*')
                    echo $x * $y;
                else if ($op == '/')
                    echo $x / $y;
                else if ($op == '%')
                    echo $x % $y;
                break;
            }
        }
    }
    else
        echo "Syntax Error";
}
else
    echo "Incorrect Parameters";
?>