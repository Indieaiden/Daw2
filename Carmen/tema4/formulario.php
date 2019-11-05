<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formulario</title>
		<meta charset= "utf-8"/>
		<meta name = "description" content="Mi primerapágina"/>
		<meta name= "author" content= "carmen"/>
		
	</head>
	<body>
		<h1>Funciones de String.</h1>
		<form action='string.php' method='post'>
			<label for="id_texto">Texto : </label>
			<input type="text" name="cadena" id="id_texto"/><br/>
			<select name= "menu">
				<option value="1">Strlen</option>
				<option value="2">Strtolowe</option>
				<option value="3">Strtoupper</option>
				<option value="4">Ucwords</option>
				<option value="5">Ucfirst</option>
				<option value="6">Chr</option>
				<option value="7">Ord</option>
				<option value="8">Ltrim</option>
				<option value="9">Rtrim</option>
				<option value="10">Trim</option>
				<option value="11">Chop</option>
				<option value="12">Substr</option>
				<option value="13">Strrev</option>
				<option value="14">Str_repeat</option>
				<option value="15">Str_pad</option>
				<option value="16">Str_replace</option>
				<option value="17">Explode</option>
				<option value="18">Implode</option>
				<option value="19">Strpos</option>
				<option value="20">Strstr</option>
				<option value="21">Substr_count</option>
				<option value="22">Count_chars</option>					
			</select>
			<br/>
			<input type="submit" value="Enviar"/>
		</form>
	</body>
</html>

