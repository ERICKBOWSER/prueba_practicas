<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
</head>
<body>
    <h1>Lista de Empleados</h1>
    <?php if (isset($empleados) && count($empleados) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleados as $empleado): ?>
                    <tr>
                        <td><?php echo $empleado->nombre; ?></td>
                        <td><?php echo $empleado->apellido1; ?></td>
                        <td><?php echo $empleado->apellido2; ?></td>
                        <td><?php echo $empleado->direccion; ?></td>
                        <td>
                            <a href="<?php echo site_url('empleados/editarUsuario/' . $empleado->id_usuario); ?>">
                                <button>Editar</button>
                            </a>
                            <a href="<?php echo site_url('empleados/deleteUsuario/' . $empleado->id_usuario); ?>" onclick="return confirm('¿Estás seguro de que deseas borrar este empleado?');">
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

</body>
</html>
