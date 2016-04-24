<?php
/**
 * Created by Shane Jansen.
 * Date: 4/23/16
 */

namespace app\data\repositories;


use app\data\models\PoliciesPage;

class PoliciesPageRepo extends Repo {
    public function __construct($database) {
        parent::__construct($database);
    }

    public function getPage() {
        $pdo = $this->getDatabase()->query('SELECT * FROM page_policies ORDER BY id DESC LIMIT 1', []);
        $result = $pdo->fetch();
        return new PoliciesPage($result['id'], $result['policies']);
    }

    public function updatePage($id, $policies) {
        $pdo = $this->getDatabase()->query('UPDATE page_policies SET
            policies=:policies  
            WHERE id=:id',
            ['id'=>$id, 'policies'=>$policies]);
        $pdo->execute();
    }
}
