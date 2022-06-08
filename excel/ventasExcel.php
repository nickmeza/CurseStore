<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Ventas_".date('Y:m:d:m:s').".xls");
?>


<table>

    <tr>
        <th>ID</th>
        <th>CLIENTE</th>
        <th>TOTAL</th>
        <th>FECHA DE PEDIDO</th>
        <th>ESTADO</th>
    </tr>


    <?php

    foreach ($ventas as $fila) {

    ?>
        <tr>
            <td><?php echo $fila[0] ?></td>
            <td><?php echo $fila[11]." ".$fila[12] ?></td>
            <td><?php echo $fila[6] ?></td>
            <td><?php echo $fila[3] ?></td>
            <td><?php if ($fila[9]=="1") {
                echo "Activo";
            }else{
                echo "Inactivo";
            } ?></td>
        </tr>

    <?php } ?>

</table>
