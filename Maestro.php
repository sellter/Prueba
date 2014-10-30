<?php
class Maestro{
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
    private $materia;
    public function reporecomb(){


        $sql="SELECT * FROM usuario WHERE nivel ='2' ";
        $consulta=mysql_query($sql) or die(mysql_error());
        echo"<select name='maestro' id='maestro' onclick=\"cargar('#divtest','#divtabla')\";>";
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
            echo"
        <option value='".$this->id."' >".$this->nombre."</option>
        ";

    }
        echo" </select> ";


    }

}
?>