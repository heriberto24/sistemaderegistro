<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo APP_URL; ?>users/add" method="POST">
		<p>
			<label for="username">username</label>
			<input type="text" name="username">
		</p>
		<p>
			<label for="password">password</label>
			<input type="text" name="password">
		</p>
		<p>
			<label for="rol">Rol</label>
			<input type="text" name="rol">
		</p>
		<input type="submit" value="Save">
	</form>
</body>
</html>