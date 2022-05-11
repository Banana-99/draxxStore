<?php
//Autoloader function
function autoloader($class)
{
    // autoload all the classes in the classes folder
    $class = strtolower($class);
    $path = "./backend/{$class}.class.php";
    if (file_exists($path)) {
        require_once $path;
    }
}

//Register the autoloader
spl_autoload_register("autoloader");