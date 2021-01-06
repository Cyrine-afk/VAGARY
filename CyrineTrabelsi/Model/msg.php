<?php


class Msg {
    private $id_msg;
    private string $msg;
    private $id_client;


    public function __construct (string $msg,  $id_client) {
        $this->msg=$msg;
        $this->id_client=$id_client;
    }

    
    public function setIdMsg ($id_msg) { 
        $this->id_msg=$id_msg;
    }
    public function getIdMsg () {
        return $this->id_msg;
    }
    
    
    
    public function setMsg ($msg) {
        $this->msg=$msg;
    }
    public function getMsg () {
        return $this->msg;
    }


    public function setIdClient ($id_client) {
        $this->id_client=$id_client;
    }
    public function getIdClient () {
        return $this->id_client;
    }

    

}

?>