<?php 
$numero = $_POST['numero'];

$resultado = '';
switch ($numero) {
    case 1:
        $resultado = "Domingo";
        break;
    case 2:
        $resultado = "Segunda-feira";
        break;
    case 3:
        $resultado = "Terça-feira";
        break;
    case 4:
        $resultado = "Quarta-feira";
        break;
    case 5:
        $resultado = "Quinta-feira";
        break;
    case 6:
        $resultado = "Sexta-feira";
        break;
    case 7:
        $resultado = "Sábado";
        break;
    
    default:
    $resultado = "Número inválido. Digite um número de 1 a 7.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>

    <style>
         * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(135deg, #3F888F 0%, #F6F6F6 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            text-align: center;
        }

        .result-container {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 500px;
            padding: 50px 40px;
        }

        h1 {
            color: cadetblue;
            margin-bottom: 30px;
            font-size: 2.2rem;
        }

        .result {
            font-size: 2.5rem;
            font-weight: bold;
            color: #e74c3c;
            margin: 30px 0;
            padding: 30px;
            background-color: #F6F6F6;
            border-radius: 12px;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn {
            display: inline-block;
            background: linear-gradient(to right, #3F888F, #F6F6F6);
            color: white;
            text-decoration: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            margin-top: 20px;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

       .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
       } 
    </style>
</head>
<body>
    <div class="result-container">
        <h1>Dia Correspondente</h1>
        <div class="result">$resultado</div>
        <button class="btn" onclick="windowns.history.back()">Voltar</button>
    </div>
</body>
</html>