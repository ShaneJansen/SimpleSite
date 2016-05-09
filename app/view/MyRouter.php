<?php

/**
 * Created by: Shane Jansen
 * Date: 4/15/16
 */

namespace app\view;

use app\view\controllers\BasicPageController;
use app\view\controllers\EditController;
use app\view\controllers\LoginController;
use app\view\controllers\MainController;
use app\view\controllers\NotFoundController;

require_once dirname($_SERVER['DOCUMENT_ROOT']) . '/app/AutoLoader.php';

class MyRouter extends Router {
    public function routeGet($urlParts) {
        switch ($urlParts) {
            case '/': return new Route(new MainController(), 'getMain'); break;
            case '/login': return new Route(new LoginController(), 'getLogin'); break;
            case '/login/logout': return new Route(new LoginController(), 'getLogout'); break;
            case '/edit': return new Route(new EditController(), 'getEdit'); break;

            // About pages
            case '/vision-and-mission': return new Route(new BasicPageController(), 'getBasicPage'); break;
            case '/executive-office': return new Route(new BasicPageController(), 'getBasicPage'); break;
            case '/by-laws-and-policies': return new Route(new BasicPageController(), 'getBasicPage'); break;
            case '/kacada-leadership': return new Route(new BasicPageController(), 'getBasicPage'); break;
            case '/elections': return new Route(new BasicPageController(), 'getBasicPage'); break;
            case '/history': return new Route(new BasicPageController(), 'getBasicPage'); break;

            // More pages
            case '/events-and-programs': return new Route(new BasicPageController(), 'getBasicPage'); break;
            case '/contact': return new Route(new BasicPageController(), 'getBasicPage'); break;
        }
        return new Route(new NotFoundController(), 'getNotFound');
    }

    public function routePost($urlParts) {
        switch ($urlParts) {
            case '/login': return new Route(new LoginController(), 'postLogin');
            case '/edit': return new Route(new EditController(), 'postEdit');
        }
        return new Route(new NotFoundController(), 'getNotFound');
    }
}
