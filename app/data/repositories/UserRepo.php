<?php

/**
 * Created by Shane Jansen.
 * Date: 4/17/16
 */

namespace app\data\repositories;

use app\data\models\User;

class UserRepo extends Repo {
    public function __construct($database) {
        parent::__construct($database);
    }

    public function getUser($username, $password) {
        $pdo = $this->getDatabase()->query('SELECT * FROM users WHERE username = :username AND password = :password',
            ['username'=>$username, 'password'=>$password]);
        if ($pdo->rowCount() == 0) return null;
        $result = $pdo->fetch();
        return new User($result['id'], $result['username'], $result['password']);
    }
}
