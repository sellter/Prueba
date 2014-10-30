<?php
require("header.php");

require_once("db.php");
require('Materia.php');
$usu = new Materia();

/*$usu->altaUsuario("CArlos","Castro","Aviles","1");
$usu->modificarUsuario("Bertin","Costilla","Aviles","1",6);
$usu->eliminarUsuario(12);
$usu->reporteUsuario();
echo"<br><br>";
$usu->reporteUsuario2(1);*/
echo"
        <div>
            <form name=materia action=TestMateria.php method=post>
                <table>
                    <tr> <td>Materia:</td><td><input type='text' name='materia'></td></tr>

                    <tr> <td></td><td><input type='submit' name='submit' value='Alta'></td></tr>
                    <tr> <td>ID Eliminar:</td><td><input type='text' name='Emateria'><input type='submit' name='submit' value='Eliminar'></td></tr>
                    <tr> <td>Modifica nombre(s):</td><td>Nom<input type='text' name='matmod'>id<input type='text' name='idM'><input type='submit' name='submit' value='Modifica'></td></tr>
                    <tr> <td>ID Buscar:</td><td><input type='text' name='idB'><input type='submit' name='submit' value='Busca'></td></tr>





                </table>

            </form>

        </div>

    ";
if(isset($_POST['submit'])){
    switch($_POST['submit']){
        case "Alta":

            $usu->altaMateria($_POST['materia']);
            break;
        case "Eliminar":

            $usu->eliminaMateria($_POST['Emateria']);
            break;
        case "Modifica":
            $usu->updateMateria($_POST['matmod'],$_POST['idM']);
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