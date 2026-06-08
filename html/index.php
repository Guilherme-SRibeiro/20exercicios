<?php

// 1. Soma
$a = 10;
$b = 20;
echo "1. Soma: " . ($a + $b) . "<br><br>";

// 2. Média
$n1 = 8;
$n2 = 7;
$n3 = 9;
$media = ($n1 + $n2 + $n3) / 3;
echo "2. Média: $media <br><br>";

// 3. Metros para Centímetros
$metros = 5;
$cm = $metros * 100;
echo "3. $metros metros = $cm centímetros <br><br>";

// 4. Área do Retângulo
$base = 10;
$altura = 5;
$area = $base * $altura;
echo "4. Área do retângulo: $area <br><br>";

// 5. Positivo ou Negativo
$numero = -8;

if($numero > 0){
    echo "5. Positivo<br><br>";
}elseif($numero < 0){
    echo "5. Negativo<br><br>";
}else{
    echo "5. Zero<br><br>";
}

// 6. Maioridade
$idade = 20;

if($idade >= 18){
    echo "6. Maior de idade<br><br>";
}else{
    echo "6. Menor de idade<br><br>";
}

// 7. Aprovação
$mediaFinal = 7.5;

if($mediaFinal >= 6){
    echo "7. Aprovado<br><br>";
}else{
    echo "7. Reprovado<br><br>";
}

// 8. Maior de Dois
$x = 15;
$y = 25;

if($x > $y){
    echo "8. Maior número: $x<br><br>";
}else{
    echo "8. Maior número: $y<br><br>";
}

// 9. Dia da Semana
$dia = 3;

switch($dia){
    case 1: echo "9. Domingo"; break;
    case 2: echo "9. Segunda"; break;
    case 3: echo "9. Terça"; break;
    case 4: echo "9. Quarta"; break;
    case 5: echo "9. Quinta"; break;
    case 6: echo "9. Sexta"; break;
    case 7: echo "9. Sábado"; break;
    default: echo "9. Dia inválido";
}
echo "<br><br>";

// 10. Vogal ou Consoante
$letra = "A";

switch(strtolower($letra)){
    case "a":
    case "e":
    case "i":
    case "o":
    case "u":
        echo "10. Vogal";
        break;
    default:
        echo "10. Consoante";
}
echo "<br><br>";

// 11. Status do Pedido
$status = "enviado";

switch($status){
    case "aguardando":
        echo "11. Pedido aguardando confirmação.";
        break;
    case "em_preparacao":
        echo "11. Pedido em preparação.";
        break;
    case "enviado":
        echo "11. Pedido enviado.";
        break;
    case "concluido":
        echo "11. Pedido concluído.";
        break;
    default:
        echo "11. Status inválido.";
}
echo "<br><br>";

// 12. Contagem 1-10
echo "12. Contagem:<br>";
for($i = 1; $i <= 10; $i++){
    echo "$i ";
}
echo "<br><br>";

// 13. Pares de 1 a 20
echo "13. Números pares:<br>";
for($i = 2; $i <= 20; $i += 2){
    echo "$i ";
}
echo "<br><br>";

// 14. Tabuada
$num = 7;

echo "14. Tabuada do $num:<br>";
for($i = 1; $i <= 10; $i++){
    echo "$num x $i = " . ($num * $i) . "<br>";
}
echo "<br>";

// 15. Contagem Regressiva
echo "15. Contagem regressiva:<br>";

$cont = 10;
while($cont >= 1){
    echo "$cont ";
    $cont--;
}
echo "<br><br>";

// 16. Soma até 100
$soma = 0;
$i = 1;

while($i <= 100){
    $soma += $i;
    $i++;
}

echo "16. Soma de 1 a 100 = $soma<br><br>";

// 17. Sorteio Simples
$tentativas = 0;

do{
    $sorteio = rand(1,10);
    $tentativas++;
}while($sorteio != 5);

echo "17. Número 5 sorteado após $tentativas tentativas.<br><br>";

// 18. Lista de Frutas
$frutas = ["Maçã", "Banana", "Laranja", "Uva", "Manga"];

echo "18. Lista de frutas:";
echo "<ul>";

foreach($frutas as $fruta){
    echo "<li>$fruta</li>";
}

echo "</ul>";

// 19. Soma de Array
$numeros = [10, 20, 30, 40, 50];
$somaArray = array_sum($numeros);

echo "19. Soma do array = $somaArray<br><br>";

// 20. Array Associativo
$aluno = [
    "nome" => "Guilherme",
    "idade" => 20,
    "curso" => "Análise e Desenvolvimento de Sistemas"
];

echo "20. Dados do aluno:<br>";
echo "Nome: " . $aluno["nome"] . "<br>";
echo "Idade: " . $aluno["idade"] . "<br>";
echo "Curso: " . $aluno["curso"] . "<br>";

?>