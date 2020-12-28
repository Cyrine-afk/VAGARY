<?php


class ClientFollowInf {

    private $id_follow;
    private $id_client;
    private $id_inf;
    private $date_follow;
    

    function __construct($id_client,$id_inf,$date_follow)
    {
        $this->id_client=$id_client;
        $this->id_inf=$id_inf;
        $this->date_follow=$date_follow;
    }


    
    public function setIdFollow ($id_follow) {
        $this->id_follow=$id_follow;
    }
    public function getIdFollow () {
        return $this->id_follow;
    }



    public function setIdClient  ($id_client) {
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


    
    public function setDateFollow ($date_follow) {
        $this->date_follow=$date_follow;
    }
    public function getDateFollow () {
        return $this->date_follow;
    }
}
?>