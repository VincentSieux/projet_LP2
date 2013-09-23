<?php

/**
 * @package     Application Lorraine Internationale Mobilité
 * @copyright	Copyright (C) 2013 World Trade Center Metz-Saarbrücken
 * @copyright	Copyright (C) 2013 Club Lorraine Internationale Mobilité
 * @author      Aymane Arabi - 2013
 */
class router {

    private $registry;
    private $path;
    public $file;
    public $controller;
    public $action;

    function __construct($registry) {
        $this->registry = $registry;
    }

    // ** Définir le chemin
    function setPath($path) {

        if (is_dir($path) == false) {
            throw new Exception('Error : Invalid controller path: `' . $path . '` || Chemin introuvable.');
        }

        $this->path = $path;
    }

    public function loader() {
        // ** Cette fonction permet de charger le controller s'il existe
        $this->getController();

        if (is_readable($this->file) == false) {
            echo $this->file;
            die('404 Not Found');
        }

        include $this->file;

        // ** Instantiation
        $class = $this->controller . 'Controller';
        $controller = new $class($this->registry);

        // ** Vérification de l'action
        if (is_callable(array($controller, $this->action)) == false) {
            $action = 'index';
        } else {
            $action = $this->action;
        }
        $controller->$action();
    }

    private function getController() {

        //** On cherche la route
        $route = (empty($_GET['page'])) ? 'index' : $_GET['page'];

        $parts = explode('/', $route); //** On separre le controlleur de l'action
        $this->controller = $parts[0]; 
        if (isset($parts[1])) {
            $this->action = $parts[1];
        }

        if (empty($this->controller)) {
            $this->controller = 'index';
        }

        if (empty($this->action)) {
            $this->action = 'index';
        }

        //** set file path (chemin du fichier)
        /** Attention : le nom du controller doit obligatoirement avoir un nom
         * de la forme nomdelaclasseController.php
         */
        $this->file = $this->path . '/' . $this->controller . 'Controller.php';
    }

}
?>
