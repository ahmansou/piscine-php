#!/usr/bin/php
<?php
function ft_sort($a, $b)
{
    $i = 0;
    echo "\n";
    echo $a. " " .$b. " ";
	$chars = "abcdefghijklmnopqrstuvwxyz0123456789!#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while (($i < strlen($a)) || ($i < strlen($b)))
	{
        echo $a[$i]." ".$b[$i]." | ";
        $ai = stripos($chars, $a[$i]);
		$bi = stripos($chars, $b[$i]);
        if ($ai > $bi)
        {
            echo "{1}";
            return (1);
        }
        else if ($ai < $bi)
        {
            echo "{0}";
			return (0);
        }
		else
			$i++;
	}
}

if ($argc > 1)
{
    $arr = array();
    $i = 0;
    foreach ($argv as $arg)
        if ($i++ > 0)
            $arr = array_merge($arr, preg_split("/ +/", trim($arg)));
    usort($arr, 'ft_sort');
    echo "\n";
    foreach ($arr as $word)
		echo $word."\n";
}
?>

toto tutu 4234 _hop XXX ## 1948372 AhAhAh
toto tutu 4234 _hop XXX ## 1948372 AhAhAh
toto tutu 4234 XXX _hop ## 1948372 AhAhAh