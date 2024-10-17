<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>
<body>
    <form action="<?php echo site_url('admin/loginVerificacion'); ?>" method="post">
        <h2>Iniciar Sesión</h2>
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="contrasenia">Contraseña:</label>
        <input type="password" name="contrasenia" id="contrasenia" required>
        <br>

        <?php if ($this->session->flashdata('error')): ?>
            <p><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
