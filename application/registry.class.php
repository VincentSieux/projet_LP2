<?php

/**
 * @package     Application Lorraine Internationale Mobilité
 * @copyright	Copyright (C) 2013 World Trade Center Metz-Saarbrücken
 * @copyright	Copyright (C) 2013 Club Lorraine Internationale Mobilité
 * @author      Aymane Arabi - 2013
 */
Class Registry {
    
    /* Cette classe permet de "stocker" des variables
     * utilisés sur plusieurs pages du site
     */

    private $vars = array();

    public function __set($index, $value) {
        $this->vars[$index] = $value;
    }

    public function __get($index) {
        return $this->vars[$index];
    }

}

?>
