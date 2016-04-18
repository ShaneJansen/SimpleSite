<?php
/**
 * Created by Shane Jansen.
 * Date: 4/17/16
 */

namespace app\data\models;

class MainPage {
    private $id, $description;

    /**
     * MainPage constructor.
     * @param $id
     * @param $description
     */
    public function __construct($id, $description) {
        $this->id = $id;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    
}