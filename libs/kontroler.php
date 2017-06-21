<?php

namespace libs;

use PDO;
use PDOException;


class Kontroler {

    /**
     * @var Pohled
     */
    public $sablona = null;

    public $db = null;

    protected function setPripojeni(){
        $options = array(
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        );

        $db_init = DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME;

        try {
            $this->db = new PDO($db_init, DB_USER, DB_PASS, $options);
        }
        catch (PDOException $e) {
            // LOGOVANI!
            throw $e;
        }
    }

    protected function setSablonu($sablona) {
        $this->sablona = new Pohled($sablona);
    }



}