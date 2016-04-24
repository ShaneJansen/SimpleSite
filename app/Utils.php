<?php

/**
 * Created by: Shane Jansen
 * Date: 4/15/16
 */

namespace app;

class Utils {
    public static function getDocumentRoot() {
        // Back one directory because index.php is in the public directory
        return dirname($_SERVER['DOCUMENT_ROOT']);
    }

    public static function textToHtml($text) {
        $text = nl2br($text);
        $text = str_replace("\t", '&nbsp&nbsp&nbsp&nbsp&nbsp', $text);
        return $text;
    }
}
