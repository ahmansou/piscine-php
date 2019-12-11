#!/usr/bin/php
<?php
if ($argc > 1)
{
	$arr = preg_split("/ +/", trim($argv[1]));
	foreach ($arr as $word)
	{
		echo $word;
		if (end($arr) != $word)
			echo " ";
	}
}
?>
