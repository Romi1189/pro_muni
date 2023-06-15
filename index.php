


<?php  // llamar a la conexion a la base de datos.-

 $usuario = "usuario";
 $pass = "pass";
 $mensaje = "mensaje";


include_once ('conexion.php');

if (isset($_POST['ingresar'])){

    $ruser = ($_POST['usuario']);
    $rpass = ($_POST['pass']);
    //$mensaje = ($_POST['mensaje']);

$consulta = "SELECT * FROM usuarios WHERE usuario = '$ruser' and pass = '$rpass'";
 
if  ($resultado= mysqli_query($conn, $consulta)) {
    if ($resultado->num_rows >=1) {
        while ($fila = $resultado->fetch_object()) {// verifica linea por linea el user y pss
                                                   // verifica linea y parametro de donde lo va a buscar 
            $usuario = $fila->usuario;
            $pass = $fila->pass;
        } 
          
    }






 if ($resultado->num_rows >=1) {
       session_start();

        $_SESSION['usuario'] = $resultado->fetch_object()->usuario;
        $_SESSION['pass'] = $resultado->fetch_object()->pass;






     
        header("Location: index1.php");
    } else { 
        echo "Usuario o contraseña incorrectos";
    
        
    

    }

}
}

?>
   
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos2.css">
    <title>LOGIN</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="form-group text-center pt-3">

                        <div  mx-auto>
                            <img src="img/logo1.png" class="rounded-circle" alt="Cinque Terre" width="250" height="250">
                        </div>
                        <h1 class="text-light">MUNICIPALIDAD DE ANGACO</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" name="usuario" class="form-control" placeholder="Ingrese su Usuario">
                    </div>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="password" name="pass" placeholder="Ingrese su Contraseña" class="form-control">
                    </div>
                    <div class="form-group mx-sm-4 pb-2">
                        <input type="submit" name="ingresar" class="btn btn-block ingresar" value="INGRESAR">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>