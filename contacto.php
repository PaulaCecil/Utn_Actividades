<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contacto</title>
</head>

<body>

    <h2>Contacto</h2>

    <form action="enviar_consulta.php" method="post">

        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        <input type="email" name="correo" placeholder="Correo electrónico"><br>
        <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Escribí tu mensaje"></textarea>
        <input type="submit" value="Enviar Consulta">


    </form>


</body>

</html>