<?php 
require 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Números reversibles & Diferencia absoluta</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="funciones.js" type="text/javascript"></script>
</head>
<body style="background: rgba(0, 0, 0, 0.1);">
	<div class="container bg-light">
		<div class="row mt-5">
			<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 offset-md-4 offset-md-4 offset-lg-4 offset-xl-4 mt-3 mb-2">
				<h3>Números Reversibles</h3>
				<input type="text" id="numero" placeholder="Número">
				<button type="button" onclick="IsReversible()">Enviar</button>
			</div>
		</div>
		<hr>
		<div class="row mt-3">
			<div class="col-sm-12 col-md-10 col-lg-8 col-xl-8 offset-md-1 offset-lg-2 offset-xl-3 mb-3">
				<h3>Diferencia Absoluta</h3>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
					<table>
						<tr>
							<td>
								<input type="text" name="num1" placeholder="Número 1">
								<input type="text" name="num2" placeholder="Número 2">
								<input type="text" name="num3" placeholder="Número 3">
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="num4" placeholder="Número 4">
								<input type="text" name="num5" placeholder="Número 5">
								<input type="text" name="num6" placeholder="Número 6">
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" name="num7" placeholder="Número 7">
								<input type="text" name="num8" placeholder="Número 8">
								<input type="text" name="num9" placeholder="Número 9">
							</td>
						</tr>
						<caption class="text-center">
							<input type="submit" name="submit" class="btn btn-primary" value="Enviar">
						</caption>
					</table>
				</form>
				<?php if(isset($diferencia)){ echo $diferencia; } ?>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>