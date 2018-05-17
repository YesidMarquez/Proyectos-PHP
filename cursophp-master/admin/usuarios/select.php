<!--1.0 consultas preparadas -->
<!--esta manera no sirve para hostin gratuito -->
<?php
$id = 1;

$sel = $con->prepare("SELECT * FROM mitabla WHERE id=?");
$sel -> bind_param('i',$id);
$sel -> execute();
$res = $sel->get_result(); 
?>

<table>
<!--while que recorre todas las filas  -->
<!--manera uno de hacer un select preparado -->
	<th>id estado</th>
	<th>nombre estado</th>
	<?php while ($f = $res->fetch_assoc()) { ?> <!--con fetch_assoc nos trahemos solo los campos que indicamos de la tabla -->
		<tr>
			<td><?php echo $f['id'] ?></td>
			<td><?php echo $f['estado'] ?></td>
		</tr>
		<?php }
		$sel->close();
		$con->clase();
		?>
	}
</table>

<!--segunda manera de hacer un select preparado -->
<!--esta sirve para hostin gratuito -->
<?php
$id = 1; 
$sel = $con->prepare("SELECT id,estado FROM mitabla WHERE id=?");
$sel -> bind_param('i',$id);
$sel -> execute();
$sel -> bind_result($id,$estado);
?>

<table>
<!--while que recorre todas las filas  -->
<!--manera uno de hacer un select preparado -->
	<th>id estado</th>
	<th>nombre estado</th>
	<?php while ($sel->fetch()) { ?>
		<tr>
			<td><?php echo $id ?></td>
			<td><?php echo $estado ?></td>
		</tr>
		<?php }
		$sel->close();
		$con->clase();
		?>
	}
</table>