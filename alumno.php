<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro de alumnos</title>
</head>
<body>
    <form action= "procesar_datos_alumnos.php" method="POST">
        <label for="" >NOMBRE:</label>
        <input type="text" name="txtnombre" id="txtnombre">

        <label for="txtedad">EDAD:</label>
        <input type="number" name="txtedad" id="txtedad">

        <imput type="submit" value="ENVIAR DATOS">
    </form>
</body>
</html>