<?php

    class Alumno extends Usuario{

        public function muestraAlumnosGrupos(){
            echo "<div class='table-responsive'>";
            echo"<form action4='TestAlumno.php' method='post'>";
            echo"<table align='center' border='7' width='40%'>";
            echo"<tr><td colspan='5' align='center'><b>Asigna Alumnos a Grupos:</b></td></tr>";
            $sql = "SELECT * FROM usuario WHERE Estatus=1 AND Nivel=3";
            $consulta = mysql_query($sql)or die("Error de consulta");
            $cuantos = mysql_num_rows($consulta);
            for($i = 0; $i < $cuantos; $i++){
                $id_alu = mysql_result($consulta,$i,'id');
                $nombre = mysql_result($consulta,$i,'Nombre');
                $apat = mysql_result($consulta,$i,'ApellidoPaterno');
                $amat = mysql_result($consulta,$i,'ApellidoMaterno');

                $sql2 = "SELECT * FROM detallegrupo WHERE id = $id_alu";
                $consulta2 =mysql_query($sql2)or die("Error de consulta 2");
                $asignado = mysql_num_rows($consulta2);
                if($asignado == ""){
                    echo"<tr><td><input type='checkbox' name='al$i' value='$id_alu'>$nombre $apat $amat</td></tr>";
                }
                else{
                    $id_grupo = mysql_result($consulta2, 0, 'id_grupo');
                    $sql3 = "SELECT * FROM grupo WHERE id_grupo = $id_grupo";
                    $consulta3 =mysql_query($sql3)or die("Error de consulta 3");
                    $grupo = mysql_result($consulta3, 0, 'nombre');

                    echo"<tr><td>$nombre $apat $amat, asignado(a) al grupo $grupo <a href='TestAlumno.php?id=$id_alu'>Desasignar</a></td></tr>";
                }
            }
            echo"<input type=hidden name=cuantos value=$cuantos>";
            echo"</div>";
        }

        public function muestraGrupos(){
            echo"<div class='table-responsive sok_font'>";
            echo"<table class=table table-bordered>";
            echo"<tr>";
            echo"<td><select name=grupo>";
            $sql = "SELECT * FROM grupo";
            $consulta = mysql_query($sql)or die("Error de consulta");
            $cuantos = mysql_num_rows($consulta);
            for($i = 0; $i < $cuantos; $i++){
                $id_grupo = mysql_result($consulta,$i,'id_grupo');
                $nombre = mysql_result($consulta,$i,'grupo');

                echo "<option value='$id_grupo'>$nombre</option>";
            }
            echo"</select>";
            echo"</td>";
            echo"</tr>";
            echo"</table>";
            echo"</div>";
        }

        public function asignaGrupos($id_alu, $grupo){


            $sql = "INSERT INTO detallegrupo (id, id_grupo) VALUES ($id_alu, $grupo)";
            $consulta = mysql_query($sql)or die("Error de inserción");


        }

        public function desasignaGrupos($id_alu){
            $sql = "DELETE FROM detallegrupo WHERE id = $id_alu";
            $consulta = mysql_query($sql)or die("Error de eliminación");
        }
    }