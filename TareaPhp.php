<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Matemáticas</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: linear-gradient(to right,#16a085,#1abc9c);
        }
        .container {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            width: 350px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            font-weight: 600;
        }
        button:hover {
            background-color: #0056b3;
        }
        h3 {
            color: #333;
            margin-top: 25px;
            text-align: center;
            font-weight: 600;
        }
        p {
            background-color: #424949;
            padding: 15px;
            border-radius: 5px;
            color: #ffffff;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Operaciones Matemáticas</h2>
        <form method="POST" action="">
            <label for="num1">Número 1:</label>
            <input type="number" id="num1" name="num1" required>

            <label for="num2">Número 2:</label>
            <input type="number" id="num2" name="num2" required>

            <label for="operation">Tipo de operación:</label>
            <select id="operation" name="operation" required>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
            </select>

            <button type="submit">Calcular</button>
        </form>

        <h3>Resultado:</h3>
        <p >
        <?php
            function calcular() 
            {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = floatval($_POST['num1']);
                    $num2 = floatval($_POST['num2']);
                    $operation = $_POST['operation'];

                    $result = "";
                    
                    if ($operation == "suma") {
                        $result = "El resultado de la suma es: " . ($num1 + $num2);
                    } elseif ($operation == "resta") {
                        $result = "El resultado de la resta es: " . ($num1 - $num2);
                    } elseif ($operation == "multiplicacion") {
                        $result = "El resultado de la multiplicación es: " . ($num1 * $num2);
                    }

                    echo $result;
                }
            }
            calcular();
        ?>
        </p>
    </div>
</body>
</html>
