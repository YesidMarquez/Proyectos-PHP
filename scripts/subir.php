<?php 
$id_img=$_POST['id'];
date('m');
    if (date('m')==01) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
	}elseif (date('m')==2) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
    }elseif (date('m')==3) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
    }elseif (date('m')==4) {
       $dato=Date('m-d');
        $fecha= "2018-".$dato;
    }elseif (date('m')==5) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
    }elseif (date('m')==6) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
    }elseif (date('m')==7) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
    }elseif (date('m')==8) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
    }elseif (date('m')==9) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
    }elseif (date('m')==10) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
    }elseif (date('m')==11) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
    }elseif (date('m')==12) {
        $dato=Date('m-d');
        $fecha= "2018-".$dato;
    }
$validar="imagenes/$fecha/$id_img";
if (!file_exists($validar)) {
		mkdir("imagenes/$fecha/$id_img",  0777, true);
	
}
$uploadfile_temporal=$_FILES['fichero']['tmp_name'];
$ruta="imagenes/$fecha/$id_img/$id_img.jpg";//ruta carpeta donde queremos copiar las imágenes y en nuevo nombre.

 

if (is_uploaded_file($uploadfile_temporal)) 
{ 
    move_uploaded_file($uploadfile_temporal,$ruta); 
} 
else 
{ 
echo "error"; 
}
 echo $ruta;

?> 
