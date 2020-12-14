<?php

require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Model/Voyage.php';

//Definition et structure d'un objet Trip Influenceur


class TripInf extends Voyage {
    private $id_inf;

    public function __construct (string $nom_voy, string $date_voy, $nbr_perso_voy, string $destination_voy, $duree_voy, string $img_voy, string $planning_voy, $prix_voy, $id_type, $id_inf) {
        
        parent::__construct ($nom_voy, $date_voy, $nbr_perso_voy, $destination_voy, $duree_voy, $img_voy, $planning_voy, $prix_voy, $id_type);

        $this->id_inf=$id_inf;
    }


    public function setIdInf ($id_inf) {
        $this->id_inf=$id_inf;
    }
    public function getIdInf () {
        return $this->id_inf;
    }

} 

?>