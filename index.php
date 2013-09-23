<head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"></head>
<?php

/**
 * @package     Application Lorraine Internationale Mobilité
 * @copyright	Copyright (C) 2013 World Trade Center Metz-Saarbrücken
 * @copyright	Copyright (C) 2013 Club Lorraine Internationale Mobilité
 * @author      Aymane Arabi - 2013
 */
?>

<?php

error_reporting(E_ALL);

$site_path = realpath(dirname(__FILE__));
define('__SITE_PATH', $site_path);


require_once 'includes/init.php';

$registry->router = new router($registry);

$registry->router->setPath(__SITE_PATH . '/controller');

$registry->template = new template($registry);

$registry->router->loader();
?>
