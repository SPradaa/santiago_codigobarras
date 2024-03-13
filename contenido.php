<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Información de Lotes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Información de Productos</h2>
    <?php
    require_once("conexion/connection.php"); 
    $db = new Database();
    $con = $db->conectar();

    $query = "SELECT id_lote, barrio, frente, ancho, owner, codigo_barras FROM barcode";
    $result = $con->query($query);

    if ($result->rowCount() > 0) {
        echo "<table class='table'>";
        echo "<thead><tr><th>id_code</th><th>Barrio</th><th>Frente</th><th>Ancho</th><th>Dueño</th><th>Código de Barras</th></tr></thead><tbody>";
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["id_lote"] . "</td>";
            echo "<td>" . $row["barrio"] . "</td>";
            echo "<td>" . $row["frente"] . " Metros</td>";
            echo "<td>" . $row["ancho"] . " METROS </td>";
            echo "<td>" . $row["owner"] . "</td>";
            echo "<td><img src='image/" . $row["codigo_barras"] . ".png' alt='Código de Barras' style='max-height: 50px;'></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p>No se encontraron resultados.</p>";
    }
    ?>
    <button class="btn btn-secondary" onclick="goBack()">Volver</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Función para volver a la página anterior
function goBack() {
  window.history.back();
}
</script>

</body>
</html>
