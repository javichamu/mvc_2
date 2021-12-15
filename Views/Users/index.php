<h1>Users</h1>
<div class="row col-md-24 centered">
    <table class="table table-hover table-bordered">
        <thead>
        <a href="<?php echo WEBROOT;?>users/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Añadir usuario</a>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Email</th>
       
            <th class="text-center">Accion</th>
        </tr>
        </thead>
        <?php

        foreach ($users as $user)
        {
           
            echo '<tr>';
            echo "<td>" . $user['id'] . "</td>";
            echo "<td>" . $user['name'] . "</td>";
            echo "<td>" . $user['email'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-primary btn-xs' href='". WEBROOT."users/show/" . $user["id"] . "' ><span class='glyphicon glyphicon-edit'>
            </span> Mostrar</a> <a class='btn btn-primary btn-xs' href='". WEBROOT."users/edit/" . $user["id"] . "' ><span class='glyphicon glyphicon-edit'>
            </span> Editar</a>  <a href='". WEBROOT."users/delete/" . $user["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>