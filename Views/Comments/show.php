<h1>Vista Comentarios</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User_id</th>
      <th scope="col">Post_id</th>
      <th scope="col">Body</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td><?php if(isset($comment["id"])) echo "</br>".$comment["id"];?></td>
      <td><?php if(isset($comment["user_id"])) echo "</br>".$comment["user_id"];?></td>
      <td><?php if (isset($comment["post_id"])) echo "</br>".$comment["post_id"];?></td>
      <td> <?php if (isset($comment["body"])) echo "</br>".$comment["body"];?></td>
      <td> <?php if (isset($comment["created_at"])) echo "</br>".$comment["created_at"];?> </td>
      <td> <?php if (isset($comment["updated_at"])) echo "</br>".$comment["updated_at"];?> </td>
    </tr>
    
  </tbody>
</table>
<form method='post' action='#'>
 
    <input class="btn btn-primary" type="button" onclick="history.back()" name="Volver al inicio" value="Volver al inicio">
</form>