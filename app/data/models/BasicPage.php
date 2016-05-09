<?php
/**
 * Created by Shane Jansen.
 * Date: 5/9/16
 */

namespace app\data\models;

class BasicPage {
    private $id, $tag, $title, $text;

    /**
     * BasicPage constructor.
     * @param $id
     * @param $tag
     * @param $title
     * @param $text
     */
    public function __construct($id, $tag, $title, $text) {
        $this->id = $id;
        $this->tag = $tag;
        $this->title = $title;
        $this->text = $text;
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
    public function getTag() {
        return $this->tag;
    }

    /**
     * @param mixed $tag
     */
    public function setTag($tag) {
        $this->tag = $tag;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getText() {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text) {
        $this->text = $text;
    }
}
