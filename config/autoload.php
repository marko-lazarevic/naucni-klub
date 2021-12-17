<?php

spl_autoload_register(function($className) {
    $paths = array(
        "config",
        "components",
    );

	$file = $className . '.php';
    foreach($paths as $path){
	    if (file_exists("./".$path."/".$file)) {
		    include "./".$path."/".$file;
	    }
    }
});
?>