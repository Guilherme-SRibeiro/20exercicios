<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados dos Exercícios de PHP</title>

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #212529;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin: 0;
            text-align: center;
        }

        .exercicio {
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }

        .exercicio:last-child {
            border-bottom: none;
        }

        .exercicio h3 {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }

        .resultado {
            background-color: #e9f5ff;
            border: 1px solid #b3d7ff;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
        }

        .resultado strong {
            color: #004a99;
        }

        code {
            background-color: #e8e8e8;
            padding: 2px 5px;
            border-radius: 3px;
        }

        ul,
        ol {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Resultados dos Exercícios de PHP</h1>

        <?php

        // Exercício 1: Quadrado de um número
        echo "<div class='exercicio'>";
        echo "<h3>Quadrado de um número</h3>";

        $num1 = 15;
        $quad = pow($num1, 2);

        echo "<p>Valor: <code>$num1</code></p>";
        echo "<div class='resultado'>O quadrado do número é: <strong>$quad</strong></div>";
        echo "</div>";

        // Exercício 2: Par ou Ímpar
        echo "<div class='exercicio'>";
        echo "<h3>Par ou Ímpar</h3>";

        $numeroCheck = 5;

        echo "<p>Número: <code>$numeroCheck</code></p>";

        if ($numeroCheck % 2 == 0) {
            $resultadoCheck = "Par";
        } else {
            $resultadoCheck = "Ímpar";
        }

        echo "<div class='resultado'>O número é: <strong>$resultadoCheck</strong></div>";
        echo "</div>";

        // 3. Metros para Centímetros
        echo "<div class='exercicio'>";
        echo "<h3>Metros para Centímetros</h3>";

        $metros = 5;
        $cm = $metros * 100;

        echo "<p>Metros: <code>$metros</code></p>";
        echo "<div class='resultado'>$metros metros = <strong>$cm centímetros</strong></div>";
        echo "</div>";

        // 4. Área do Retângulo
        echo "<div class='exercicio'>";
        echo "<h3>Área do Retângulo</h3>";

        $base = 10;
        $altura = 5;
        $area = $base * $altura;

        echo "<p>Base: <code>$base</code></p>";
        echo "<p>Altura: <code>$altura</code></p>";
        echo "<div class='resultado'>Área = <strong>$area</strong></div>";
        echo "</div>";

        // 5. Positivo ou Negativo
        echo "<div class='exercicio'>";
        echo "<h3>Positivo ou Negativo</h3>";

        $numero = -8;

        if ($numero > 0) {
            $resultado = "Positivo";
        } elseif ($numero < 0) {
            $resultado = "Negativo";
        } else {
            $resultado = "Zero";
        }

        echo "<p>Número: <code>$numero</code></p>";
        echo "<div class='resultado'><strong>$resultado</strong></div>";
        echo "</div>";

        // 6. Maioridade
        echo "<div class='exercicio'>";
        echo "<h3>Maioridade</h3>";

        $idade = 20;

        $resultado = ($idade >= 18) ? "Maior de idade" : "Menor de idade";

        echo "<p>Idade: <code>$idade</code></p>";
        echo "<div class='resultado'><strong>$resultado</strong></div>";
        echo "</div>";

        // 7. Aprovação
        echo "<div class='exercicio'>";
        echo "<h3>Aprovação</h3>";

        $mediaFinal = 7.5;

        $resultado = ($mediaFinal >= 6) ? "Aprovado" : "Reprovado";

        echo "<p>Média: <code>$mediaFinal</code></p>";
        echo "<div class='resultado'><strong>$resultado</strong></div>";
        echo "</div>";

        // 8. Maior de Dois
        echo "<div class='exercicio'>";
        echo "<h3>Maior de Dois</h3>";

        $x = 15;
        $y = 25;

        $maior = ($x > $y) ? $x : $y;

        echo "<p>Números: <code>$x</code> e <code>$y</code></p>";
        echo "<div class='resultado'>Maior número: <strong>$maior</strong></div>";
        echo "</div>";

        // 9. Dia da Semana
        echo "<div class='exercicio'>";
        echo "<h3>Dia da Semana</h3>";

        $dia = 3;

        switch ($dia) {
            case 1:
                $nomeDia = "Domingo";
                break;
            case 2:
                $nomeDia = "Segunda";
                break;
            case 3:
                $nomeDia = "Terça";
                break;
            case 4:
                $nomeDia = "Quarta";
                break;
            case 5:
                $nomeDia = "Quinta";
                break;
            case 6:
                $nomeDia = "Sexta";
                break;
            case 7:
                $nomeDia = "Sábado";
                break;
            default:
                $nomeDia = "Inválido";
        }

        echo "<div class='resultado'><strong>$nomeDia</strong></div>";
        echo "</div>";

        // 10. Vogal ou Consoante
        echo "<div class='exercicio'>";
        echo "<h3>Vogal ou Consoante</h3>";

        $letra = "A";

        switch (strtolower($letra)) {
            case "a":
            case "e":
            case "i":
            case "o":
            case "u":
                $tipo = "Vogal";
                break;
            default:
                $tipo = "Consoante";
        }

        echo "<div class='resultado'><strong>$tipo</strong></div>";
        echo "</div>";

        // 11. Status do Pedido
        echo "<div class='exercicio'>";
        echo "<h3>Status do Pedido</h3>";

        $status = "enviado";

        switch ($status) {
            case "aguardando":
                $msg = "Pedido aguardando confirmação.";
                break;
            case "em_preparacao":
                $msg = "Pedido em preparação.";
                break;
            case "enviado":
                $msg = "Pedido enviado.";
                break;
            case "concluido":
                $msg = "Pedido concluído.";
                break;
        }

        echo "<div class='resultado'><strong>$msg</strong></div>";
        echo "</div>";

        // 12. Contagem 1 a 10
        echo "<div class='exercicio'>";
        echo "<h3>Contagem de 1 a 10</h3>";
        echo "<div class='resultado'>";

        for ($i = 1; $i <= 10; $i++) {
            echo "$i ";
        }

        echo "</div>";
        echo "</div>";

        // 13. Pares de 1 a 20
        echo "<div class='exercicio'>";
        echo "<h3>Pares de 1 a 20</h3>";
        echo "<div class='resultado'>";

        for ($i = 2; $i <= 20; $i += 2) {
            echo "$i ";
        }

        echo "</div>";
        echo "</div>";

        // 14. Tabuada
        echo "<div class='exercicio'>";
        echo "<h3>Tabuada</h3>";

        $num = 7;

        echo "<div class='resultado'>";

        for ($i = 1; $i <= 10; $i++) {
            echo "$num x $i = " . ($num * $i) . "<br>";
        }

        echo "</div>";
        echo "</div>";

        // 15. Contagem Regressiva
        echo "<div class='exercicio'>";
        echo "<h3>Contagem Regressiva</h3>";

        $cont = 10;

        echo "<div class='resultado'>";

        while ($cont >= 1) {
            echo "$cont ";
            $cont--;
        }

        echo "</div>";
        echo "</div>";

        // 16. Soma até 100
        echo "<div class='exercicio'>";
        echo "<h3>Soma de 1 a 100</h3>";

        $soma = 0;
        $i = 1;

        while ($i <= 100) {
            $soma += $i;
            $i++;
        }

        echo "<div class='resultado'>Resultado: <strong>$soma</strong></div>";
        echo "</div>";

        // 17. Sorteio Simples
        echo "<div class='exercicio'>";
        echo "<h3>Sorteio Simples</h3>";

        $tentativas = 0;

        do {
            $sorteio = rand(1, 10);
            $tentativas++;
        } while ($sorteio != 5);

        echo "<div class='resultado'>Foram necessárias <strong>$tentativas</strong> tentativas.</div>";
        echo "</div>";

        // 18. Lista de Frutas
        echo "<div class='exercicio'>";
        echo "<h3>Lista de Frutas</h3>";

        $frutas = ["Maçã", "Banana", "Laranja", "Uva", "Manga", "Abacaxi"];

        echo "<div class='resultado'><ul>"; 

        foreach ($frutas as $fruta) {
            echo "<li>$fruta</li>";
        }

        echo "</ul></div>";
        echo "</div>";

        // 19. Soma de Array
        echo "<div class='exercicio'>";
        echo "<h3>Soma de Array</h3>";

        $numeros = [10, 20, 30, 40, 50];
        $somaArray = array_sum($numeros);

        echo "<div class='resultado'>Soma = <strong>$somaArray</strong></div>";
        echo "</div>";

        // 20. Array Associativo
        echo "<div class='exercicio'>";
        echo "<h3>Array Associativo</h3>";

        $aluno = [
            "nome" => "Guilherme",
            "idade" => 20,
            "curso" => "ADS"
        ];

        echo "<div class='resultado'>";
        echo "Nome: <strong>" . $aluno['nome'] . "</strong><br>";
        echo "Idade: <strong>" . $aluno['idade'] . "</strong><br>";
        echo "Curso: <strong>" . $aluno['curso'] . "</strong>";
        echo "</div>";

        echo "</div>";
        ?>

    </div>

</body>

</html>