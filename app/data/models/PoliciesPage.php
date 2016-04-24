<?php
/**
 * Created by Shane Jansen.
 * Date: 4/23/16
 */

namespace app\data\models;


class PoliciesPage {
    private $id, $policies;

    /**
     * PoliciesPage constructor.
     * @param $id
     * @param $policies
     */
    public function __construct($id, $policies) {
        $this->id = $id;
        $this->policies = $policies;
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
    public function getPolicies() {
        return $this->policies;
    }

    /**
     * @param mixed $policies
     */
    public function setPolicies($policies) {
        $this->policies = $policies;
    }
}
