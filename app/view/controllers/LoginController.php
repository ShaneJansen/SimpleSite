<?php
/**
 * Created by Shane Jansen.
 * Date: 4/16/16
 */

namespace app\view\controllers;

class LoginController extends Controller {
    private $pageVars = [];

    public function getPageName() {
        return 'login';
    }

    public function getPageVars() {
        return $this->pageVars;
    }

    public function posted() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $this->pageVars['test'] = $username;
        $this->pageVars['test2'] = $password;
    }
}