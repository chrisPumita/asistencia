<?php

class PASE_LISTA
{
    private $id_pase;
    private $id_grupo_fk;
    private $fecha;
    private $notas;
    private $create_at;

    /**
     * @return mixed
     */
    public function getIdPase()
    {
        return $this->id_pase;
    }

    /**
     * @param mixed $id_pase
     */
    public function setIdPase($id_pase)
    {
        $this->id_pase = $id_pase;
    }

    /**
     * @return mixed
     */
    public function getIdGrupoFk()
    {
        return $this->id_grupo_fk;
    }

    /**
     * @param mixed $id_grupo_fk
     */
    public function setIdGrupoFk($id_grupo_fk)
    {
        $this->id_grupo_fk = $id_grupo_fk;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * @param mixed $notas
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;
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
}