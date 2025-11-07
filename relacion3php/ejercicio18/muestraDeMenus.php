<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php
    $menu = [
        'entrante' => ['Ensalada César', 'Hummus', 'Boquerones al natural'],
        'primero'  => ['Gazpachuelo', 'Salmorejo', 'Ajo Blanco'],
        'segundo'  => ['Fritura Malagueña', 'Conejo al ajillo', 'Pisto con huevo'],
        'postre'   => ['Helado 3 sabores', 'Flan', 'Tarta de Queso']
    ];


    $n = $_GET['numero'];

    function generarMenus($menu, $n)
    {
        $sugerencias = [];

        for ($i = 0; $i < $n; $i++) {
            $sugerencias[] = [
                'entrante' => $menu['entrante'][mt_rand(0, 2)],
                'primero'  => $menu['primero'][mt_rand(0, 2)],
                'segundo'  => $menu['segundo'][mt_rand(0, 2)],
                'postre'   => $menu['postre'][mt_rand(0, 2)]
            ];
        }

        return $sugerencias;
    }

    $menusSugeridos = generarMenus($menu, $n);
    ?>

    <div class="d-flex flex-wrap gap-3">
        <?php foreach ($menusSugeridos as $menu): ?>
            <div class="card p-2" style="width:200px;">
                <strong>Menú</strong><br>
                Entrante: <?= $menu['entrante'] ?><br>
                Primero: <?= $menu['primero'] ?><br>
                Segundo: <?= $menu['segundo'] ?><br>
                Postre: <?= $menu['postre'] ?>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>