<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bienvenido al Dashboard</h1>
    <?php if($val = $this->session->flashdata('msg')): ?>
    <p><?= $val ?></p>
    <?php endif; ?>
    <a href="<?= base_url('login/logout');?>">Cerrar Sesión</a>
</body>

</html>