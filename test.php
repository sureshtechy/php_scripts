<?php
	$myfile = fopen("text.txt", "r") or die("Unable to open file!"); // file opening 
    $text = fread($myfile,filesize("text.txt")); // file reading and store into variable
    preg_match_all("/\[[^\]]*\]/", $text, $matches); // finding text in square brackets     
    echo "<pre>";
    var_dump($matches[0]); // Printing text in square brackets
    echo "</pre>";
    fclose($myfile); // closing file
?>

