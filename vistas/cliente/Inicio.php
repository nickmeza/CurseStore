
<div class="section section-padding list-categories">
    <?php $num = 0;
    foreach ($modulos as $modulo) { ?>
        <tr>
            <th scope="row"><?php $num = $num + 1;
                            echo $num  ?></th>
            <td><?php echo $modulo['nombre'] ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a class="btn btn-primary" href="<?php echo $GLOBALS['BASE_URL'] ?>modulo/admin_modulo_ver/<?php echo $modulo["idelemento"] ?>"> Ver</a>
                    
                </div>
            </td>
        </tr>
    <?php } ?>
</div>