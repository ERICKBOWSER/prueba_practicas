<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles_empleados.css'); ?>">
</head>
<body>
    <div id="body_empleados">
    <a href="<?php echo site_url('empleados_c/aniadirEmpleado/'); ?>">
        <button id="aniadir_empleado">Añadir empleado</button>
    </a>
    <h1>Lista de Empleados</h1>
    <?php if (isset($empleados) && count($empleados) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleados as $empleado): ?>
                    <tr>
                        <td><?php echo $empleado->nombre; ?></td>
                        <td><?php echo $empleado->apellido1 . " " . $empleado->apellido2; ?></td>
                        <td><?php echo $empleado->direccion; ?></td>
                        <td>
                            <a href="<?php echo site_url('empleados_c/editarUsuario/' . $empleado->id_usuario); ?>">
                                <button>Editar</button>
                            </a>
                            <a href="<?php echo site_url('empleados_c/confirmarDelete/' . $empleado->id_usuario); ?>">
                                <button>Borrar</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay empleados registrados en la base de datos.</p>
    <?php endif; ?>
    </div>

</body>
</html>
