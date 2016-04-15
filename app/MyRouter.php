<?php

/**
 * Created by: Shane Jansen
 * Date: 4/15/16
 */

namespace app;

use app\controllers\MainController;
use app\controllers\NotFoundController;
use app\controllers\Page2Controller;

spl_autoload_register(function ($class)
{
    $class = str_replace('\\', '/', $class);
    $path = dirname($_SERVER['DOCUMENT_ROOT']) . '/' . $class . '.php';
    require $path;
});

class MyRouter extends Router
{

    public function routePage($urlParts)
    {
        switch ($urlParts[0]) {
            case '':
                return new MainController();
                break;
            case 'page2':
                return new Page2Controller();
                break;
            default:
                return new NotFoundController();
        }
    }
}
