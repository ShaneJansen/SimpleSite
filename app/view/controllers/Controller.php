<?php

/**
 * Created by: Shane Jansen
 * Date: 4/15/16
 */

namespace app\view\controllers;

use app\Utils;

abstract class Controller {
    public function getPageVars() {
        return [];
    }

    public function displayPage($pageName) {
        $vars = $this->getPageVars();
        require (Utils::getDocumentRoot() . '/app/view/html/' . $pageName . '.php');
    }
}
