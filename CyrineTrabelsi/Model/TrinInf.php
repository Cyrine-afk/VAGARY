<?php

//Definition et structure d'un objet Trip Influenceur


class TripInf extends Voyage {
    private $id_inf;

    public function __construct (string $nom_voy, string $date_voy, $nbr_perso_voy, string $destination_voy, $duree_voy, string $img_voy, string $planning_voy, $prix_voy, $id_type, $id_inf) {
        
        parent::__construct (string $nom_voy, string $date_voy, $nbr_perso_voy, string $destination_voy, $duree_voy, string $img_voy, string $planning_voy, $prix_voy, $id_type)

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