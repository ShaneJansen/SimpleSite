<?php

/**
 * Created by Shane Jansen.
 * Date: 4/17/16
 */

namespace app\data;

use app\Utils;
use PDO;
use PDOException;

class Database {
    private $dbConnection;

    public function __construct() {
        // Read in the credentials
        $dbName = $host = $username = $password = '';
        $path = Utils::getDocumentRoot() . '/app/data/database.txt';
        $handle = fopen($path, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $chunks = explode('=', $line);
                switch ($chunks[0]) {
                    case 'dbname':
                        $dbName = trim($chunks[1]);
                        break;
                    case 'host':
                        $host = trim($chunks[1]);
                        break;
                    case 'username':
                        $username = trim($chunks[1]);
                        break;
                    case 'password':
                        $password = trim($chunks[1]);
                        break;
                }
            }
            fclose($handle);
        } else die('Could not read database.txt');

        try {
            $this->dbConnection = new PDO("mysql:dbname=$dbName;host=$host;port=8889;charset=utf8", $username, $password);
            $this->dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($sql, $params = []) {
        $stmt = $this->dbConnection->prepare($sql);
        return $stmt->execute($params);
    }
}
