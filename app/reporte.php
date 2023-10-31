<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Médico</title>
</head>
<body>    
    <form method="post" action="pdf.php">
        <label for="medico">Médico:</label>
        <input type="text" id="medico" name="medico" placeholder="Nombre del médico" required><br>

        <label for="paciente">Paciente:</label>
        <input type="text" id="paciente" name="paciente" placeholder="Nombre del paciente" required><br>

        <label for="motivo">Motivo de Consulta:</label>
        <input type="text" id="motivo" name="motivo" placeholder="Motivo de la consulta" required><br>

        <label for="tratamiento">Tratamiento Recomendado:</label>
        <input type="text" id="tratamiento" name="tratamiento" placeholder="Tratamiento recomendado" required><br>

        <label for="fecha_consulta">Fecha de Consulta:</label>
        <input type="date" id="fecha_consulta" name="fecha_consulta" required><br>

        <label for="diagnostico">Diagnóstico:</label>
        <textarea id="diagnostico" name="diagnostico" placeholder="Diagnóstico" rows="4" required></textarea><br>

        <button type="submit">Generar Informe Médico</button>
    </form>
</body>
</html>
