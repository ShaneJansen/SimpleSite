<?php

/**
 * Created by: Shane Jansen
 * Date: 4/15/16
 */

namespace app\view\controllers;

use app\Utils;

abstract class Controller {
    public abstract function getPageName();
    public function getPageVars() {
        return [];
    }
    public function posted() {}

    public function display() {
        $vars = $this->getPageVars();
        require (Utils::getDocumentRoot() . '/app/view/html/' . $this->getPageName() . '.php');
    }
}
