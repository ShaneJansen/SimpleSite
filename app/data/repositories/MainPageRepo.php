<?php
/**
 * Created by Shane Jansen.
 * Date: 4/17/16
 */

namespace app\data\repositories;

use app\data\models\MainPage;

class MainPageRepo extends Repo {
    public function __construct($database) {
        parent::__construct($database);
    }

    public function getPageData() {
        $pdo = $this->getDatabase()->query('SELECT * FROM page_main ORDER BY id DESC LIMIT 1',
            []);
        $result = $pdo->fetch();
        return new MainPage($result['id'], $result['description']);
    }
}