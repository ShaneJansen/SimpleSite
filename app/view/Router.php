<?php

/**
 * Created by: Shane Jansen
 * Date: 4/15/16
 */

namespace app\view;

abstract class Router {
    public abstract function routeGet($urlParts);
    public abstract function routePost($urlParts);

    public function run() {
        $requestUri = $_SERVER['REQUEST_URI'];
        $route = new \stdClass();
        $page = '';
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $route = $this->routeGet($requestUri);
            $page = $route->getController()->{$route->getMethod()}();
        }
        else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $route = $this->routePost($requestUri);
            $page = $route->getController()->{$route->getMethod()}();
        }
        $route->getController()->displayPage($page);
    }
}
