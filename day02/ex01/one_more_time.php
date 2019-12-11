#!/usr/bin/php
<?php
if ($argc == 2)
{
    $days = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
    $months = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
    $days_cap = array_map('ucfirst', $days);
    $months_cap = array_map('ucfirst', $months);

    if (substr_count($argv[1], " ") == 4)
    {
        $date = explode(" ", $argv[1]);
        if (!(strlen($date[1]) == 1 || strlen($date[1]) == 2) ||
            (!in_array($date[0], $days) && !in_array($date[0], $days_cap)) ||
            (!in_array($date[2], $months) && !in_array($date[2], $months_cap)) ||
            !($date[1] > 0 && $date[1] <= 31) || !is_numeric($date[1]) ||
            !is_numeric($date[3]) || strlen($date[3]) != 4)
        {
            echo "Wrong Format";
            goto error;
        }
        $hour = explode(":", $date[4]);
        $h = $hour[0];
        $m = $hour[1];
        $s = $hour[2];
        if (strlen($h) != 2 || strlen($m) != 2 || strlen($s) != 2 ||
            $h > 24 || $m > 60 || $s > 60)
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
        $str = $year."/".$month."/".$day." ".$h.":".$m.":".$s; 
        $time = strtotime($str);
        $t = strtotime("1970/01/01 01:00:00");
        $time -= $t;
        echo $time;
        error:
    }
    else
        echo "Wrong Format";
}