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
    public function routeGet($urlParts) {
        switch ($urlParts) {
            case '/': return new Route(new MainController(), 'getMain'); break;
            case '/login': return new Route(new LoginController(), 'getLogin'); break;
            case '/login/logout': return new Route(new LoginController(), 'postLogout'); break;
            case '/edit': return new Route(new EditController(), 'getEdit'); break;
        }
        return new Route(new NotFoundController(), 'getNotFound');
    }

    public function routePost($urlParts) {
        switch ($urlParts) {
            case '/login': return new Route(new LoginController(), 'postLogin');
        }
        return new Route(new NotFoundController(), 'getNotFound');
    }
}
