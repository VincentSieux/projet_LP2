<?php

/**
 * @package     Application Lorraine Internationale Mobilité
 * @copyright	Copyright (C) 2013 World Trade Center Metz-Saarbrücken
 * @copyright	Copyright (C) 2013 Club Lorraine Internationale Mobilité
 * @author      Aymane Arabi - 2013
 */
include __SITE_PATH . '/application/' . 'controller_base.class.php';
include __SITE_PATH . '/application/' . 'registry.class.php';
include __SITE_PATH . '/application/' . 'router.class.php';
include __SITE_PATH . '/application/' . 'template.class.php';

function __autoload($class_name) {
    $filename = strtolower($class_name) . '.class.php';
    $file = __SITE_PATH . '/model/' . $filename;

    if (file_exists($file) == false) {
        return false;
    }
    include ($file);
}

$registry = new registry;
$registry->db = db::getInstance();
?>
