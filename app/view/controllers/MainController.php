<?php

/**
 * Created by: Shane Jansen
 * Date: 4/15/16
 */

namespace app\view\controllers;

use app\data\Database;
use app\data\repositories\MainPageRepo;

class MainController extends Controller {
    private $pageVars = [];

    public function getPageVars() {
        $mainPageRepo = new MainPageRepo(new Database());
        $mainPage = $mainPageRepo->getPage();
        $this->pageVars['description'] = $mainPage->getDescription();
        return $this->pageVars;
    }

    public function getMain() {
        return 'main';
    }
}
