#!/usr/bin/php
<?php
if ($argc > 1)
{
    $arr = preg_split("/ +/", trim($argv[1]));
    $i = 0;
    foreach ($arr as $word)
        if ($a++ != 0)
            echo $word." ";
    echo $arr[0];
}
?>