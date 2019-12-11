#!/usr/bin/php
<?php
function ft_sort($a, $b)
{
    $i = 0;
	$chars = "abcdefghijklmnopqrstuvwxyz0123456789!#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while (($i < strlen($a)) || ($i < strlen($b)))
	{
        $ai = stripos($chars, $a[$i]);
		$bi = stripos($chars, $b[$i]);
        if ($ai > $bi)
            return (1);
        else if ($ai < $bi)
			return (0);
		else
			$i++;
	}
}

if ($argc > 1)
{
    $arr = array();
    $i = 0;
    foreach ($argv as $arg)
        if ($i++ > 0 && $arg != "")
            $arr = array_merge($arr, preg_split("/ +/", trim($arg)));
    usort($arr, 'ft_sort');
    // echo "\n";
    foreach ($arr as $word)
		echo $word."\n";
}
?>