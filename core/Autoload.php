<?php
function my_autoloader($class)
{
    $array_paths = array(
        '/models/',
        '/controllers/',
        '/core/',
        '/config/',
    );

    foreach ($array_paths as $path) {

        $path = ROOT . $path . $class . '.php';

        if (is_file($path)) {
            include_once $path;
        }
    }
}
spl_autoload_register('my_autoloader');
