<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Simulación de Dados</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<h1>Simulación de dado normal y trucado</h1>

<form method="get" class="mb-4" id="form">
    <label for="tiradas" class="form-label">Número de tiradas:</label>
    <input type="number" min="1" required class="form-control" name="tiradas" id="tiradas"
        value="<?php echo isset($_GET['tiradas']) ? $_GET['tiradas'] : ''; ?>">
    <button class="btn btn-primary mt-3">Simular</button>
</form>

<?php
if (isset($_GET['tiradas'])) {

    $n = intval($_GET['tiradas']);

    echo "<h2>Resultados para $n tiradas</h2>";

    $normal = array_fill(1, 6, 0);
    $trucado = array_fill(1, 6, 0);

    for ($i = 0; $i < $n; $i++) {

        // Dado normal
        $t1 = rand(1, 6);
        $normal[$t1]++;

        // Dado trucado
        // Probabilidades: 1,2,3,4,5,6,6,6  (6 aparece 3 veces)
        $opciones = [1,2,3,4,5,6,6,6];
        $t2 = $opciones[array_rand($opciones)];
        $trucado[$t2]++;
    }

    echo "<h3>Dado normal (equiprobable)</h3>";
    foreach ($normal as $cara => $freq) {
        echo "Cara $cara: $freq<br>";
    }

    echo "<h3 class='mt-4'>Dado trucado (6 es 3 veces más probable)</h3>";
    foreach ($trucado as $cara => $freq) {
        echo "Cara $cara: $freq<br>";
    }

}
?>

<script>
document.getElementById('form').addEventListener('submit', function(e){
    const n = Number(document.getElementById('tiradas').value);
    if (!n || n < 1) {
        alert("Introduce un número válido de tiradas (≥ 1)");
        e.preventDefault();
    }
});
</script>

</body>
</html>
