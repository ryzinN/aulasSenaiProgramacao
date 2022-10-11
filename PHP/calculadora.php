<?php

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$tipo = $_POST['tipo'];

switch($tipo)
{
    case 'Somar': $resultado = $valor1 + $valor2; break;
    case 'Subtrair': $resultado = $valor1 - $valor2; break;
    case 'Multiplicar': $resultado = $valor1 * $valor2; break;
    case 'Dividir': $resultado = $valor1 / $valor2; break;
}

echo "SEU COCUDO TA AI O RESULTADO: ";
echo "<br>";
echo "<br>";
echo "Resultado = ", $resultado;

?>

