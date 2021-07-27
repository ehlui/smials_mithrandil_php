<?php

function clean_string($replace,$for,$str){
    return str_replace($replace,$for,$str);
}

function extract_files_path_recursivly($path){
    $recursive_iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($path)
    );
    $files = array();
    foreach ($recursive_iterator as $el) {
        if ($el->isDir())
            continue;
        $clean_path=clean_string(
            './','/',$el->getPathname()
        );
        array_push($files,$clean_path);
    }
    return $files;
}