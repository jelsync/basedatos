<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Examen Reposicion</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    
    <div class="container-fluid">
      <!-- Example row of columns -->
      <div class="row ">
        <h1 style="text-align:center;">Formulario de registro</h1>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">    
          <h1 style="text-align:center;">Registro de usuarios</h1>
            <form action="index.php" method="GET">
              <table class = "table table-striped table-hover"  style="margin:0 auto; width: 590px;">
                <tr>
                  <td>Nombre</td>
                  <td><input type="text" class="form-control" id="txt-nombre" name="txt-nombre" ></td>
                </tr>
                <tr>
                  <td>Apellido</td>
                  <td><input type="text" class="form-control" name="txt-apellido" id="txt-apellido"></td>
                </tr>
                <tr>
                  <td>Correo</td>
                  <td><input type="text" class="form-control" name="txt-correo" id="txt-correo"></td>
                </tr>
                <tr>
                  <td>Genero</td>
                 <td>
                  <label><input type="radio" name="rbt-genero" value="F">Femenino</label>
                  <label><input type="radio" name="rbt-genero" value="M">Masculino</label>
                </td> 
                </tr>
                <tr>
                  <td>Tipo de Usuario</td>
                  <td>
                    <label><input type="radio" name="rbt-usuario" value="Administrador">Administrador</label>
                    <label><input type="radio" name="rbt-usuario" value="Principiante">Normal</label>
                  </td>
                </tr>
                <tr>
                  <td>Formularios a los que tiene acceso</td>
                  <td>
                  <label><input type="checkbox" name="">Administrador</label>
                  <label><input type="checkbox" name="">Administrador de Zona</label>
                  <label><input type="checkbox" name="">Moderado</label>
                  <label><input type="checkbox" name="">Visual</label>
                 </td>
                </tr>
                <tr class="table-striped">
                  <td colspan="2"><button type="button" class="btn btn-primary" name="btn-guardar" id="btn-guardar">Guardar</button></td>
                </tr>
              </table>
            </form>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <h1 style="text-align:center;">Informacion guardada</h1>
              <table class = "table table-hover"  style="width: 590px;">
                <th class = "table info" style="text-align:center;">Usuarios registrados</th>
                <tr>
                  <td>Nombre:</td>
                </tr>
                <tr>
                  <td>Apellido:</td>
                </tr>
                <tr>
                  <td>Correo:</td>
                </tr>
                <tr>
                  <td>Genero:</td>
                </tr>
                <tr>
                  <td>Usuario:</td>
                </tr>
                <tr>
                  <td>Acceso:</td>
                </tr>
                
              </table>
            </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
  </body>
</html>
