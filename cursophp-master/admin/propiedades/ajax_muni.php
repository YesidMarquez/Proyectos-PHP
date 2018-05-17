<!--10.1 -->
<?php 
include '../conexion/conexion.php';
$estado = htmlentities($_POST['estado']);
?>

<select id="municipio" name="municipio" required="">
            <option value="" disabled selected>Selecciona un municip</option>
            <?php $sel_muni = $con->prepare("SELECT * FROM municipios WHERE idestado = ? ");
            $sel_muni->bind_param('i', $estado);
            $sel_muni->execute();
            $res_muni = $sel_muni->get_result();
            while ($f_muni = $res_muni->fetch_assoc()) {?>
                <option value="<?php echo $f_muni['municipio'] ?>"><?php echo $f_muni['municipio'] ?></option>
                <?php }
                $sel_muni->close();
                ?>
</select>
<!--inicializamos el select para que se muestren los municipios -->
<script>
	$('select').material_select();
</script>
