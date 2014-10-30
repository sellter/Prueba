<?php
class Materia{
    private $id;
    private $Nombre;
    private $avatar;
    private $orden;
    private $status;

    public function altaMateria($nomMat){


   $alta="insert into materia(materia)values('$nomMat')";
   $ejecuta=mysql_query($alta) or die(mysql_error());
        echo"
        <div class='alert alert-success' role='alert'>
        <strong>Alta exitosa de:</strong> $nomMat
      </div>

        ";
    }
    public function eliminaMateria($idmat){
        $sql="delete from materia where id_materia=$idmat";
        $ejecuta=mysql_query($sql)or die(mysql_error($sql));
        echo"
        <div class='alert alert-success' role='alert'>
        <strong>Eliminó correctamente:</strong> $idmat
      </div>

        ";

    }

    public function updateMateria($matmod,$idmat){

       $sql="update materia set materia='$matmod' where id_materia='$idmat'";
        mysql_query($sql);
        echo"<div class='alert alert-info' role='alert'>
        <strong>Modificación</strong> exitosa
      </div>";



    }
    public function reportec1(){
        $sql="SELECT * FROM  materia where status='1' order by materia asc ";
        $consulta=mysql_query($sql) or die(mysql_error());
        echo"<select name='materia' id='materia' required=''>
                <option value='0'>selecciona</option>";
        while($field=mysql_fetch_array($consulta)){
            $this->id=$field['id_materia'];
            $this->nombre=$field['materia'];


           echo"<option value='".$this->id."'>".$this->nombre."</option>";

        }
        echo"</select>";
    }
    public function comboMateriaMaestro($idMateria){
        $query="SELECT * FROM detalle WHERE id='$idMateria'";
        $execute=mysql_query($query)or die(mysql_error());
        $numero=mysql_num_rows($execute);
        if($numero>0){

            $sql="SELECT id_materia,materia FROM materia
                  WHERE id_materia  NOT IN( SELECT id_materia
                  FROM detalle
                  WHERE id='$idMateria');
         ";
            $consulta=mysql_query($sql) or die(mysql_error());
            echo"<select name='materia' id='materia'>";
            while($field=mysql_fetch_array($consulta)){
                $this->id=$field['id_materia'];
                $this->nombre=$field['materia'];


                echo"<option value='".$this->id."'>".$this->nombre."</option>";

            }
            echo"</select>";

        }else{
            $sql="SELECT * FROM  materia where status='1' order by materia asc ";
            $consulta=mysql_query($sql) or die(mysql_error());
            echo"<select name='materia' id='materia'>";
            while($field=mysql_fetch_array($consulta)){
                $this->id=$field['id_materia'];
                $this->nombre=$field['materia'];


                echo"<option value='".$this->id."'>".$this->nombre."</option>";

            }
            echo"</select>";

        }
    }

    public function muestraMaterias($idm){
            $consultam="

                        SELECT st2.idm,st2.materia FROM
                        (
                        SELECT id_materia
                        FROM detalle
                        WHERE id='$idm'
                        ) AS st1,
                        (
                        SELECT id_materia AS idm, materia
                        FROM materia
                        WHERE id_materia
                        ) AS st2
                        WHERE st1.id_materia = st2.idm
                        ";
        $ejecuta=mysql_query($consultam)or die (mysql_error());
        echo"<div class=table-responsive>";
        echo"<table class=\"table table-striped\">";
        echo"<tr><td colspan=5 align=Center><strong>Materias Maestro</strong> </td></tr>";
        echo"<tr><th>Clave</th><th>Materia</th><th>Opciones</th></tr>";
        while($field=mysql_fetch_array($ejecuta)){
            $this->id=$field['idm'];
            $this->nombre=$field['materia'];



            echo"<tr><td>$this->id</td><td>$this->nombre</td><td><a onclick=\"cargar1('#divtabla','#divtest',$this->id)\";>Eliminar</a></td></tr>";
        }

        echo"</table></div>";

        }
    public function desvinculaMateria($idm,$idp){
        $elimina="DELETE FROM detalle WHERE id_materia=$idm AND id=$idp";
        mysql_query($elimina);

    }
    public function reporteM2(){
    echo"r2<br>";
    }
    public function actualizarMateria(){
    echo"AM<br>";
    }
    public function eliminarMateria(){
    echo"Em<br>";
    }
    public function asignarMateriaMaestro($idm,$idp){
        $inserta="INSERT INTO detalle(id,id_materia) VALUES($idp,$idm)";
        mysql_query($inserta) or die(mysql_error());

    }

    public function muestraAlumnos(){
       $sql="";
        mysql_query($sql)or die(mysql_error());
    }

}

?>