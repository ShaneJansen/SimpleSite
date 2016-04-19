<?php
/**
 * Created by Shane Jansen.
 * Date: 4/16/16
 */

namespace app\view\controllers;

class EditController extends Controller {
    public function __construct() {
        // Check if we are logged in
        session_start();
        if (!isset($_SESSION['username'])) die(header('Location: /login'));
    }

    public function getEdit() {
        return 'edit';
    }
}
