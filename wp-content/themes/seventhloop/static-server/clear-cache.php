<?php
// Spark Clear Cache

function empty_dir($dir) { // Recursively delete all files and folders within the specified folder
    foreach(glob($dir . '/*') as $file) {
        if(is_dir($file)) {
            empty_dir($file);
			echo "Deleted directory: ".$file."<br />\n\r";
		} else {
            unlink($file);
			echo "Deleted file: ".$file."<br />\n\r";
		}
    }
	if (is_dir($dir)) {
		rmdir($dir);
		echo "Deleted directory: ".$dir."<br />\n\r";
	} else {
		echo "Cache is already empty";
	}
}

empty_dir("cache");
