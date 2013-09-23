<?php

/**
 * @package     Application Lorraine Internationale Mobilité
 * @copyright	Copyright (C) 2013 World Trade Center Metz-Saarbrücken
 * @copyright	Copyright (C) 2013 Club Lorraine Internationale Mobilité
 * @author      Aymane Arabi - 2013
 * @Desc 
 */
Abstract Class baseController {

    protected $registry;

    function __construct($registry) {
        $this->registry = $registry;
    }

    abstract function index();
}

?>
