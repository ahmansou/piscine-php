#!/usr/bin/php
<?php
if ($argc == 2)
{
    $dir = str_replace(["http://", "https://"], "", $argv[1]);
    if (!file_exists($dir))
        mkdir($dir);
    $htmlString = file_get_contents($argv[1]);
    $htmlDom = new DOMDocument;
    @$htmlDom->loadHTML($htmlString);
    $imageTags = $htmlDom->getElementsByTagName('img');
    $extractedImages = array();
    
    foreach($imageTags as $imageTag)
    {
        $imgSrc = $imageTag->getAttribute('src');
        $imgfile = preg_replace("/(\/)(.*?)(\/)/", "", $imgSrc);
        $imgfile = preg_replace("/(.*?)(\/)/", "", $imgSrc);
        $htps = "https://".$dir;
        $htp = "http://".$dir;
        if (!strstr($imgSrc, $dir))
            $imgSrc = "http://".$dir.$imgSrc;
        file_put_contents($dir."/".$imgfile, file_get_contents($imgSrc)); 
    }
}
?>