<?php
/**
 * Created by Shane Jansen.
 * Date: 4/16/16
 */

namespace app\view\controllers;

use app\data\Database;
use app\data\repositories\BasicPageRepo;
use app\data\repositories\MainPageRepo;

class EditController extends Controller {
    private $database;
    private $pageVars = [];
    private $mainPageRepo, $basicPageRepo;

    public function __construct() {
        // Check if we are logged in
        session_start();
        if (!isset($_SESSION['username'])) die(header('Location: /login'));
        $this->database = new Database();
        $this->mainPageRepo = new MainPageRepo($this->database);
        $this->basicPageRepo = new BasicPageRepo($this->database);
    }

    public function getPageVars() {
        $this->pageVars['mainPage'] = $this->mainPageRepo->getPage();
        $this->pageVars['basicPages'] = $this->basicPageRepo->getPages();
        return $this->pageVars;
    }

    public function getEdit() {
        return 'edit';
    }

    public function postEdit() {
        $id = $_POST['id'];
        $form = $_POST['form'];
        switch ($form) {
            case 'mainPage':
                $this->mainPageRepo->updatePage($id, $_POST['description'], $_POST['missionStatement']);
                break;
            case 'basicPage':
                $this->basicPageRepo->updatePage($id, $_POST['text']);
                break;
        }
        $this->pageVars['success'] = 'Page successfully updated.';
        return 'edit';
    }
}
