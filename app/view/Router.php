<?php

/**
 * Created by: Shane Jansen
 * Date: 4/15/16
 */

namespace app\view;

abstract class Router {
    public abstract function routePage($urlParts);

    public function run() {
        $urlParts = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($urlParts);
        $page = $this->routePage($urlParts);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') $page->posted();
        $page->display();
    }
}
