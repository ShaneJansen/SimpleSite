<?php
/**
 * Created by Shane Jansen.
 * Date: 5/9/16
 */

namespace app\view\controllers;

use app\data\Database;
use app\data\repositories\BasicPageRepo;
use app\Utils;

class BasicPageController extends Controller {
    private $pageVars = [];

    public function getPageVars() {
        $tag = substr($_SERVER['REQUEST_URI'], 1);
        $basicPageRepo = new BasicPageRepo(new Database());
        $basicPage = $basicPageRepo->getPage($tag);
        $basicPage->setText(Utils::textToHtml($basicPage->getText()));
        $this->pageVars['basicPage'] = $basicPage;
        return $this->pageVars;
    }

    public function getBasicPage() {
        return 'basic_page';
    }
}