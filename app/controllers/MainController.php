<?php

/**
 * Created by: Shane Jansen
 * Date: 4/15/16
 */

namespace app\controllers;

class MainController extends Controller
{
    private $pageVars = [];

    public function getPageName()
    {
        return 'main';
    }

    public function getPageVars()
    {
        $this->pageVars['test']  = 'my get message';
        return $this->pageVars;
    }

    public function posted()
    {
        $this->pageVars['post'] = $_POST['first'];
    }
}
