<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap"
        rel="stylesheet">
    <title>Actividad Unidad 2</title>
</head>

<body>
    <h1>Biblioteca</h1>

    <?php

$titulo = "Entrada y salida de libros por fecha";
$fecha1 = "01/08/2022";
$Libros_en_stock1 = 2500;
$Libros_devueltos1 = 210;
$Libros_prestados1 = 50;
$Nuevas_adquisiciones1 = 25;
$Donaciones1 = 150;

$total_libros_dia1 = $Libros_en_stock1 + $Libros_devueltos1 + $Nuevas_adquisiciones1 + $Donaciones1 - $Libros_prestados1;

$fecha2 = "02/08/2022";
$Libros_en_stock2 = $total_libros_dia1;
$Libros_devueltos2 = 42;
$Libros_prestados2 = 28;
$Nuevas_adquisiciones2 = 75;
$Donaciones2 = 40;

$total_libros_dia2 = $Libros_en_stock2 + $Libros_devueltos2 + $Nuevas_adquisiciones2 + $Donaciones2 - $Libros_prestados2;


?>

    <div>

        <h2>
            <?php echo $titulo; ?>
        </h2>

        <div class="dia-uno">
            <p>Movimientos día: <?php echo $fecha1; ?> </p>
            <ul>
                <li>Libros en Stock: <?php echo $Libros_en_stock1; ?> </li>
                <li>Libros devueltos: <?php echo $Libros_devueltos1; ?></li>
                <li>libros prestados: <?php echo $Libros_prestados1; ?></li>
                <li>Nuevas adquisiciones: <?php echo $Nuevas_adquisiciones1; ?> </li>
                <li>Donaciones: <?php echo $Donaciones1; ?> </li>
                <li>Total libros en stock del dia: <?php echo $total_libros_dia1; ?> </li>

            </ul>

        </div>

        <div class="dia-dos">
            <p>Movimientos día: <?php echo $fecha2; ?> </p>
            <ul>
                <li>Libros en Stock: <?php echo $Libros_en_stock2; ?></li>
                <li>Libros devueltos: <?php echo $Libros_devueltos2; ?> </li>
                <li>libros prestados: <?php echo $Libros_prestados2; ?></li>
                <li>Nuevas adquisiciones: <?php echo $Nuevas_adquisiciones2; ?></li>
                <li>Donaciones: <?php echo $Donaciones2; ?></li>
                <li>Total libros en stock del dia: <?php echo $total_libros_dia2; ?></li>

            </ul>

        </div>


    </div>

</body>

</html>