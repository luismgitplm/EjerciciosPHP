<?php
echo "<h2>FUNCIONES DE ARRAYS</h2>";

echo "<h3>1. count()</h3>";
$nums = [1, 2, 3, 4];
echo count($nums); // 4
echo " ← Cuenta los elementos del array<br><br>";

echo "<h3>2. array_push()</h3>";
$frutas = ["Manzana", "Pera"];
array_push($frutas, "Naranja");
print_r($frutas);
echo " ← Añade elementos al final<br><br>";

echo "<h3>3. array_pop()</h3>";
$ultimo = array_pop($frutas);
echo "Elemento eliminado: $ultimo<br>";
print_r($frutas);
echo " ← Elimina el último elemento<br><br>";

echo "<h3>4. array_shift()</h3>";
$primero = array_shift($nums);
echo "Eliminado: $primero → ";
print_r($nums);
echo " ← Elimina el primer elemento<br><br>";

echo "<h3>5. array_unshift()</h3>";
array_unshift($nums, 100);
print_r($nums);
echo " ← Inserta un elemento al principio<br><br>";

echo "<h3>6. array_merge()</h3>";
$a = [1, 2];
$b = [3, 4];
print_r(array_merge($a, $b));
echo " ← Junta dos arrays<br><br>";

echo "<h3>7. array_slice()</h3>";
$parte = array_slice([10, 20, 30, 40, 50], 1, 3);
print_r($parte);
echo " ← Extrae una parte del array<br><br>";

echo "<h3>8. array_splice()</h3>";
$colores = ["Rojo", "Verde", "Azul", "Amarillo"];
array_splice($colores, 1, 2, ["Negro"]);
print_r($colores);
echo " ← Reemplaza secciones del array<br><br>";

echo "<h3>9. in_array()</h3>";
echo in_array("Verde", $colores) ? "Sí" : "No";
echo " ← Comprueba si un valor existe<br><br>";

echo "<h3>10. array_search()</h3>";
echo array_search("Negro", $colores);
echo " ← Devuelve el índice del elemento<br><br>";

echo "<h3>11. array_sum()</h3>";
echo array_sum([1, 2, 3]);
echo " ← Suma todos los valores<br><br>";

echo "<h3>12. array_unique()</h3>";
print_r(array_unique([1, 1, 2, 3, 3]));
echo " ← Elimina duplicados<br><br>";

echo "<h3>13. sort()</h3>";
$letras = ["z", "a", "m"];
sort($letras);
print_r($letras);
echo " ← Ordena un array de forma ascendente<br><br>";

echo "<h3>14. rsort()</h3>";
rsort($letras);
print_r($letras);
echo " ← Ordena de forma descendente<br><br>";

echo "<h3>15. implode()</h3>";
echo implode(", ", ["PHP", "Java", "Python"]);
echo " ← Une elementos con un separador<br><br>";


///////////////////////
// FUNCIONES STRING
///////////////////////

echo "<h2>FUNCIONES DE STRINGS</h2>";

echo "<h3>1. strlen()</h3>";
echo strlen("Hola");
echo " ← Longitud del string<br><br>";

echo "<h3>2. strtoupper() / strtolower()</h3>";
echo strtoupper("hola") . " / " . strtolower("MUNDO") . "<br>";
echo " ← Convierte a mayúsculas y minúsculas<br><br>";

echo "<h3>3. ucfirst() / ucwords()</h3>";
echo ucfirst("hola mundo") . "<br>";
echo ucwords("hola mundo") . "<br>";
echo " ← Mayúscula inicial<br><br>";

echo "<h3>4. trim()</h3>";
echo "[" . trim("   Hola   ") . "]";
echo " ← Quita espacios al inicio y al final<br><br>";

echo "<h3>5. explode()</h3>";
print_r(explode(" ", "Hola mundo PHP"));
echo " ← Convierte string en array<br><br>";

echo "<h3>6. implode()</h3>";
echo implode("-", ["2025","11","25"]);
echo " ← Convierte array en string<br><br>";

echo "<h3>7. str_replace()</h3>";
echo str_replace("mundo", "PHP", "Hola mundo");
echo " ← Reemplaza texto<br><br>";

echo "<h3>8. substr()</h3>";
echo substr("programación", 0, 7);
echo " ← Extrae parte de un string<br><br>";

echo "<h3>9. strpos()</h3>";
echo strpos("Hola mundo", "mundo");
echo " ← Busca posición de palabra<br><br>";

echo "<h3>10. strrev()</h3>";
echo strrev("Hola");
echo " ← Invierte un string<br><br>";

echo "<h3>11. htmlspecialchars()</h3>";
echo htmlspecialchars("<b>Hola</b>");
echo " ← Escapa caracteres HTML<br><br>";

echo "<h3>12. number_format()</h3>";
echo number_format(12345.6789, 2, ',', '.');
echo " ← Formatea números<br><br>";

echo "<h3>13. md5() / sha1()</h3>";
echo md5("texto") . "<br>";
echo sha1("texto");
echo " ← Hash rápido (no seguro para contraseñas)<br><br>";

echo "<h3>14. preg_split()</h3>";
print_r(preg_split('/\s+/', "Hola   mundo  de PHP"));
echo " ← Divide por regex<br><br>";

echo "<h3>15. sprintf()</h3>";
echo sprintf("Mi nombre es %s y tengo %d años", "Juan", 30);
echo " ← Construye cadenas formateadas<br><br>";

?>
