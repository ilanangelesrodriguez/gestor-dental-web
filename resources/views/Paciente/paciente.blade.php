<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Paciente</title>

    <style>
        .container {
            margin: 20px;
            padding: 20px;
            border: 1px solid blueviolet;
            border-radius: 8px;
            background-color: #A0ADDA; /*xd de color de fondo */
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            border: 1px solid black ;
            border-radius: 8px;
            padding: 10px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px 2px;
            font-size: 18px;
        }

    </style>
</head>

<body>
    <div class="container">
        <h1>Formulario de Paciente</h1>
        <form action="{{ route('admin.patients.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="text" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Teléfono:</label>
                <input type="text" id="phone" name="phone" required>
            </div>

        </form>
    </div>
</body>

</html>
