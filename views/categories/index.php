<!-- Vista Index-->
<div class="row">
<div class="col s12 m12 l12">
<table class="table table-hover" border="2">
  <h2>Categorias</h2>
  <thead>
    <tr>
        <th ><i>Id</i></th>
		    <th ><i>Nombre</i></th>
		    <th ><i>Action</i></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($categories as $category ): ?>
    <tr>
      <td ><strong><?php echo $category['id']; ?></strong></td>
      <td><?php echo $category['name']; ?></td>
      <td>
	    <a href="<?php echo APP_URL; ?>categories/edit/<?php echo $category['id']; ?>">Editar</a>
		<a href="<?php echo APP_URL; ?>categories/delete/?id=<?php echo $category['id']; ?>">Eliminar</a>
      </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</div>
<br>
<form action="<?php echo APP_URL; ?>categories/add/">
      <input type="submit" value="Nueva categoria">
  </form>
</div>
