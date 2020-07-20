<?php

function toBin( $num ) {
	if ( $num < 2 )
	//devuelve el valor del final de la recursion
		return $num;
	else
	//devuelve el cálculo recursivo
		return $num % 2 + ( 10 * toBin( intdiv( $num , 2 ) ) );
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Decimal a binario</title>
</head>

<body>
	<h1>Paso de números en base 10 a base 2</h1>
	<form action="" method="post">
		<p>
			<label>
				Ingrese un número entero entre 0 y 1023 en base 10
			</label>
		
			<br>

			<input type="number" name="decimal" value="" min="0" step="1" max="1023">
		</p>
		<p>
			<input type="submit" name="submit" value="Obtener en binario">
		</p>
	</form>
	
	<?php
	//si existen datos en POST
	if ( isset( $_POST[ 'submit' ] ) ) {
		//imprimir el retorno de la función toBin()
		?> El número <?=$_POST[ 'decimal' ]?> en binario es <?=toBin( $_POST[ 'decimal' ] ) ?>
	<?php
	}
	?>
	
</body>
</html>