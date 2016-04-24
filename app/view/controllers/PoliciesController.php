<?php
/**
 * Created by Shane Jansen.
 * Date: 4/23/16
 */

namespace app\view\controllers;


use app\data\Database;
use app\data\repositories\PoliciesPageRepo;
use app\Utils;

class PoliciesController extends Controller {
    private $pageVars = [];

    public function getPageVars() {
        $policiesPageRepo = new PoliciesPageRepo(new Database());
        $policiesPage = $policiesPageRepo->getPage();
        $policiesPage->setPolicies(Utils::textToHtml($policiesPage->getPolicies()));
        $this->pageVars['policiesPage'] = $policiesPage;
        return $this->pageVars;
    }

    public function getPolicies() {
        return 'policies';
    }
}
