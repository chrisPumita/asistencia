<?php

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
}