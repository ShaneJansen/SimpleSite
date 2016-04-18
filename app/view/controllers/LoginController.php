<?php
/**
 * Created by Shane Jansen.
 * Date: 4/16/16
 */

namespace app\view\controllers;

use app\data\Database;
use app\data\repositories\UserRepo;

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
        $loginRepo = new UserRepo(new Database());
        $user = $loginRepo->getUser($username, $password);
        if ($user == null) $this->pageVars['error'] = 'Incorrect username or password';
        else {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: /edit');
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        die(header('Location: /login'));
    }
}
