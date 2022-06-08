<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Usuario_".date('Y:m:d:m:s').".xls");
?>


<table>

    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DIRECCION</th>
        <th>ESTADO</th>
    </tr>


    <?php

    foreach ($usuario as $fila) {

    ?>
        <tr>
            <td><?php echo $fila[0] ?></td>
            <td><?php echo $fila[1]." ".$fila[2] ?></td>
            <td><?php echo $fila[3] ?></td>
            <td><?php if ($fila[4]=="1") {
                echo "Activo";
            }else{
                echo "Inactivo";
            } ?></td>
        </tr>

    <?php } ?>

</table>
