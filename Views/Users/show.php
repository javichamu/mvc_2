<h1>Vista usuario</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Remember Token</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td><?php if (isset($user["id"])) echo "</br>".$user["id"];?></td>
      <td><?php if(isset($user["name"])) echo "</br>".$user["name"];?></td>
      <td><?php if (isset($user["email"])) echo "</br>".$user["email"];?></td>
      <td> <?php if (isset($user["password"])) echo "</br>".$user["password"];?></td>
      <td> <?php if (isset($user["remember_token"])) echo "</br>".$user["remember_token"];?> </td>
      <td> <?php if (isset($user["created_at"])) echo "</br>".$user["created_at"];?> </td>
      <td> <?php if (isset($user["updated_at"])) echo "</br>".$user["updated_at"];?> </td>
    </tr>
    
  </tbody>
</table>
<form method='post' action='#'>

    <input class="btn btn-primary" type="button" onclick="history.back()" name="Volver al inicio" value="Volver al inicio">
</form>