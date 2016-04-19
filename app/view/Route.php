<?php
/**
 * Created by: Shane Jansen
 * Date: 4/19/16
 */

namespace app\view;

class Route {
    private $controller, $method;

    /**
     * Route constructor.
     * @param $controller
     * @param $method
     */
    public function __construct($controller, $method) {
        $this->controller = $controller;
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getController() {
        return $this->controller;
    }

    /**
     * @return mixed
     */
    public function getMethod() {
        return $this->method;
    }
}
