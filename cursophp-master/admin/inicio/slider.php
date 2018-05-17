<!--sec10.1 administrar slider -->
<?php
include '../extend/header.php';

?>

  <!--sec10.1 para cargar imagens-->
  <div class="col s6">
      <h3 class="header">Cargar imagenes para slider</h3>
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
            <form action="ins_slider.php" class="form" method="post" enctype="multipart/form-data"> <!-- enctype="multipart/form-data" es para indicar que el formulario lleva un archivo -->          
            <div class="file-field input-field">
              <div class="btn">
                <span>Imagen</span>
                <input type="file" name="ruta[]" multiple>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" >
              </div>
            </div>
            <button type="submit" class="btn">Guardar</button>
          </form> 
              
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<!--19 mostrar un cargador-->
<div class="row cargador">
  <div class="col s12 center">
     <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
  </div>
</div>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <?php 
        $sel_img = $con->prepare("SELECT * FROM slider ");
        $sel_img->execute();
        $res_img = $sel_img->get_result();
        while ($f_img = $res_img->fetch_assoc()) {?>
        <!--20 -->          
           <a href="#"  onclick="swal({title: 'Esta seguro que desea eliminar la imagen?', text: 'Al eliminarla no podra recuperarlo', type: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Si, eliminarla!' }).then(function () {
                    location.href='eliminar_slider.php?id=<?php echo $f_img['id'] ?>&ruta=<?php echo $f_img['ruta'] ?>'; })"><img src="<?php echo $f_img['ruta'] ?>" alt="" width="980" heigth="250" ></a>
          <?php 
        }
        $sel_img->close();
        $con->close();
        ?>
      </div>
    </div>
  </div>
</div>

<?php include '../extend/scripts.php'; ?>
<!--19 para ocultar el cargador -->
<script>
  $('.cargador').hide();
  $('.form').submit(function(event) {
    $('.cargador').show();
  });
</script>
</body>
</html>