<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
	<form action="recibe.php" method="">
		<input type="text" placeholder="Nombre:" name="nombre">
		<br>

		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" value="hombre" id="hombre">

		<label for="hombre">Mujer</label>
		<input type="radio" name="sexo" value="mujer" id="mujer">

		<select name="year" id="year">
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
		</select>
		<br>

		<label for="terminos">Aceptas los Terminos</label>
		<input type="checkbox" name="terminos" id="terminos" value="ok">


		<input type="submit" value="Enviar">




	</form>




</body>
</html>