#!/usr/bin/php
<?php
if ($argc > 2)
{
    $skey = $argv[1];
    $i = 0;
    $val = "";
    foreach ($argv as $arg)
    {
        if ($i++ > 1 && substr_count($arg, ":") == 1)
        {
            $arr = explode(":", $arg);
            if ($arr[0] == $skey)
                $val = $arr[1];
        }
    }
    echo $val;
}
?>