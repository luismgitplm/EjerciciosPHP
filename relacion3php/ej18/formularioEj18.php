<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-light">
    <form action="muestraDeMenus.php" method="get">
        <label for="numero">Indique el número de menús a sugerir</label>
        <input type="text" class="form-control" name="numero" id="numero">
        <input type="submit" value="Generar">
    </form>

</body>

</html>