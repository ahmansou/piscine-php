#!/usr/bin/php
<?php
if ($argc == 2 && file_exists($argv[1]))
{
	$str = file_get_contents($argv[1]);
	$str = preg_replace_callback("/(<a )(.*?)(>)(.*?)(<\/a>)/", function($a) 
	{
		$a[0] = preg_replace_callback("/( title=\")(.*?)(\")/", function($a)
		{
			return ($a[1]."".strtoupper($a[2])."".$a[3]); }, $a[0]);
		$a[0] = preg_replace_callback("/(>)(.*?)(<)/", function($a)
		{
			return ($a[1]."".strtoupper($a[2])."".$a[3]);}, $a[0]);
		return ($a[0]);
	}, $str);
	echo $str;
} else if ($argc != 2) {
	$arg = $argc - 1;
	echo "There can be only one argument (you have $arg)\n";
} else if (!file_exists($argv[1])) {
	echo "ERROR: Specified file doesn't exist\n";
}
?>