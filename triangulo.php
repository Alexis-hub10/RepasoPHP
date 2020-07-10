<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="triangulo">
        <h1>Ingresa los siguientes valores</h1><br>
            <form method="post"><br>
            <input type="text" name="altura" placeholder="Ingrese la altura"><br>
            <input type="text" name="base" placeholder="Ingrese la base"><br>
            <input type="submit" name="calcular" value="Calcular"><br>
            </form>
            <a href="index.html"><input id="volver" type='button' name='regresar' value='Volver'><br></a>    
            <?php 
            if (isset($_POST['calcular'])) {
               
                

                $altura=$_POST['altura'];
                $base=$_POST['base'];

                $area=($altura*$base)/2;

               
                echo "<script type='text/javascript'>alert('El resulato es: $area');</script>";
            }
            
            ?></section>

</body>
</html>