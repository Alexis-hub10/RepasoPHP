<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="circulo"><h1>Ingresa los siguientes valores</h1><br>
                <form method='post'><br>
                <input type='text' name='radio' placeholder='Ingrese el radio'><br>
                
                <input type='submit' name='calcular' value='Calcular'><br>
                </form>
                <a href="index.html"><input type='button' name='regresar' value='Volver'><br></a>
                <?php
                if (isset($_POST['calcular'])) {
                    $radio=$_POST['radio'];
                    
    
                    $area=3.1416*($radio*$radio);
    
                    echo "<script type='text/javascript'>alert('El resulato es: $area');</script>";

                }
                ?></section>

</body>
</html>



