<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
<div class="container" style="margin-top:4em">
	<div class="row justify-content-lg-center align-items-lg-center">
		<div class="col-lg-6 align-self-center">
			<form action="<?= base_url('login/validate'); ?>" method="POST" id="frm_login">
				<div class="form-group">
					<h1>Login</h1>
				</div>
				<div class="form-group" id="email">
					<label for="exampleInputEmail1">Correo</label>
					<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email">
					<div class="invalid-feedback">

					</div>
				</div>
				<div class="form-group" id="password">
					<label for="exampleInputPassword1">Contraseña</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
					<div class="invalid-feedback">

					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Ingresar</button>
				</div>
				<div class="form-group" id="alert">
				</div>
			</form>
		</div>
	</div>
</div>
<script src="<?= base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/auth/login.js') ?>"></script>
</body>
</html>
