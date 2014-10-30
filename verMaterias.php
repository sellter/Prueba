    <?php

    require("header.php");

    include("db.php");
    require('Maestro.php');
    require('Materia.php');

    $ma=new Maestro();
    $mat=new Materia();
    $mat->muestraMaterias($idu);



    echo"</table></div>";
    echo"<div id='divtabla'></div>";
    include("footer.php");

    ?>
