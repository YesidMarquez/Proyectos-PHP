<?php @session_start(); ?>
	<html>
	<head>
	<title>Acceso por LDAP</title>
	<body>
	<form method="post" action="pr.php"><br>
		<table>
			<tr>
				<td>Usuario:</td>
				<td><input type="text" maxlength="50" name="usuario" id="usuario" /></td>
			</tr>
			<tr>
				<td>Clave:</td>
				<td><input type="password" maxlength="50" name="clave" id="clave" />
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Entrar"></td>
			</tr>
		</table><br>
		</form>
	</body>
	</html>
<?php exit(); ?>
