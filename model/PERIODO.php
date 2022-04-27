<?php

include_once "PDODB.php";
class PERIODO extends PDODB
{
    private $id_periodo;
    private $id_profesor;
    private $nombre_periodo;
    private $fecha_inicio;
    private $fecha_fin;
    private $tipo;
    private $estado;

    /**
     * @return mixed
     */
    public function getIdPeriodo()
    {
        return $this->id_periodo;
    }

    /**
     * @param mixed $id_periodo
     */
    public function setIdPeriodo($id_periodo)
    {
        $this->id_periodo = $id_periodo;
    }

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
    public function getNombrePeriodo()
    {
        return $this->nombre_periodo;
    }

    /**
     * @param mixed $nombre_periodo
     */
    public function setNombrePeriodo($nombre_periodo)
    {
        $this->nombre_periodo = $nombre_periodo;
    }

    /**
     * @return mixed
     */
    public function getFechaInicio()
    {
        return $this->fecha_inicio;
    }

    /**
     * @param mixed $fecha_inicio
     */
    public function setFechaInicio($fecha_inicio)
    {
        $this->fecha_inicio = $fecha_inicio;
    }

    /**
     * @return mixed
     */
    public function getFechaFin()
    {
        return $this->fecha_fin;
    }

    /**
     * @param mixed $fecha_fin
     */
    public function setFechaFin($fecha_fin)
    {
        $this->fecha_fin = $fecha_fin;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    function queryConsultaPeriodos($filtro){
        $condicion = "";
        switch ($filtro){
            case "LAST":
                $condicion = " AND estado > 0";
                break;
        }
        $query = "select id_periodo, id_profesor, nombre_periodo, fecha_inicio, fecha_fin, tipo, estado 
                from periodo where id_profesor = ". $this->getIdProfesor()." ".$condicion." order by fecha_inicio desc";
        return $this->consultaSQL($query);
    }

    function queryCreaPeriodo(){
        $query = "INSERT INTO `periodo` (`id_periodo`, `id_profesor`, `nombre_periodo`, `fecha_inicio`, 
                       `fecha_fin`, `tipo`, `estado`) 
                VALUES (NULL, '".$this->getIdProfesor()."', '".$this->getNombrePeriodo()."', '".$this->getFechaFin().
            "', '".$this->getFechaFin()."', '".$this->getTipo()."', '1')";
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryActualizaPeriodo(){
        $query = "UPDATE `periodo` SET 
                     `nombre_periodo` = '".$this->getNombrePeriodo()."', 
                     `fecha_inicio` = '".$this->getFechaInicio()."', 
                     `fecha_fin` = '".$this->getFechaFin()."', 
                     `tipo` = '".$this->getTipo()."' 
                WHERE `periodo`.`id_periodo` = ".$this->getIdPeriodo();
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }
}