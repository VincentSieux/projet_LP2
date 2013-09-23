<?php

class etudiantModel {

    function getAll(PDO $db) {
        $query = $db->prepare('SELECT * FROM etudiant');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getEtudiantSection(PDO $db, $section, $annee) {
        $requete = 'SELECT  nom, prenom, annee_diplome, libelle_section, noment1, noment2
                  FROM etudiant et, entreprise en, section se, stage st
                  WHERE annee_diplome= :annee
                  AND libelle_section= :section
                  AND et.no_section=se.no_section
                  AND et.no_etud=st.no_etud
                  AND st.no_ent=en.no_ent';
        
        $query = $db->prepare($requete);
        $query->bindValue(':annee', $annee);
        $query->bindValue(':section', $section);
        $query->execute();

        //  $query->execute(array(":annee"=>$annee, ":section"=>$section));
        return $query->fetchAll();
    }

}

?>
