<?php

class GRUPO_ALUMNO extends PDODB
{
    private $id_grupo_fk;
    private $id_alumno_fk;
    private $estatus;
    private $create_at;

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
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * @param mixed $estatus
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;
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