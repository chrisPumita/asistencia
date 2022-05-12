<?php
include_once "PDODB.php";
class ASISTENCIA extends PDODB
{
    private $id_pase_fk;
    private $id_alumno_fk;
    private $confirmada;
    private $check_retardo;
    private $value;
    private $url_justificante;
    private $upload_date_justificante;
    private $estatus_rev_just;
    private $create_at;
    private $log;

    /**
     * @return mixed
     */
    public function getIdPaseFk()
    {
        return $this->id_pase_fk;
    }

    /**
     * @param mixed $id_pase_fk
     */
    public function setIdPaseFk($id_pase_fk)
    {
        $this->id_pase_fk = $id_pase_fk;
    }

    /**
     * @return mixed
     */
    public function getIdAlumnoFk()
    {
        return $this->id_alumno_fk;
    }

    /**
     * @param mixed $id_alumno_fk
     */
    public function setIdAlumnoFk($id_alumno_fk)
    {
        $this->id_alumno_fk = $id_alumno_fk;
    }

    /**
     * @return mixed
     */
    public function getConfirmada()
    {
        return $this->confirmada;
    }

    /**
     * @param mixed $confirmada
     */
    public function setConfirmada($confirmada)
    {
        $this->confirmada = $confirmada;
    }

    /**
     * @return mixed
     */
    public function getCheckRetardo()
    {
        return $this->check_retardo;
    }

    /**
     * @param mixed $check_retardo
     */
    public function setCheckRetardo($check_retardo)
    {
        $this->check_retardo = $check_retardo;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getUrlJustificante()
    {
        return $this->url_justificante;
    }

    /**
     * @param mixed $url_justificante
     */
    public function setUrlJustificante($url_justificante)
    {
        $this->url_justificante = $url_justificante;
    }

    /**
     * @return mixed
     */
    public function getUploadDateJustificante()
    {
        return $this->upload_date_justificante;
    }

    /**
     * @param mixed $upload_date_justificante
     */
    public function setUploadDateJustificante($upload_date_justificante)
    {
        $this->upload_date_justificante = $upload_date_justificante;
    }

    /**
     * @return mixed
     */
    public function getEstatusRevJust()
    {
        return $this->estatus_rev_just;
    }

    /**
     * @param mixed $estatus_rev_just
     */
    public function setEstatusRevJust($estatus_rev_just)
    {
        $this->estatus_rev_just = $estatus_rev_just;
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

    /**
     * @return mixed
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * @param mixed $log
     */
    public function setLog($log)
    {
        $this->log = $log;
    }

    function queryUpdateEstadoAsistencia(){
        $query="UPDATE `asistencia` SET 
                        `confirmada` = '".$this->getConfirmada()."', 
                        `check_retardo` = '".$this->getCheckRetardo()."', 
                        `value` = '".$this->getValue()."', 
                        `estatus_rev_just` = '".$this->getEstatusRevJust()."', 
                        `log` = '".$this->getLog()."' 
        WHERE `asistencia`.`id_pase_fk` = ".$this->getIdPaseFk()." 
        AND `asistencia`.`id_alumno_fk` = ".$this->getIdAlumnoFk().";";
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }
    function queryUpdateJustificanteFalta(){
        $query="UPDATE `asistencia` SET `confirmada` = '".$this->getConfirmada()."', `value` = '".$this->getValue()."', `url_justificante` = '".$this->getUrlJustificante()."',
         `upload_date_justificante` = '".$this->getUploadDateJustificante()."', `estatus_rev_just` = '".$this->getEstatusRevJust()."', `log` = '".$this->getLog()."' 
         WHERE `asistencia`.`id_pase_fk` = ".$this->getIdPaseFk()." AND `asistencia`.`id_alumno_fk` = ".$this->getIdAlumnoFk();
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryInsertAsistenciaList($lista){
        $values = "";

        for ($i = 0; $i < count($lista); $i++){
            $separator = $i+1 < count($lista)  ? ",":";";
            $values .= "('".$this->getIdPaseFk()."','".$lista[$i]["id_alumno"]."')".$separator;
        }
        $query = "INSERT INTO `asistencia` (`id_pase_fk`, `id_alumno_fk`) VALUES ".$values;
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }

}