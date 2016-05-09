<?php
/**
 * Created by Shane Jansen.
 * Date: 5/9/16
 */

namespace app\data\repositories;

use app\data\models\BasicPage;

class BasicPageRepo extends Repo {
    public function __construct($database) {
        parent::__construct($database);
    }

    public function getPage($tag) {
        $pdo = $this->getDatabase()->query('SELECT * FROM basic_pages WHERE tag = :tag',
            ['tag'=>$tag]);
        $result = $pdo->fetch();
        return new BasicPage($result['id'], $result['tag'], $result['title'], $result['text']);
    }

    public function getPages() {
        $pages = [];
        $pdo = $this->getDatabase()->query('SELECT * FROM basic_pages', []);
        $results = $pdo->fetchall();
        foreach ($results as $result) {
            array_push($pages, new BasicPage($result['id'], $result['tag'], $result['title'], $result['text']));
        }
        return $pages;
    }

    public function updatePage($id, $text) {
        $pdo = $this->getDatabase()->query('UPDATE basic_pages SET
            text=:text
            WHERE id=:id',
            ['id'=>$id, 'text'=>$text]);
        $pdo->execute();
    }
}