<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <title>calcular a idade</title>
    <meta charset="UTF-8">
    <style>
        html {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            display: inline-block;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        input[type="date"], input[type="text"], input[type="submit"] {
            margin: 10px 0;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="inputN1">Digite a data do nascimento:</label>
        <input name="num" type="date" required>
        <br>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nascimento = $_POST['num'];

            if ($nascimento) {
                $dataNascimento = new DateTime($nascimento);
                $dataAtual = new DateTime();
                
                $intervalo = $dataAtual->diff($dataNascimento);
                $idadeEmDias = $intervalo->days;

                echo '<label for="inputN3">Idade em dias:</label>';
                echo '<input name="resultado" type="text" value="' . $idadeEmDias . '" readonly />';
            } else {
                echo '<label for="inputN3">Idade em dias:</label>';
                echo '<input name="resultado" type="text" value="Digite uma data" readonly />';
            }
        }
        ?>
        <br>
        <input type="submit" name="Calcular" value="Calcular">
    </form>
</body>
</html>
    