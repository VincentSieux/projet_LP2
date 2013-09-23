<?php

/**
 * @package     Application Lorraine Internationale Mobilité
 * @copyright	Copyright (C) 2013 World Trade Center Metz-Saarbrücken
 * @copyright	Copyright (C) 2013 Club Lorraine Internationale Mobilité
 * @author      Aymane Arabi - 2013
 */
class db {

    private static $instance = NULL;

    private function __construct() {
        
    }

    public static function getInstance() {

        if (!self::$instance) {
            self::$instance = new PDO("mysql:host=localhost;dbname=infoStages", 'root', '');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }

    private function __clone() {
        
    }

}

?>