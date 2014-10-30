<?php
class Usuario{
    private $id;
    private $nombre;
    private $app;
    private $apm;
    private $telefono;
    private $calle;
    private $numext;
    private $numint;
    private $colonia;
    private $municipio;
    private $estado;
    private $cp;
    private $correo;
    private $pass;
    private $nivel;
    private $estatus;



    public function altaUsuario($nombre1,$apellidopat, $apellidomat, $newlevel){
        echo"<br>Alta Usuario";
        $insert01="INSERT INTO usuario(nombre,apellido_pat,apellido_mat,nivel,estatus)
                    VALUES('$nombre1','$apellidopat','$apellidomat','$newlevel',1)";
        $execute01=mysql_query($insert01)or die(mysql_error());

    }
    public function modificarUsuario($nombre1,$idm){
        echo"<br>Modificación";
        $update01="
          UPDATE usuario
          SET nombre='$nombre1'
          WHERE id=$idm
        ";
        mysql_query($update01) or die(mysql_error());
    }
    public function eliminarUsuario($idD){
        echo"<br>";
        $delete="DELETE FROM usuario WHERE id=$idD";
        mysql_query($delete)or die(msyql_error());
    }
    public function reporteUsuario(){
        echo"Reporte_1";
        $sql="SELECT * FROM  usuario where estatus='1' order by id desc ";
        $consulta=mysql_query($sql) or die("NO");
        echo"<div class=table-responsive>";
        echo"<table class=\"table table-striped\">";
        echo"<tr><td colspan=5 align=Center><strong>Lista de Usuarios</strong> </td></tr>";
        echo"<tr><th>Clave</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nivel</th></tr>";
        while($field=mysql_fetch_array($consulta)){
            $this->id=$field['id'];
            $this->nombre=$field['nombre'];
            $this->app=$field['apellido_pat'];
            $this->apm=$field['apellido_mat'];
            $this->nivel=$field['nivel'];
            switch($this->nivel){
                case 1:
                    $nivel="Administrador";
                    break;
                case 2:
                    $nivel="Maestro";
                    break;
             case 3:
                     $nivel="Alumno";
                    break;
            }
            echo"<tr><td>$this->id</td><td>$this->nombre</td><td>$this->app</td><td>$this->apm</td><td>$nivel</td></tr>";

        }
        echo"</table></div>";
    }
    public function reporteUsuario2($id){
        echo"Reporte_2";

        $sql="SELECT * FROM  usuario where estatus='1' and id=".$id." order  by apellido_pat desc ";
        $consulta=mysql_query($sql) or die(mysql_error());
        echo"<div class=table-responsive>";
        echo"<table class=\"table table-striped\">";
        echo"<tr><td colspan=5 align=Center><strong>Lista de Usuarios</strong> </td></tr>";
        echo"<tr><th>Clave</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nivel</th></tr>";
        while($field=mysql_fetch_array($consulta)){
            $this->id=$field['id'];
            $this->nombre=$field['nombre'];
            $this->app=$field['apellido_pat'];
            $this->apm=$field['apellido_mat'];
            $this->nivel=$field['nivel'];
            switch($this->nivel){
                case 1:
                    $nivel="Administrador";
                    break;
                case 2:
                    $nivel="Maestro";
                    break;
                case 3:
                    $nivel="Alumno";
                    break;
            }
            echo"<tr><td>$this->id</td><td>$this->nombre</td><td>$this->app</td><td>$this->apm</td><td>$nivel</td></tr>";


        }
        echo"</table></div>";


}
}
?>