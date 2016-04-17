<?php
/**
 * Created by Shane Jansen.
 * Date: 4/17/16
 */

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    $path = dirname($_SERVER['DOCUMENT_ROOT']) . '/' . $class . '.php';
    require $path;
});
