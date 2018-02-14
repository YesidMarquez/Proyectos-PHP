<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <script src="../js//jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script> 
    <!--<link href="../css/style.css" rel="stylesheet">-->
    
</head>
<body><font face="Comic Sans MS,verdana">
    <div class="container">
        <div class="row">
            <h3 style="text-align:center">INGRESO DE PERSONAL</h3>
        </div>
        <form class="form-horizontal" method="POST"  action="../operaciones/modulos/insertar_persona.php">
            <div class="form-group">
                <label  class="col-sm-2 control-label">Cedula</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Nombre 1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre_1" name="nombre_1" placeholder="Nombre 1" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Nombre 2</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre_2" name="nombre 2" placeholder="Nombre 2" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Apellido 1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellido_1" name="apellido 1" placeholder="Apellido 1" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Apellido 2</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellido_2" name="apellido 2" placeholder="Apellido 2" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Fecha Nacimiento</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nac" name="nac" placeholder="Fecha Nacimiento" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Ciudad Nacimiento</label>
                <div class="col-sm-10">
                    <select class="form-control" id="c_na" name="c_na">
                        <option value="PEREIRA">PEREIRA</option>
                        <option value="CARTAGO">CARTAGO</option>
                        <option value="DOSQUEBRADAS">DOSQUEBRADAS</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Ciudad Expedicion</label>
                <div class="col-sm-10">
                    <select class="form-control" id="c_exp" name="c_exp">
                        <option value="SOLTERO">PEREIRA</option>
                        <option value="CASADO">CARTAGO</option>
                        <option value="OTRO">DOSQUEBRADAS</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Tipo sangre</label>
                <div class="col-sm-10">
                    <select class="form-control" id="t_san" name="t_san">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Direccion</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
                </div>
            </div>
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Ciudad/Residencia</label>
                    <div class="col-sm-10">
                        <select type="text" class="form-control" id="c_res" name="c_res" placeholder="Ciudad/Residencia" >
                            <option value="PEREIRA">PEREIRA</option>
                            <option value="DOSQUEBRADAS">DOSQUEBRADAS</option>
                            <option value="CARTAGO">CARTAGO</option>
                        </select>
                       
                    </div>
            </div>
                      
            <div class="form-group">
                <label for="nombre" class="col-sm-2 control-label">Telefono</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="tel" name="tel" placeholder="tel" >
                </div>
            </div>
            
            <div class="form-group">
                <label for="SEXO" class="col-sm-2 control-label">Sexo</label>
                <div class="col-sm-10">
                    <select class="form-control" id="sexo" name="sexo">
                        <option value="MASCULINO">Masculino</option>
                        <option value="FEMENINO">Femenino</option>
                        <option value="OTRO">OTRO</option>
                    </select>
                </div>
            </div>
            <!--<div class="form-group">
                <label for="estado_civil" class="col-sm-2 control-label">Estado</label>
                <div class="col-sm-2">
                    <select class="form-control" id="estado" name="estado">
                        <option value="1">ACTIVO</option>
                        <option value="2">INACTIVO</option>
                        
                    </select>
                                           
                </div>-->
            </div>

            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="menu_ingresos.php" class="btn btn-default">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                
            </div>
        </form>
    </div>
</body>
</html>
<head>
        
        


    
   
