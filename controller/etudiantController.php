<?php

require_once 'model/etudiantModel.php';
require_once 'model/db.class.php';

class etudiantController extends baseController {

    function showEtudiants() {
        $db = db::getInstance();
        $currentYear = 2002;
        $data = etudiantModel::getEtudiantSection($db, '2A', $currentYear);
        $db = null;
        var_dump($data);
    }

    public function index() {
        
    }

}

?>
