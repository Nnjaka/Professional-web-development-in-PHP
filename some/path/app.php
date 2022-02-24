<?php

spl_autoload_register(function ($class) {
    $lastPosition = strrpos($class, "\\");
    $namespace = substr($class, 0, $lastPosition + 1);
    $classname = substr($class, $lastPosition + 1);
    $file = str_replace("\\", DIRECTORY_SEPARATOR, $namespace) . str_replace("_", DIRECTORY_SEPARATOR, $classname) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

use Doctrine\Common\ClassLoader;
use my\package\Class\Name;
use my\package_name\Class_Name;

$classLoader = new ClassLoader(
    new Name('Class 1'),
    new Class_Name('Class 2')
);

print $classLoader;
