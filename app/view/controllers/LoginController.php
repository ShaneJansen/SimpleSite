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

    public function getPageVars() {
        return $this->pageVars;
    }

    public function getLogin() {
        // Check if we are logged in
        session_start();
        if (isset($_SESSION['username'])) die(header('Location: /edit'));
        return 'login';
    }

    public function postLogin() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $loginRepo = new UserRepo(new Database());
        $user = $loginRepo->getUser($username, $password);
        if ($user == null) {
            $this->pageVars['error'] = 'Incorrect username or password';
            return 'login';
        }
        else {
            session_start();
            $_SESSION['username'] = $username;
            die(header('Location: /edit'));
        }
    }

    public function getLogout() {
        session_start();
        session_unset();
        session_destroy();
        die(header('Location: /login'));
    }
}
