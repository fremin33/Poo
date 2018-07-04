<?php

namespace App\Database;

use \PDO;

/**
 * Class Database
 * @package App
 */
class MysqlDatabase extends Database
{

    private $db_name;
    private $db_host;
    private $db_user;
    private $db_password;
    private $pdo;


    /**
     * Database constructor.
     * @param string $db_name
     * @param string $db_host
     * @param string $db_user
     * @param string $db_password
     */
    public function __construct($db_name, $db_host = 'localhost', $db_user = 'root', $db_password = 'root')
    {
        $this->db_name = $db_name;
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
    }

    /**
     * @return PDO Connect to BDD with params
     */
    private function getPDO()
    {
        if ($this->pdo === null) {
            /* Connect to BDD */
            $pdo = new PDO('mysql:host=' . $this->db_host . ';dbname=' . $this->db_name, $this->db_user, $this->db_password);
            /* Diisplay errors */
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            /* Change FetchMode to FetchObj*/
            // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_CLASS);

            $this->pdo = $pdo;
        }

        return $this->pdo;
    }

    /**
     * @param $statement
     * @return array
     */
    public function query($statement, $class_name = null, $one = false)
    {
        $request = $this->getPDO()->query($statement);

        if ($class_name === null) {
            $request->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $request->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }

        /* Associate Class with Table */
        if ($one) {
            return $request->fetch();
        } else {
            return $request->fetchAll();
        }
    }

    public function prepare($statement, $params, $class_name, $one = false)
    {
        $request = $this->getPDO()->prepare($statement);
        $request->execute($params);
        /* Associate Class with Table */
        $request->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one) {
            return $request->fetch();
        } else {
            return $request->fetchAll();
        }
    }
}