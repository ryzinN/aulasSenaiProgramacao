<?php

/*

ALGORÍTIMOS DE COMPARAÇÃO:

echo (45 == 45.0); echo ("<br>"); //Resultado: 1
echo (45 === 45.0); echo ("<br>"); //Resultado: Vazio
echo (5 < 5); echo ("<br>"); //Resultado: Vazio
echo (5 <= 5); echo ("<br>"); //Resultado: 1
echo (6 > 6); echo ("<br>"); //Resultado: Vazio
echo (6 >= 6); echo ("<br>"); //Resultado: 1
echo (1 < 3 && 3 < 1); echo ("<br>"); //Resultado: Vazio
echo (1 < 3 && 3 > 1); echo ("<br>"); //Resultado: 1
echo (1 < 3 || 3 < 1); echo ("<br>"); //Resultado: 1

*/

/*

USANDO NÚMEROS COM VÍRGULAS:

$valor1 = 150220.888;
$valor2 = number_format($valor1, 1) ;
$valor3 = number_format($valor1, 2,',','.');

echo ($valor1.'<br>');
echo ($valor2.'<br>');
echo ($valor3.'<br>');
print "<br>".$valor1."->".number_format($valor1, 2, '.' , ',')."<br>";

*/

/*

CRIANDO ARQUIVO VIA PHP:

$file = fopen('arquivo.txt', 'w'); // escrevendo em um arquivo
fwrite ($file, 'Escrevendo No Arquivo'.'<br>');
fclose ($file);
$file = fopen ('arquivo.txt', 'a+'); // a+ coloca o ponteiro no final do arquivo
fwrite ($file, 'teste numero = 1');
fclose ($file);

*/

/*

MANIPULAÇÃO DE ARQUIVOS:

$nomearquivo = 'arquivo.txt';
$file = fopen ($nomearquivo, 'r');
$buffer = fread($file, filesize($nomearquivo));
fclose($file);

echo ($buffer.'<br>');

*/


?>