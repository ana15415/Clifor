<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/loginStyle.css">

</head>
<body>
<form  method="post" id= "iniciar" name="iniciar" onsubmit="iniciarsesion(); return false">
	<legend>Iniciar sesión</legend>
	<input type="text" placeholder="usuario" name="usuario" required>
	<input type="password" placeholder="contraseña" name="password" required>
	<input type="submit">	
</form>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
	<p></p>
	<p></p>
	<center> 
	 <button type="button" onclick="ventananuevo();" class="btn btn-primary btn-lg" >
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Registrarse
    </button>
	</center> 

<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nuevo Paciente</h4>
            </div>
            <form role="form"  id= "frmpaciente" name="frmpaciente" onsubmit="Registrarpaciente(); return false">
              <div class="col-lg-12">               

                <div class="form-group">
                  <label>Nombre de usuario</label>
                  <input  name="nombreusuario" class="form-control" required>
                </div>
                
                 <div class="form-group">
                  <label>DNI</label>
                  <input  name="dni" class="form-control" required>
                </div>
                 
                <div class="form-group">
                  <label>Nombre</label>
                  <input  name="nombre" class="form-control" required>
                </div>
                 
                <div class="form-group">
                  <label>mascota</label>
                  <input  name="mascota" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label>Sexo</label>
                    <select name='sexo' class='form-control'>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </div>
                
                <div class="form-group">
                  <label>edad</label>
                  <input  name="edad"  class="form-control" required>
                </div>
                 
                 <div class="form-group">
                  <label>raza</label>
                  <input  name="raza" class="form-control" required>
                </div>
                
                 <div class="form-group">
                     <label>servicio</label>
                     <select name='servicio' class='form-control'>
                         <option value="baño y corte">baño y corte</option>
                         <option value="atencion medica">atencion medica</option>
                     </select>
                </div>
                 
                <div class="form-group">
                  <label>Telefono</label>
                  <input  name="telefono" class="form-control" required>
                </div>
                 
                 <div class="form-group">
                  <label>direccion</label>
                     <input  name="direccion" class="form-control" required>
                 </div>

                <div class="form-group">
                  <label>password</label>
                  <input  name="password" id="p1" type="password" class="form-control" required>
                </div>
                
                <div class="form-group">
                  <label>repita password</label>
                  <input  name="password2" id="p2" type="password" class="form-control" required>
                </div>                         
                
                <button type="submit" class="btn btn-primary btn-lg" button='agregar'>
                  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Registrar
                </button>
              </div>
            </form>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
 <!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	
        function ventananuevo(){
          $('#modal').modal('show');

        }
    </script>
</body>
</html>