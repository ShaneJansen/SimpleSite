<?php

/**
 * Created by: Shane Jansen
 * Date: 4/15/16
 */

namespace app\controllers;

use app\Utils;

abstract class Controller
{
    public abstract function getPageName();
    public function getPageVars() {
        return [];
    }
    public function posted() {}

    public function display() {
        $vars = $this->getPageVars();
        require (Utils::getDocumentRoot() . '/app/html/' . $this->getPageName() . '.php');
    }
}
