<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
</head>
<body>
    <h1>Editar Empleado</h1>

    <form action="<?php echo site_url('empleados/updateUsuario/' . $empleado->id_usuario); ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $empleado->nombre; ?>" required>
        <br>
        <label for="apellido1">Apellido 1:</label>
        <input type="text" id="apellido1" name="apellido1" value="<?php echo $empleado->apellido1; ?>" required>
        <br>
        <label for="apellido2">Apellido 2:</label>
        <input type="text" id="apellido2" name="apellido2" value="<?php echo $empleado->apellido2; ?>" required>
        <br>
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="<?php echo $empleado->direccion; ?>" required>
        <br>
        <button type="submit">Guardar Cambios</button>
        <a href="<?php echo site_url('empleados'); ?>">Cancelar</a>
    </form>

</body>
</html>
