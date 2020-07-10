
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>dias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    
    <section id="Numeros"><?php 
    $dia=date('d');
    echo "Programa con For<br>";
    for ($i=1; $i <$dia ; $i++) { 
        
       echo $i."<br>";
    }
    echo "Programa con while<br>";
    $j=1;
    while ($j <$dia) {
        echo $j."<br>";
        $j++;
    }
    echo "Programa con do while<br>";
    $k=1;
    do{
        echo $k."<br>"; 
        $k++; 
    }while ($k < $dia);
    
    ?>
              
    
</section>
<section id="btn"><a href="index.html"><input type='button' name='regresar' value='Volver'><br></a> </section>
 
    
</body>
</html>