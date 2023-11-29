<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Médico</title>
</head>
<body>    
    <form method="post" action="pdf.php">
        <label for="fecha_consulta">Fecha de Consulta:</label>
        <input type="date" id="fecha_consulta" name="fecha_consulta" required><br>

        <label for="tratamiento">Tratamiento Recomendado:</label>
        <input type="text" id="tratamiento" name="tratamiento" placeholder="Tratamiento recomendado" required><br>

        <button type="submit">Generar Informe Médico</button>
    </form>
</body>
</html>
