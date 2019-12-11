#!/usr/bin/php
<?php
if ($argc > 1)
{
    $arr = array();
    $i = 0;
    foreach ($argv as $arg)
        if ($i++ > 0 && $arg != "")
            $arr = array_merge($arr, preg_split("/ +/", trim($arg)));
    sort($arr);
    foreach ($arr as $word)
		echo $word."\n";
}
?>