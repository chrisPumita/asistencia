<?php
include_once "PERSONA.php";

class ALUMNO extends PERSONA
{
    private $id_alumno;
    private $id_persona_fk;
    private $no_cta;
    private $account_confirm;

    /**
     * @return mixed
     */
    public function getIdAlumno()
    {
        return $this->id_alumno;
    }

    /**
     * @param mixed $id_alumno
     */
    public function setIdAlumno($id_alumno)
    {
        $this->id_alumno = $id_alumno;
    }

    /**
     * @return mixed
     */
    public function getIdPersonaFk()
    {
        return $this->id_persona_fk;
    }

    /**
     * @param mixed $id_persona_fk
     */
    public function setIdPersonaFk($id_persona_fk)
    {
        $this->id_persona_fk = $id_persona_fk;
    }

    /**
     * @return mixed
     */
    public function getNoCta()
    {
        return $this->no_cta;
    }

    /**
     * @param mixed $no_cta
     */
    public function setNoCta($no_cta)
    {
        $this->no_cta = $no_cta;
    }

    /**
     * @return mixed
     */
    public function getAccountConfirm()
    {
        return $this->account_confirm;
    }

    /**
     * @param mixed $account_confirm
     */
    public function setAccountConfirm($account_confirm)
    {
        $this->account_confirm = $account_confirm;
    }

    function queryInsertAlumno(){
        $query="INSERT INTO `alumno` (`id_alumno`, `id_persona_fk`, `no_cta`, `account_confirm`) VALUES ('".$this->getIdAlumno()."', '".$this->getIdPersonaFk()."', '".$this->getNoCta()."', '".$this->getAccountConfirm()."')";
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }
}