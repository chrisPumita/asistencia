<?php
include_once "PDODB.php";
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
    
    function queryInsertGrupoAlumno(){
        $query="INSERT INTO `grupoalumno` (`id_grupo_fk`, `id_alumno_fk`, `estatus`, `create_at`) 
        VALUES ('".$this->getIdGrupoFk()."', '".$this->getIdAlumnoFk()."', '1', current_timestamp())";
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryUpdateEstatusGrupoAlumno(){
        $query="UPDATE `grupoalumno` SET `estatus` = '".$this->getEstatus()."' WHERE `grupoalumno`.`id_grupo_fk` = ".$this->getIdGrupoFk()." AND `grupoalumno`.`id_alumno_fk` = ".$this->getIdAlumnoFk();
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryConsultaInscripciones($filtro){
        $filtro = $filtro == "ALL" ? "AND per.estado > 0 ": "";
        $query = "select per.id_periodo, id_profesor, nombre_periodo,
       fecha_inicio, fecha_fin, tipo, created_at, estado,
       g.id_grupo, g.id_periodo_fk, g.grupo, g.carrera, g.materia,
       g.porcentaje_min, g.dias, g.is_porcentual, g.puntaje_final,
       g.tipo_puntaje, g.retardo_is_falta, g.no_clases, g.create_at,
       g.codigo_invitacion, g.link_invitacion, g.estatus,
       gpoal.id_grupo_fk, id_alumno_fk, gpoal.estatus as estado_insc, gpoal.create_at as fecha_registro
        from periodo per inner join grupo g
            on per.id_periodo = g.id_periodo_fk
        inner join grupoalumno gpoal
            on g.id_grupo = gpoal.id_grupo_fk
        where  gpoal.id_alumno_fk = ".$this->getIdAlumnoFk()." ". $filtro;

        $this->connect();
        $result=$this->getData($query);
        $this->close();
        return $result;
    }
}