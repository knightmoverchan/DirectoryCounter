<?php
$count = new FilesystemIterator(__DIR__, FilesystemIterator::SKIP_DOTS);
$files  = iterator_count($count);
$size = getSize();
$toPrint = array("count: " => $files, "total_size: " => $size);

var_dump(json_encode($toPrint));


function getSize()
{
    $size = 0;
    foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator("./")) as $file){
        $size+=$file->getSize();
    }
    return $size;
}

?>