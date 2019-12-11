#!/usr/bin/php
<?php
$file = fopen("/var/run/utmpx", "rb");
echo "file _".$file."\n";
while (!feof($file))
{
	$data = fread($file, 628);
	// macos utmpx record is 628 bytes 0-256 of which are for username 256-260 (4) for terminal id 260-292 for terminal line
	if (strlen($data) == 628)
	{
		echo "data _".$data."\n";
		$data = unpack("a256user/a4id/a32line/ipid/itype/itime", $data);
		// a string i integer
		if ($data['type'] == 7)
		{
			echo trim($data['user']) . " ";
			echo trim($data['line']) . "  ";
			$time = date("M d H:i", $data['time']);
			echo $time . " \n";
		}
	}
}
?>
