<?php

/**
 * Created by: Shane Jansen
 * Date: 4/15/16
 */

namespace app\view\controllers;

use app\data\Database;
use app\data\repositories\MainPageRepo;
use app\Utils;

class MainController extends Controller {
    private $pageVars = [];

    public function getPageVars() {
        $mainPageRepo = new MainPageRepo(new Database());
        $mainPage = $mainPageRepo->getPage();
        $mainPage->setDescription(Utils::textToHtml($mainPage->getDescription()));
        $mainPage->setMissionStatement(Utils::textToHtml($mainPage->getMissionStatement()));
        $this->pageVars['mainPage'] = $mainPage;
        return $this->pageVars;
    }

    public function getMain() {
        return 'main';
    }
}
