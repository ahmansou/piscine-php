#!/usr/bin/php
<?php
if ($argc > 1)
{
    // $str = "\tdfdfd  \t   \t \t \t \t  fddf ";
    $arr = preg_replace("/\t+/", " ", trim($argv[1]));
    $arr = preg_replace("/ +/", " ", trim($arr));
    echo $arr;
}