<?php

$file = "a_huge_file.txt";

echo memory_get_usage() . "\n";

$file_handle = fopen($file, "r") or die("Unable to open file!");

function file_line_generator() {
    global $file_handle;
    // Output one line until end-of-file
    while(!feof($file_handle)) {
        yield fgets($file_handle);
    }
}
foreach(file_line_generator() as $line) {
    // do something with $line;
}
fclose($file_handle);
echo memory_get_usage() . "\n";
