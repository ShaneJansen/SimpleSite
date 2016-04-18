<?php

/**
 * Created by Shane Jansen.
 * Date: 4/17/16
 */

namespace app\data\repositories;

abstract class Repo {
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    /**
     * @return mixed
     */
    protected function getDatabase() {
        return $this->database;
    }
}
