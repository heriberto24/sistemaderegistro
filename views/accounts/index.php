<!-- Vista index-->
<div class="row">
  <div class="col-ms-12">
    
<table class="table table-hover" border="2">
  <h2>Cuentas</h2>
  <thead>
    <tr>
        <th >ID</th>
		    <th >ID del usuario</th>
		    <th >Nombre</th>
		    <th >Action</th>
		</tr>
  </thead>
  <tbody>
<?php foreach ($accounts as $account ): ?>
    <tr>
        <td bgcolor="#848484"><strong><?php echo $account['id']; ?></strong></td>
		<td><?php echo $account['user_id']; ?></td>
		<td><?php echo $account['name']; ?></td>
		<td>
          <a href="<?php echo APP_URL; ?>accounts/edit/<?php echo $account["id"]; ?>">Editar</a>
      <a href="<?php echo APP_URL;?>accounts/delete/?id=<?php echo $account['id']; ?>">Eliminar</a>
    </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<br>
<form action="<?php echo APP_URL; ?>accounts/add">
    <input type="submit" value="Nuevo cuenta">
</form>
</div>
</div>
