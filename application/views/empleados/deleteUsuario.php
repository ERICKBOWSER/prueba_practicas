<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Borrado</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles_delete.css'); ?>">
</head>
<body>
    <div class="container">
        <h1>Confirmar Borrado</h1>
        <p>¿Estás seguro de que deseas borrar al empleado: <?php echo $empleado->nombre; ?>?</p>
        <div id="confirmacion">
            <form action="<?php echo site_url('empleados_c/deleteUsuario/' . $empleado->id_usuario); ?>" method="post">
                <button type="submit">Sí</button>
            </form>
            <a href="<?php echo site_url('empleados_c'); ?>">
                <button>No</button>
            </a>
        </div>
    </div>
</body>
</html>
