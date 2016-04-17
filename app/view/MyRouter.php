<?php

/**
 * Created by: Shane Jansen
 * Date: 4/15/16
 */

namespace app\view;

use app\view\controllers\EditController;
use app\view\controllers\LoginController;
use app\view\controllers\MainController;
use app\view\controllers\NotFoundController;
use app\view\controllers\Page2Controller;

require_once dirname($_SERVER['DOCUMENT_ROOT']) . '/app/AutoLoader.php';

class MyRouter extends Router {
    public function routePage($urlParts) {
        switch ($urlParts[0]) {
            case '':
                return new MainController();
                break;
            case 'login':
                return new LoginController();
                break;
            case 'edit':
                return new EditController();
                break;
            case 'page2':
                return new Page2Controller();
                break;
            default:
                return new NotFoundController();
        }
    }
}
