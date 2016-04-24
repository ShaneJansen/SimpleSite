<?php
/**
 * Created by Shane Jansen.
 * Date: 4/16/16
 */

namespace app\view\controllers;

use app\data\Database;
use app\data\repositories\MainPageRepo;
use app\data\repositories\PoliciesPageRepo;

class EditController extends Controller {
    private $database;
    private $pageVars = [];
    private $mainPageRepo, $policiesPageRepo;

    public function __construct() {
        // Check if we are logged in
        session_start();
        if (!isset($_SESSION['username'])) die(header('Location: /login'));
        $this->database = new Database();
        $this->mainPageRepo = new MainPageRepo($this->database);
        $this->policiesPageRepo = new PoliciesPageRepo($this->database);
    }

    public function getPageVars() {
        $this->pageVars['mainPage'] = $this->mainPageRepo->getPage();
        $this->pageVars['policiesPage'] = $this->policiesPageRepo->getPage();
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
            case 'policiesPage':
                $this->policiesPageRepo->updatePage($id, $_POST['policies']);
                break;
        }
        $this->pageVars['success'] = 'Page successfully updated.';
        return 'edit';
    }
}
