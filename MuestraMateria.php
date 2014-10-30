<script>
    function cargar(div)
    {
        var mat    =  document.getElementById('grp').value;

        var url="MuestraGrp.php?Grupos="+mat;
        $(div).load(url);
    }
</script>
<?php

include('header.php');
$numero= $_POST['numero'];
$grupo=$_POST['Grupos'];
require_once('db.php');
foreach ($_POST['nose'] as $checkbox){
    $inserta="INSERT INTO detalleGrupo (id,id_grupo)VALUES($checkbox,$grupo)";
    mysql_query($inserta) or die(mysql_error());
    echo"
    <div class='alert alert-success' role='alert'>
        <strong>Well done!</strong> El alumno con la matricula ";
    $checkbox;
    echo" a sido agregado correctamente
      </div>
";
}


    $sql="SELECT * FROM  grupo where status='1' order by grupo asc ";
    $consulta=mysql_query($sql) or die(mysql_error());
echo"<select name='grp' id='grp' onclick=\"cargar('#divtest')\";>";
    while($field=mysql_fetch_array($consulta)){
        $id=$field['id_grupo'];
        $nombre=$field['grupo'];


        echo"<option value='".$id."'>".$nombre."</option>";

    }
    echo"</select>";
    echo"<div id=divtest></div>";

    include('footer.php');


?>