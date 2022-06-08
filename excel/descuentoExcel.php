<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Descuento_".date('Y:m:d:m:s').".xls");
?>


<table>

    <tr>
        <th>ID</th>
        <th>DESCRIPCION</th>
        <th>PORCENTAJE</th>
        <th>INICIO</th>
        <th>FINAL</th>
        <th>ESTADO</th>
    </tr>


    <?php

    foreach ($descuentos as $fila) {

    ?>
        <tr>
            <td><?php echo $fila[0] ?></td>
            <td><?php echo $fila[5] ?></td>
            <td><?php echo $fila[1] ?></td>
            <td><?php echo $fila[2] ?></td>
            <td><?php echo $fila[3] ?></td>
            <td><?php if ($fila[4]=="1") {
                echo "Activo";
            }else{
                echo "Inactivo";
            } ?></td>
        </tr>

    <?php } ?>

</table>
