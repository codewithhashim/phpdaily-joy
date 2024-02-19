<?php
spl_autoload_register("cwhAutoLoader");

function cwhAutoLoader($className)
{
    $path = "classes/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;
    if (file_exists($fullPath)) {
        include_once $fullPath;
    } else {
        echo "Class file not found: " . $fullPath;
    }
}
