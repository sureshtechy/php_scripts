<?php
    $myfile = fopen("text.txt", "r") or die("Unable to open file!");
    $text = fread($myfile,filesize("text.txt"));
    preg_match_all("/\[[^\]]*\]/", $text, $matches);
    print_r($matches);
    var_dump($matches[0]);
    fclose($myfile);
?>

