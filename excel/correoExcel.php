<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Correos_".date('Y:m:d:m:s').".xls");
?>


<table>

    <tr>
        <th>ID</th>
        <th>CLIENTE</th>
        <th>CORREO</th>
        <th>ASUNTO</th>
        <th>DESCRIPCION</th>
    </tr>


    <?php

    foreach ($correos as $fila) {

    ?>
        <tr>
            <td><?php echo $fila[0] ?></td>
            <td><?php echo $fila[1] ?></td>
            <td><?php echo $fila[6] ?></td>
            <td><?php echo $fila[8] ?></td>
            <td><?php echo $fila[7] ?></td>
            
        </tr>

    <?php } ?>

</table>
