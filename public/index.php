<?php
/**
 * Created by: Shane Jansen
 * Date: 4/14/16
 */


use app\MyRouter;

require_once '../app/MyRouter.php';

$router = new MyRouter();
$router->run();
