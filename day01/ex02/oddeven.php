#!/usr/bin/php
<?php
$stdin = fopen('php://stdin', 'r');
while (1)
{
	echo "Enter a number: ";
	$number = fgets(STDIN);
	$number = str_replace("\n", "", $number);
	if (is_numeric($number))
	{
		if ($number % 2 == 0)
			echo "The number ".$number." is even\n";
		else
			echo "The number ".$number." is odd\n";
	}
	else
		echo "'".$number."' is not a number\n";
}
?>