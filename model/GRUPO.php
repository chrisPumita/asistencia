<?php
include_once "PDODB.php";
class GRUPO extends PDODB
{
    private $id_grupo;
    private $id_periodo_fk;
    private $grupo;
    private $carrera;
    private $materia;
    private $porcentaje_min;
    private $dias;
    private $is_porcentual ;
    private $puntaje_final;
    private $tipo_puntaje;
    private $retardo_is_falta;
    private $no_clases;
    private $create_at;
    private $codigo_invitacion;
    private $link_invitacion;
    private $estatus;

    /**
     * @return mixed
     */
    public function getIdGrupo()
    {
        return $this->id_grupo;
    }

    /**
     * @param mixed $id_grupo
     */
    public function setIdGrupo($id_grupo)
    {
        $this->id_grupo = $id_grupo;
    }

    /**
     * @return mixed
     */
    public function getIdPeriodoFk()
    {
        return $this->id_periodo_fk;
    }

    /**
     * @param mixed $id_periodo_fk
     */
    public function setIdPeriodoFk($id_periodo_fk)
    {
        $this->id_periodo_fk = $id_periodo_fk;
    }

    /**
     * @return mixed
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * @param mixed $grupo
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;
    }

    /**
     * @return mixed
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * @param mixed $carrera
     */
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;
    }

    /**
     * @return mixed
     */
    public function getMateria()
    {
        return $this->materia;
    }

    /**
     * @param mixed $materia
     */
    public function setMateria($materia)
    {
        $this->materia = $materia;
    }

    /**
     * @return mixed
     */
    public function getPorcentajeMin()
    {
        return $this->porcentaje_min;
    }

    /**
     * @param mixed $porcentaje_min
     */
    public function setPorcentajeMin($porcentaje_min)
    {
        $this->porcentaje_min = $porcentaje_min;
    }

    /**
     * @return mixed
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * @param mixed $dias
     */
    public function setDias($dias)
    {
        $this->dias = $dias;
    }

    /**
     * @return mixed
     */
    public function getIsPorcentual()
    {
        return $this->is_porcentual;
    }

    /**
     * @param mixed $is_porcentual
     */
    public function setIsPorcentual($is_porcentual)
    {
        $this->is_porcentual = $is_porcentual;
    }

    /**
     * @return mixed
     */
    public function getPuntajeFinal()
    {
        return $this->puntaje_final;
    }

    /**
     * @param mixed $puntaje_final
     */
    public function setPuntajeFinal($puntaje_final)
    {
        $this->puntaje_final = $puntaje_final;
    }

    /**
     * @return mixed
     */
    public function getTipoPuntaje()
    {
        return $this->tipo_puntaje;
    }

    /**
     * @param mixed $tipo_puntaje
     */
    public function setTipoPuntaje($tipo_puntaje)
    {
        $this->tipo_puntaje = $tipo_puntaje;
    }

    /**
     * @return mixed
     */
    public function getRetardoIsFalta()
    {
        return $this->retardo_is_falta;
    }

    /**
     * @param mixed $retardo_is_falta
     */
    public function setRetardoIsFalta($retardo_is_falta)
    {
        $this->retardo_is_falta = $retardo_is_falta;
    }

    /**
     * @return mixed
     */
    public function getNoClases()
    {
        return $this->no_clases;
    }

    /**
     * @param mixed $no_clases
     */
    public function setNoClases($no_clases)
    {
        $this->no_clases = $no_clases;
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
    public function getCodigoInvitacion()
    {
        return $this->codigo_invitacion;
    }

    /**
     * @param mixed $codigo_invitacion
     */
    public function setCodigoInvitacion($codigo_invitacion)
    {
        $this->codigo_invitacion = $codigo_invitacion;
    }

    /**
     * @return mixed
     */
    public function getLinkInvitacion()
    {
        return $this->link_invitacion;
    }

    /**
     * @param mixed $link_invitacion
     */
    public function setLinkInvitacion($link_invitacion)
    {
        $this->link_invitacion = $link_invitacion;
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

    function queryConsultaGruposProfesor($idProfesor,$filtro,$DIA){
        $filter = "";
        $dia = "";
        switch ($filtro){
            case "TODAY":
                $dia = " AND dias LIKE '%".$DIA."%' ";
                break;
        }

        $query = "select g.id_grupo, id_periodo_fk, grupo,
       carrera, materia, porcentaje_min, dias,
       is_porcentual, puntaje_final, tipo_puntaje,
       retardo_is_falta, no_clases, create_at,
       codigo_invitacion, link_invitacion, estatus, p.*
from grupo g inner join periodo p
on p.id_periodo = g.id_periodo_fk inner join profesor pro
    on pro.id_profesor = p.id_profesor
where p.id_profesor = ".$idProfesor." AND  g.estatus > 0" .$dia;
        $this->connect();
        $result=$this->getData($query);
        $this->close();
        return $result;
    }

    function consultaUltimosPasesLista($idProfesor){
        $query = "select g.id_grupo, id_periodo_fk, grupo,
       carrera, materia, estatus as estadoGrupo, p.id_periodo,
       p.id_profesor, nombre_periodo, fecha_inicio,
       fecha_fin, tipo, p.estado as estadoPeriodo,
       pl.id_pase, fecha, notas, pl.create_at
        from grupo g inner join periodo p
        on p.id_periodo = g.id_periodo_fk inner join profesor pro
        on pro.id_profesor = p.id_profesor left join paselista pl
        on pl.id_grupo_fk = g.id_grupo
        where p.id_profesor =".$idProfesor." AND g.estatus > 0 
        ORDER BY fecha DESC LIMIT 5";
    }

    function queryCreaGrupo(){
        $query = "INSERT INTO `grupo` (`id_grupo`, `id_periodo_fk`, `grupo`,
                     `carrera`, `materia`, `porcentaje_min`, `dias`, 
                     `is_porcentual`, `puntaje_final`, `tipo_puntaje`, 
                     `retardo_is_falta`, `no_clases`, `create_at`, `codigo_invitacion`, `link_invitacion`, `estatus`) VALUES 
          (NULL, '".$this->getIdPeriodoFk()."', 
          '".$this->getGrupo()."', 
          '".$this->getCarrera()."', 
          '".$this->getMateria()."', 
          '".$this->getPorcentajeMin()."', 
          '".$this->getDias()."',
           '".$this->getIsPorcentual()."', 
           '".$this->getPuntajeFinal()."', 
           '".$this->getTipoPuntaje()."', 
           '".$this->getRetardoIsFalta()."', 
           '".$this->getNoClases()."', CURRENT_TIMESTAMP, 
           '".$this->getCodigoInvitacion()."', 
           '".$this->getLinkInvitacion()."', '1')";

        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }
}