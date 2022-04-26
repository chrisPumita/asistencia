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

    function queryDatosPerfilesAlumno(){
        //funcion que trae los datos personales y no Cta del alumno
        $filterIdAlumno= $this->getIdAlumno()>0? " AND al.id_alumno=".$this->getIdAlumno() : "";
        $query="SELECT per.`id_persona`, per.`nombre`, per.`app`, per.`apm`, per.`sexo`, per.`email`,
         per.`user_name`, per.`avatar`, per.`pw`, per.`create_at`, al.id_alumno, al.no_cta 
         FROM `persona` per, alumno al WHERE per.id_persona=al.id_persona_fk  ".$filterIdAlumno;
        $this->connect();
        $result=$this->getData($query);
        $this->close();
        return $result;
    }

    function queryVerificaAlumno(){
        $query="SELECT per.`id_persona`, per.`nombre`, per.`app`, per.`apm`, per.`sexo`, per.`email`,
        per.`user_name`, per.`avatar`, per.`pw`, per.`create_at`, al.id_alumno, al.no_cta 
        FROM `persona` per, alumno al WHERE per.id_persona=al.id_persona_fk  AND per.email=".$this->getEmail()." AND per.per.pw=".$this->getPw();
       $this->connect();
       $result=$this->getData($query);
       $this->close();
       return $result;
    }
}