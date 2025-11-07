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
