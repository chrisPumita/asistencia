<?php
include_once "PERSONA.php";
class PROFESOR extends PERSONA
{
    private $id_profesor;
    private $id_persona_fk;
    private $grado_academico;
    private $carrera_esp;
    private $account_confirm;

    /**
     * @return mixed
     */
    public function getIdProfesor()
    {
        return $this->id_profesor;
    }

    /**
     * @param mixed $id_profesor
     */
    public function setIdProfesor($id_profesor)
    {
        $this->id_profesor = $id_profesor;
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
    public function getGradoAcademico()
    {
        return $this->grado_academico;
    }

    /**
     * @param mixed $grado_academico
     */
    public function setGradoAcademico($grado_academico)
    {
        $this->grado_academico = $grado_academico;
    }

    /**
     * @return mixed
     */
    public function getCarreraEsp()
    {
        return $this->carrera_esp;
    }

    /**
     * @param mixed $carrera_esp
     */
    public function setCarreraEsp($carrera_esp)
    {
        $this->carrera_esp = $carrera_esp;
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

    function queryInsertProfesor(){
        $query="INSERT INTO `profesor` (`id_profesor`, `id_persona_fk`, `grado_academico`, `carrera_esp`, `account_confirm`) 
        VALUES ('".$this->getIdProfesor()."', '".$this->getIdPersonaFk()."', '".$this->getGradoAcademico()."', '".$this->getCarreraEsp()."', '".$this->getAccountConfirm()."')";
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryUpdateProfesor(){
        $query="UPDATE `profesor` SET `grado_academico` = '".$this->getGradoAcademico()."', `carrera_esp` = '".$this->getCarreraEsp()."' WHERE `profesor`.`id_profesor` = ".$this->getIdProfesor();
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function consultaCuentaProfesor(){
        $query = "select prof.id_profesor, prof.grado_academico, prof.carrera_esp, prof.account_confirm,
               per.id_persona, per.nombre, per.app, per.apm, per.sexo, per.email, per.user_name, 
               per.avatar, per.create_at
        from profesor prof inner join persona per
        where per.email = '".$this->getEmail()."' and per.pw = '".$this->getPw()."'";
        return $this->consultaSQL($query);
    }
}