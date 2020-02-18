<?php
function readAllText($file){
    
    $myfile = fopen($file, "r") or die("Unable to open file!");
    $text = fread($myfile, filesize($file));
    fclose($myfile);
    return $text;
}

function readJson($file){
    return json_decode(readAllText($file));
}

function loop($list, $func){
    for($i = 0; $i < sizeof($list);$i++){
        $func($list[$i], $i);
    }
}