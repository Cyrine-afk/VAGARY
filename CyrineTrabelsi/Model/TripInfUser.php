<?php

//Definition et structure d'un objet Trip Influenceur


class TripInfUser {

    private $id_res;
    private $id_voy;
    private $id_client;
    private $id_inf;
    private $date_res;


    public function __construct ($id_voy, $id_client, $id_inf, $date_res) {
        $this->id_voy=$id_voy;
        $this->id_client=$id_client;
        $this->id_inf=$id_inf;
        $this->date_res=$date_res;
    }


    public function setIdRes ($id_res) {
        $this->id_res=$id_res;
    }
    public function getIdRes () {
        return $this->id_res;
    }


    public function setIdVoy ($id_voy) {
        $this->id_voy=$id_voy;
    }
    public function getIdVoy () {
        return $this->id_voy;
    }


    public function setIdClient ($id_client) {
        $this->id_client=$id_client;
    }
    public function getIdClient () {
        return $this->id_client;
    }


    public function setIdInf ($id_inf) {
        $this->id_inf=$id_inf;
    }
    public function getIdInf () {
        return $this->id_inf;
    }



    public function setDateRes ($date_res) {
        $this->date_res=$date_res;
    }
    public function getDateRes () {
        return $this->date_res;
    }
    
} 

?>