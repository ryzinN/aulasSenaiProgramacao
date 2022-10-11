<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Delete Banco Celulares</title>
<link href="atividadeExclusao4.css" rel="stylesheet"/>
</head>
<body>

<center>
<h1>VIZUALIZAÇÃO COMPLETA DO BANCO: </h1>

<table border="1" style="width: 60%">
<tr> <th>ID</th> <th>MARCA</th>
<th>MODELO</th> <th>MEMÓRIA RAM</th>
<th>MEMÓRIA INTERNA</th>
<th>COR</th></tr>
</body>

<?php

include_once 'conectarBanco.php';

$sql = "SELECT * FROM celular";

$resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

    while($registro = mysqli_fetch_array($resultado)){
        $Cel_id = $registro['Cel_id'];
        $Cel_marca = $registro['Cel_marca'];
        $Cel_modelo = $registro['Cel_modelo'];
        $Cel_memoria_ram = $registro['Cel_memoria_ram'];
        $Cel_quantidade_de_memoria = $registro['Cel_quantidade_de_memoria'];
        $Cel_cor = $registro['Cel_cor'];

        echo "<tr style='font-size: 20px; text-shadow: 1px 1px 3px #000000;color: white'>";
        echo "<td>".$Cel_id."</td>";
        echo "<td>".$Cel_marca."</td>";
        echo "<td>".$Cel_modelo."</td>";
        echo "<td>".$Cel_memoria_ram." GB"."</td>";
        echo "<td>".$Cel_quantidade_de_memoria." GB"."</td>";
        echo "<td>".$Cel_cor."</td>";
        echo "</tr>";
    }

mysqli_close($conn);

/* DELETE FROM (tabela) WHERE (nomeAtributo)
UPTADE (TABELA) SET (ATRIBUTOS ONDE QUER ALTERAR) */

?>

<form method="post" action="atividadeExclusao4_atualizado.php">
<br><b>INSIRA O ID QUE DESEJA DELETAR:</b>
<input type="number" name="deleteID" size="5">
<br><br><button>DELETE</button><br>
</form>
</table>
</center>
</html>