<?php

/**
 * Created by: Shane Jansen
 * Date: 4/15/16
 */

namespace app\controllers;

class Page2Controller extends Controller
{

    public function getPageName()
    {
        return 'page2';
    }

    public function getPageVars()
    {
        $vars = [];
        $vars['test2'] = 'page 2 now';
        return $vars;
    }
}
