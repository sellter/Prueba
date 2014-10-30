<?php
require("header.php");

require_once("db.php");
require('Usuario.php');
$usu = new Usuario();

/*$usu->altaUsuario("CArlos","Castro","Aviles","1");
$usu->modificarUsuario("Bertin","Costilla","Aviles","1",6);
$usu->eliminarUsuario(12);
$usu->reporteUsuario();
echo"<br><br>";
$usu->reporteUsuario2(1);*/
    echo"
        <div>
            <form name=alumno action=TestUsuario.php method=post>
                <table>
                    <tr> <td>nombre(s):</td><td><input type='text' name='nombreA'></td></tr>
                    <tr> <td>Apellido Paterno:</td><td><input type='text' name='appA'></td></tr>
                    <tr> <td>Apellido Materno:</td><td><input type='text' name='apmA'></td></tr>
                    <tr> <td>nivel</td><td>
                    <select name='tipo'>
                        <option value='1'>Administrador</option>
                        <option value='2'>Maestro</option>
                        <option value='3'>Alumno</option>
                    </select>
                    </td></tr>
                    <tr> <td>    </td><td><input type='submit' name='submit' value='Alta'></td></tr>
                    <tr> <td>ID Eliminar:</td><td><input type='text' name='idE'><input type='submit' name='submit' value='Eliminar'></td></tr>
                    <tr> <td>Modifica nombre(s):</td><td>Nom<input type='text' name='nombreM'>id<input type='text' name='idM'><input type='submit' name='submit' value='Modifica'></td></tr>
                    <tr> <td>ID Buscar:</td><td><input type='text' name='idB'><input type='submit' name='submit' value='Busca'></td></tr>





                </table>

            </form>

        </div>

    ";
if(isset($_POST['submit'])){
    switch($_POST['submit']){
        case "Alta":
            echo"Boton ".$_POST['submit'];
            $usu->altaUsuario($_POST['nombreA'],$_POST['appA'],$_POST['apmA'],$_POST['tipo']);
            break;
        case "Eliminar":

            $usu->eliminarUsuario($_POST['idE']);
            break;
        case "Modifica":
            $usu->modificarUsuario($_POST['nombreM'],$_POST['idM']);
            break;
        case "Busca":
            if($_POST['idB']==''){
                $usu->reporteUsuario();
            }else{
                $usu->reporteUsuario2($_POST['idB']);
            }
            break;
    }
}else{
    echo"no";
}



require("footer.php");
?>