<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Categoria_".date('Y:m:d:m:s').".xls");
?>


<table>

    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th>ESTADO</th>
    </tr>


    <?php

    foreach ($categoria as $fila) {

    ?>
        <tr>
            <td><?php echo $fila[0] ?></td>
            <td><?php echo $fila[1] ?></td>
            <td><?php echo $fila[2] ?></td>
            <td><?php if ($fila[3]=="1") {
                echo "Activo";
            }else{
                echo "Inactivo";
            } ?></td>
            
        </tr>

    <?php } ?>

</table>
