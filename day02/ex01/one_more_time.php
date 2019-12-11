#!/usr/bin/php
<?php
if ($argc > 1)
{
    $days = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
    $months = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
    $days_cap = array_map('ucfirst', $days);
    $months_cap = array_map('ucfirst', $months);

    if (substr_count($argv[1], " ") == 4)
    {
        $date = explode(" ", $argv[1]);
        if ((!in_array($date[0], $days) && !in_array($date[0], $days_cap)) ||
        (!in_array($date[2], $months) && !in_array($date[2], $months_cap)) ||
            !($date[1] > 0 && $date[1] <= 31) || !is_numeric($date[1]) || !is_numeric($date[3]))
        {
            echo "Wrong Format";
            goto error;
        }
        if (in_array($date[2], $months))
            $month = array_search($date[2] ,$months) + 1;
        if (in_array($date[2], $months_cap))
            $month = array_search($date[2] ,$months_cap) + 1;
        $day = $date[1];
        $year = $date[3];
        $hour = explode(":", $date[4]);
        $h = $hour[0];
        $m = $hour[1];
        $s = $hour[2];
        echo $year."/".$month."/".$day." ".$h.":".$m.":".$s;

        $seconds = $year * 31536000 + $month * 2628000 + $day * 86400 + $h * 3600 + $m * 60 + $s - 503.25 * 31536000;
        echo "\n".$seconds;
        echo "\n1384254141";
        $seconds -= 62125920000;
        echo "\n".$seconds;
        error:
    }
    else
        echo "Wrong Format";
}