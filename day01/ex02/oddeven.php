#!/usr/bin/php
<?php
$number = readline("Enter a number: ");
if ($number)
{
	if (is_numeric($number))
	{
		if ($number % 2 == 0)
			echo "The number " . $number . " is even\n";
		else
			echo "The number " . $number . " is odd\n";
	}
	else
		echo "'" . $number . "' is not a number\n";
}
?>