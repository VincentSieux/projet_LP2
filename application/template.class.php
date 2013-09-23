<?php

/**
 * @package     Application Lorraine Internationale Mobilité
 * @copyright	Copyright (C) 2013 World Trade Center Metz-Saarbrücken
 * @copyright	Copyright (C) 2013 Club Lorraine Internationale Mobilité
 * @author      Aymane Arabi - 2013
 */
Class Template {

    private $registry;

    function __construct($registry) {
        $this->registry = $registry;
    }
    
    function show($name) {
        $path = __SITE_PATH . '/views' . '/' . $name . '.php';

        if (file_exists($path) == false) {
            throw new Exception('Probleme lors du chargement du template ' . $path);
            return false;
        }

        include ($path);
    }

}

?>
