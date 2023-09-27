<?php
// Verificar si se ha enviado el formulario
if (isset($_GET['buscar'])) {
    // Obtener el valor buscado del formulario
    $valorBuscado = $_GET['valor'];

    // Array de elementos
    $elementos = array(2, 5, 8, 10, 12);

    // Función de búsqueda exhaustiva
    function busquedaExhaustiva($elementos, $valorBuscado) {
        $encontrado = false;
        
        // Recorre cada elemento del array
        foreach ($elementos as $elemento) {
            // Compara el elemento actual con el valor buscado
            if ($elemento == $valorBuscado) {
                $encontrado = true;
                break; // Si se encuentra el elemento, se termina la búsqueda
            }
        }
        
        // Devuelve true si se encontró el valor, false en caso contrario
        return $encontrado;
    }

    // Realizar la búsqueda exhaustiva
    $resultado = busquedaExhaustiva($elementos, $valorBuscado);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>  Búsqueda Exhaustiva</title>
</head>
<body>
    <h1> <b> Búsqueda Exhaustiva </b></h1>
    <form method="get" action="">
        <label for="valor">Valor a buscar:</label>
        <input type="text" name="valor" id="valor" required>
        <input type="submit" name="buscar" value="Buscar">
    </form>

    <?php
    // Mostrar el resultado de la búsqueda
    if (isset($resultado)) {
        if ($resultado) {
            echo "<p>El valor fue encontrado.</p>";
        } else {
            echo "<p>El valor no fue encontrado.</p>";
        }
    }
    ?>
</body>
</html>