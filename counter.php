<?php

$filesandSize = getFileAndSize();
var_dump(json_encode($filesandSize));

function getFileAndSize()
{
    $size = 0;
    $files = 0;
    foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator("./files_dir")) as $file){
        $size+=$file->getSize();
        $files++;
    }
    $size = number_format( ((int) $size)/1000000, 1);
    $return = array("count: " => $files, "total_size: " => $size);
    return $return;
}
