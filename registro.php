<?php
session_start();
    require_once("conexion/connection.php"); 
    $db = new Database();
    $con = $db->conectar();
    
    require 'vendor/autoload.php';
    use Picqer\Barcode\BarcodeGeneratorPNG;
    

if ((isset($_POST["registro"])) && ($_POST["registro"] == "formu")) {
    $lote = $_POST['lote'];
    $barrio = $_POST['barrio'];
    $frente = $_POST['frente'];
    $ancho = $_POST['ancho'];
    $owner = $_POST['owner'];

    

    $code = uniqid() . rand(1000, 9999);

    $generator = new BarcodeGeneratorPNG();
    $codigo_barras_imagen = $generator->getBarcode($code, $generator::TYPE_CODE_128);

    file_put_contents(__DIR__ . '/image/' . $code . '.png', $codigo_barras_imagen);


    $insertSQL = $con->prepare("INSERT INTO barcode(id_lote, barrio, frente, ancho, owner, codigo_barras) VALUES('$lote', '$barrio', '$frente', '$ancho', '$owner', '$code')");
    $insertSQL -> execute();
}


?>

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOTE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<main>
        <div class="container mt-5">
            <h2>Registros lote</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nombre">id lote</label>
                    <input type="number" class="form-control" id="nombre" name="lote" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Barrio</label>
                    <input type="text" class="form-control"  name="barrio" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Medida Frente</label>
                    <input type="text" class="form-control" name="frente" placeholder="Ingrese la medida en metros" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Medida ancho</label>
                    <input type="text" class="form-control"  name="ancho" placeholder="Ingrese la medida en metros"  required>
                </div>
                <div class="form-group">
                    <label for="nombre">Dueño</label>
                    <input type="text" class="form-control"  name="owner" required>
                </div>

                <br>
                <input type="submit" class="btn btn-success" value="registrate">
                <input type="hidden" name="registro" value="formu">
            </form>
            <a href="contenido.php"> <button>Volver a contenido</button></a>
        </div>
    </main>
</body>
</html>

