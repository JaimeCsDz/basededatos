<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>Edición Fabricante</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->

    <link rel="stylesheet" href="../assets/css/material-dashboard.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body>
    <?php
    include('../conec.php'); //conexion a la bd
    $id = $_GET['id']; //variable enviada desde la pagina fabricante.php
    //query
    $consulta = "CALL sp_edicionFabricante('$id')"; //"SELECT * FROM fabricante WHERE codigo ='$id'";
    //consulta a la bd e insercion de query
    $resultado = mysqli_query($conexion, $consulta);
    //Recorrido de registros
    $fila = mysqli_fetch_array($resultado);
    ?>
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">

                    <form action="editarfabricante.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Editar el nombre del fabricante</label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $fila["nombre"] ?>" />
                        </div>
                        <input type="hidden" name="id" value="<?php echo $fila["codigo"] ?>" />
                        <input type="submit" name="Enviar" value="Editar fabricante" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <!--Option 1 bootstrap bundle witch popper-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>