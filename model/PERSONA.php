<?php
include_once "PDODB.php";
class PERSONA extends PDODB
{
    private $id_persona;
    private $nombre;
    private $app;
    private $apm;
    private $sexo;
    private $email;
    private $user_name;
    private $avatar;
    private $pw;
    private $create_at;

    /**
     * @return mixed
     */
    public function getIdPersona()
    {
        return $this->id_persona;
    }

    /**
     * @param mixed $id_persona
     */
    public function setIdPersona($id_persona)
    {
        $this->id_persona = $id_persona;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * @param mixed $app
     */
    public function setApp($app)
    {
        $this->app = $app;
    }

    /**
     * @return mixed
     */
    public function getApm()
    {
        return $this->apm;
    }

    /**
     * @param mixed $apm
     */
    public function setApm($apm)
    {
        $this->apm = $apm;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @return mixed
     */
    public function getPw()
    {
        return $this->pw;
    }

    /**
     * @param mixed $pw
     */
    public function setPw($pw)
    {
        $this->pw = $pw;
    }

    /**
     * @return mixed
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }

    /**
     * @param mixed $create_at
     */
    public function setCreateAt($create_at)
    {
        $this->create_at = $create_at;
    }
    /**** QUERYS CRUD*****/
    function queryInsertPersona(){
        $query="INSERT INTO `persona` (`id_persona`, `nombre`, `app`, `apm`, `sexo`, `email`, `user_name`, `avatar`, `pw`, `create_at`) 
        VALUES ('".$this->getIdPersona()."', '".$this->getNombre()."', '".$this->getApp()."', '".$this->getApm()."',
        '".$this->getSexo()."', '".$this->getEmail()."', '".$this->getUserName()."', '".$this->getAvatar()."', 
        '".$this->getPw()."', current_timestamp())";
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }
}