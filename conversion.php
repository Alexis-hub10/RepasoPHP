<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Convertir</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<section id="conversion">
<form method="post"><section>
	<select name="moneda1">
		<option >Selecciona..</option>
		<option value="Dolares">Dolar</option>
		<option value="Euros">Euros</option>
		<option value="Pesos">Pesos</option>
	</select>
	<input type="text" name="divisa">
</section>
<h3>Convertir a</h3>
	<section>
		
		<select name="moneda2">
		<option>Selecciona..</option>
		<option value="Dolares">Dolar</option>
		<option value="Euros">Euros</option>
		<option value="Pesos">Pesos</option>
	</select>
	
	</section>
	<input type="submit" name="calcular" value="calcular">
</form>
<a href="index.html"><input type='button' name='regresar' value='Volver'><br></a>    

<?php 
if (isset($_POST['calcular'])) {
$moneda1=$_POST['moneda1'];
$moneda2=$_POST['moneda2'];
$divisa=$_POST['divisa'];


if ($moneda1=='Pesos' && $moneda2=='Dolares') {
		$conversion=$divisa*0.043." ".$moneda2;
		echo "<script type='text/javascript'>alert('El resulato es: $conversion');</script>";


}elseif ($moneda1=='Pesos' && $moneda2=='Euros') {
		$conversion=$divisa*0.039." ".$moneda2;
		echo "<script type='text/javascript'>alert('El resulato es: $conversion');</script>";


}elseif ($moneda1=='Dolares' && $moneda2=='Pesos') {
		$conversion=($divisa*22)." ".$moneda2;
		echo "<script type='text/javascript'>alert('El resulato es: $conversion');</script>";


}elseif ($moneda1=='Dolares' && $moneda2=='Euros') {
		$conversion=$divisa*0.89." ".$moneda2;
		echo "<script type='text/javascript'>alert('El resulato es: $conversion');</script>";


}elseif ($moneda1=='Euros' && $moneda2=='Dolares') {
		$conversion=$divisa*1.12." ".$moneda2;
		echo "<script type='text/javascript'>alert('El resulato es: $conversion');</script>";


}elseif ($moneda1=='Euros' && $moneda2=='Pesos') {
		$conversion=$divisa*25.94." ".$moneda2;
		echo "<script type='text/javascript'>alert('El resulato es: $conversion');</script>";

}
	



}


 ?></section>
</body>
</html>