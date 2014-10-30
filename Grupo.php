<?php
class Grupo{
    private $id;
    private $Nombre;
    private $avatar;
    private $orden;
    private $status;

    public function altaGrupo(){
        echo"alta okg<br>";
    }
    public function reporteG1(){
        echo"r1g<br>";
    }
    public function reporteG2($grp){
        $sql="
        SELECT u.`id`, u.`nombre`,u.`apellido_pat`,u.`apellido_mat`
        FROM usuario AS u, detalleGrupo AS dg, grupo AS g
        WHERE u.id=dg.`id` AND g.`id_grupo`=dg.`id_grupo` AND g.`id_grupo`=$grp
        ";

        $ejecuta=mysql_query($sql)or die(mysql_error());
        echo"<div class=table-responsive>";
        echo"<form name='Asigna' method='post' action='MuestraMateria.php'>";

        echo"<table class=\"table table-striped\">";
        echo"<tr><td colspan=3 align=Center><strong>Alumnos Sin Asignar</strong> </td><td> </td><td>";

        echo"
        </td></tr>";
        echo"<tr><th>Clave</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Selecciona</th></tr>";
        $au=0;
        while($field=mysql_fetch_array($ejecuta)){
            $this->id=$field['id'];
            $this->nombre=$field['nombre'];
            $this->app=$field['apellido_pat'];
            $this->apm=$field['apellido_mat'];

            $ch="al".$au;


            echo"<tr><td>$this->id</td><td>$this->nombre</td><td>$this->app</td><td>$this->apm</td><td><a onclick=\"cargar1('#divtest',$this->id)\";>Eliminar</a></td></tr>";
            $au=$au+1;

        }
        echo"</table>
        <input type='submit' class='btn btn-lg btn-info' value='enviar'>
       ";
        echo"</form> </div>";

    }
    public function actualizarGrupo(){
        echo"AMg<br>";
    }
    public function eliminarGrupo(){
        echo"Emg<br>";
    }

    public function asignarGrupo(){

    }

}

?>
<script>
    function cargar1(div,id)
    {
        var mat    =  document.getElementById('grp').value;

        var url="EliminaAsignacion.php?id="+id+"&Grupos="+mat;

      $(div).load(url);
    }
</script>