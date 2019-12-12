#!/usr/bin/php
<?php
$file = fopen("/var/run/utmpx", "r");
date_default_timezone_set("Europe/Paris");
while (!feof($file))
{
	$utmpx = fread($file, 628);
	// macos utmpx record is 628 bytes 0-256 of which are for username 256-260 (4) for terminal id 260-292 for terminal line
	// echo $utmpx;
	if (strlen($utmpx) == 628)
	{
		// echo "data _".$data."\n";
		// https://github.com/libyal/dtformats/blob/master/documentation/Utmp%20login%20records%20format.asciidoc
		// $utmpx = unpack("A256username/C4terminal_indentifier/A32terminal/C4pid/itypeoflogin/@298/i4time/i4seconds", $utmpx);
		// var_dump($utmpx);
		$utmpx = unpack("A256username/A4tid/A32terminal/A4pid/Itype/Itime", $utmpx);
		// A string I integer
		if ($utmpx['type'] == 7)
			echo trim($utmpx['username'])." ".trim($utmpx['terminal'])."  ".date("M d H:i", $utmpx['time'])."\n";
	}
}
?>
