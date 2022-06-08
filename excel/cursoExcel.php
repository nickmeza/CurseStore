<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Cursos_".date('Y:m:d:m:s').".xls");
?>


<table>

    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th>ESTADO</th>
    </tr>

    <?php

    foreach ($cursos as $fila) {

    ?>
        <tr>
            <td><?php echo $fila[0] ?></td>
            <td><?php echo $fila[3] ?></td>
            <td><?php echo $fila[4] ?></td>
            <td><?php if ($fila[8]=="1") {
                echo "Activo";
            }else{
                echo "Inactivo";
            } ?></td>
        </tr>

    <?php } ?>

</table>
