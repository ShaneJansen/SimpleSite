<?php
/**
 * Created by Shane Jansen.
 * Date: 4/16/16
 */

namespace app\view\controllers;

use app\data\Database;
use app\data\repositories\MainPageRepo;

class EditController extends Controller {
    private $database;
    private $pageVars = [];
    private $mainPageRepo;

    public function __construct() {
        // Check if we are logged in
        session_start();
        if (!isset($_SESSION['username'])) die(header('Location: /login'));
        $this->database = new Database();
        $this->mainPageRepo = new MainPageRepo($this->database);
    }

    public function getPageVars() {
        $this->pageVars['mainPage'] = $this->mainPageRepo->getPage();
        return $this->pageVars;
    }

    public function getEdit() {
        return 'edit';
    }

    public function postEdit() {
        $this->mainPageRepo->updatePage($_POST['id'], $_POST['description']);
        $this->pageVars['success'] = 'Page successfully updated.';
        return 'edit';
    }
}
