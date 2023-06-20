<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Planillas</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form class="m-auto w-50 mt-2 mb-2" method="POST" enctype="multipart/form-data" action="cargaimg.php">
        <div class="row g-2">
  <div class="col-md">
    <div class="form-floating">
      <input type="numero" class="form-control"   name="hoja">
      <label for="floatingInputGrid">Hoja N°</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control"   name="mes">
      <label for="floatingInputGrid">Mes</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <input type="numero" class="form-control"  name="anio">
      <label for="floatingInputGrid">Año</label>
    </div>
  </div>
        </div>
           
            <div class="mb-2">
                <label class="form-label">Seleccione imagen</label>
                <input class='form-control form-control-sm' type="file" name="archivo">
            </div>
            <button class="btn btn-primary btn-sm">Cargar</button>
        </form>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
        <table class="table table-sm table-striped">
            <thead >
                <tr>
                    
                    <th>Hoja N°</th>
                    <th>Mes</th>
                    <th>Año</th>
                    <th>Imagen</th>
                    <th ></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                require_once 'conexion.php';
                $query=mysqli_query($conn,"SELECT * FROM planilla");
                while($fila=mysqli_fetch_array($query))
                { ?>
                    <tr>
                  
                    <td><?php echo $fila['hoja'];?></td>
                    <td><?php echo $fila['mes'];?></td>
                    <td><?php echo$fila['anio'];?></td>
                    <td><img src="<?php echo $fila['img'];?>" width=80px heigth=auto></td>
                    <td><a href="in_dex2.php?id=<?php echo $fila['id_img'];?>"><button class="btn btn-success btn-block" type="button">Descargar</button></a></td>
                    <td><a href="in_dex.php?id=<?php echo $fila['id_img'];?>"><button class="btn btn-warning btn-block" type="button">Editar</button></a></td>
				
                    <td><a href="eli_imagen.php?id=<?php echo $fila['id_img'];?>" onClick="return confirm('Seguro de esta acción? el archivo será eliminado y una vez eliminado no se podrá recuperar')"><button class="btn btn-danger btn-block" type="button" >Eliminar</button></a></td>
                    </tr>
                    <?php
                   
                }
                ?>
                    
            </tbody>
        </table>
        </div>
    </div>
<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
