<h1>Comments</h1>
<div class="row col-md-12 centered">
    <table class="table table-hover table-bordered">
        <thead >
        <a href="<?php echo WEBROOT;?>comments/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Añadir comentario</a>
        
        <tr>
            <th>ID</th>
            <th>User_id</th>
            <th>Post_id</th>
            <th>Body</th>
       
            <th class="text-center">Accion</th>
        </tr>
        </thead>
        <?php

        foreach ($comments as $comment)
        {
           
            echo '<tr>';
            echo "<td>" . $comment['id'] . "</td>";
            echo "<td>" . $comment['user_id'] . "</td>";
            echo "<td>" . $comment['post_id'] . "</td>";
            echo "<td>" . $comment['body'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-primary btn-xs' href='". WEBROOT."comments/show/" . $comment["id"] . "' ><span class='glyphicon glyphicon-edit'>
            </span> Mostrar</a> </br> </br> <a class='btn btn-primary btn-xs' href='". WEBROOT."comments/edit/" . $comment["id"] . "' ><span class='glyphicon glyphicon-edit'>
            </span> Editar</a> </br> </br>   <a href='". WEBROOT."comments/delete/" . $comment["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>