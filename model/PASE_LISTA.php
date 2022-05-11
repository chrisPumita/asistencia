<?php
include_once "PDODB.php";
class PASE_LISTA extends PDODB
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

    function queryCreatePaseLista(){
        $query = "INSERT INTO `paselista` (`id_pase`, `id_grupo_fk`, `fecha`, `notas`, `create_at`) 
                VALUES ('".$this->getIdPase()."', '".$this->getIdGrupoFk()."', '".$this->getFecha()."', '".$this->getNotas()."', CURRENT_TIMESTAMP)";

        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function  queryConsultaListaAsistencia(){
        $query = "select per.id_persona, per.nombre, per.app, per.apm, per.sexo,
               per.email, per.user_name, per.avatar,
               al.id_alumno, no_cta, account_confirm,
               asi.id_pase_fk, id_alumno_fk, confirmada, check_retardo, value,
               url_justificante, upload_date_justificante, estatus_rev_just, log
                from asistencia asi inner join alumno al
                on al.id_alumno = asi.id_alumno_fk
                inner join persona per
                on per.id_persona = al.id_persona_fk
                where id_pase_fk = ".$this->getIdPase()." order by per.app, per.apm, per.nombre";

        $this->connect();
        $result=$this->getData($query);
        $this->close();
        return $result;
    }

    function queryBuscaPaseLista($filtro,$dia){
        switch($filtro){
            case  "TODAY":
                $filtro = " and fecha = '".date('Y-m-d')."'";
                break;
            case  "none":
                $filtro = "";
                break;
            default:
                $filtro = " and fecha = '".$dia."'";
                break;
        }

        $filtroPase = $this->getIdPase() != 0 ? " AND id_pase = ". $this->getIdPase() : "";

        $query = "select id_pase, id_grupo_fk, fecha, notas, create_at from paselista
                    where id_grupo_fk = ". $this->getIdGrupoFk(). " ".$filtro. $filtroPase;
       // echo $query;
        $this->connect();
        $result=$this->getData($query);
        $this->close();
        return $result;
    }

    function queryConsultaListaRealizada(){
        $query = "select pl.id_pase, pl.fecha, pl.notas,
       asi.id_pase_fk, confirmada, check_retardo, value,
       url_justificante, upload_date_justificante, estatus_rev_just, log,
       al.id_alumno, id_persona_fk, no_cta, account_confirm,
       per.id_persona, nombre, app, apm, sexo, email, user_name, avatar,
       asi.*, pl.id_grupo_fk,
       (select grupoalumno.estatus from grupoalumno
       where id_alumno_fk = al.id_alumno AND id_grupo_fk = pl.id_grupo_fk) AS estatus_alumno
from asistencia asi inner join  paselista pl on pl.id_pase = asi.id_pase_fk
                  inner join alumno al on al.id_alumno = asi.id_alumno_fk
                  inner join persona per on per.id_persona = al.id_persona_fk
                    where id_pase = ".$this->getIdPase();
        $this->connect();
        $result=$this->getData($query);
        $this->close();
        return $result;
    }

    function queryCancelaPaseLista(){
        $query = "DELETE FROM paselista WHERE id_pase = ".$this->getIdPase()." ;";
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryUpdateNotasPaseLista(){
        $query = "UPDATE paselista t
                    SET t.notas = CONCAT(t.notas,'\n".$this->getNotas()."') 
                    WHERE t.id_pase =  ".$this->getIdPase()." ;";
        $this->connect();
        $result=$this->executeInstruction($query);
        $this->close();
        return $result;
    }

    function queryHistorialPasesLista($idProfesor,$filtro){
        switch ($filtro){
            case "LAST":
                //mostrando los ultimos 10 activos
                $filtro = " AND p.estado > 0 ORDER BY pl.create_at DESC LIMIT 10";
                break;
            default:
                //Mostrando todos sin excepcion
                $filtro = " ORDER BY pl.create_at DESC";
                break;
        }
        $query = "SELECT pl.id_pase, pl.id_grupo_fk, pl.fecha, pl.notas, pl.create_at,
        g.id_grupo, grupo, carrera, materia, porcentaje_min, dias,
       is_porcentual, puntaje_final, tipo_puntaje, retardo_is_falta,
       no_clases, codigo_invitacion, link_invitacion, estatus,
       p.id_periodo, p.id_profesor, p.nombre_periodo, p.fecha_inicio, p.fecha_fin,
       p.tipo, p.estado, p.id_profesor
        FROM paselista pl inner join grupo g on pl.id_grupo_fk = g.id_grupo
            inner join periodo p on g.id_periodo_fk = p.id_periodo
        WHERE p.id_profesor = ".$idProfesor." ".$filtro;
        $this->connect();
        $result=$this->getData($query);
        $this->close();
        return $result;
    }

}