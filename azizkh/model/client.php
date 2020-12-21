<?php


class client
{
    private $id_client;
    private $nom_client;
    private $prenom_client;
    private $date_nai_client;
    private $mail_client;
    private $date_ajout_client;
    private $mdp_client;
    private $login_client;
    private $img_client;
    

    function __construct($id_client,$nom_client,$prenom_client,$date_nai_client,$mail_client,$date_ajout_client,$mdp_client,$login_client,$img_client)
    {
        $this->id_client=$id_client;
        $this->nom_client=$nom_client;
        $this->prenom_client=$prenom_client;
        $this->date_nai_client=$date_nai_client;
        $this->mail_client=$mail_client;
        $this->date_ajout_client=$date_ajout_client;
        $this->mdp_client=$mdp_client;
        $this->login_client=$login_client;
        $this->img_client=$img_client;
    }

    /**
     * @return mixed
     */
    public function getId_client()
    {
        return $this->id_client;
    }

    /**
     * @return mixed
     */
    public function getNom_client()
    {
        return $this->nom_client;
    }

    /**
     * @return mixed
     */
    public function getPrenom_client()
    {
        return $this->prenom_client;
    }

    /**
     * @return mixed
     */
    public function getDate_nai_client()
    {
        return $this->date_nai_client;
    }

    /**
     * @return mixed
     */
    public function getMdp_client()
    {
        return $this->mdp_client;
    }

    /**
     * @return mixed
     */
    public function getMail_client()
    {
        return $this->mail_client;
    }

    /**
     * @return mixed
     */
    public function getImg_client()
    {
        return $this->img_client;
    }

    /**
     * @return mixed
     */
    public function getDate_ajout_client()
    {
        return $this->date_ajout_client;
    }

    /**
     * @return mixed
     */
    public function getLogin_client()
    {
        return $this->login_client;
    }

    /**
     * @param mixed $id_client
     */
    public function setId_client($id_client)
    {
        $this->id_client = $id_client;
    }

    /**
     * @param mixed $nom_client
     */
    public function setNom_client($nom_client)
    {
        $this->nom_client = $nom_client;
    }

    /**
     * @param mixed $prenom_client
     */
    public function setPrenom_client($prenom_client)
    {
        $this->prenom_client = $prenom_client;
    }

    /**
     * @param mixed $date_nai_client
     */
    public function setDate_nai_client($date_nai_client)
    {
        $this->date_nai_client = $date_nai_client;
    }

    /**
     * @param mixed $login
     */
    public function setLogin_client($login_client)
    {
        $this->login_client = $login_client;
    }

    /**
     * @param mixed $mdp_client
     */
    public function setMdp_client($mdp_client)
    {
        $this->mdp_client = $mdp_client;
    }

    /**
     * @param mixed $email
     */
    public function setDate_ajout_client($date_ajout_client)
    {
        $this->date_ajout_client = $date_ajout_client;
    }

    /**
     * @param mixed $num
     */
    public function setImg_client($img_client)
    {
        $this->img_client = $img_client;
    }

    /**
     * @param mixed $adresse
     */
    public function setMail_client($mail_client)
    {
        $this->mail_client = $mail_client;
    }
}
?>