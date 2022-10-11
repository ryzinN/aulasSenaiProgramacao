<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<link href="alterarBancoCli.css" rel="stylesheet"/>
<title>Delete Banco Produtos</title>
</head>
<body>
<center>

<h1 style="color: white; font-size: 25pt; text-shadow: 1px 1px 3px #000000;">VIZUALIZAÇÃO COMPLETA DO BANCO DE PEDIDOS: </h1>

<br><table border="1" style="width: 100%;color: white">

<tr> <th>ID</th> <th>Nome</th>
<th>Quantidade</th> <th>Valor (R$)</th>
<th>Descrição</th> <th>Fornecedor</th> </tr>

</body>

<?php

$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

$campo = ["Prod_id", "Prod_nome", "Prod_qntd", "Prod_valor", "Prod_descricao", "Prod_fornecedor"];
$i = 0;
$sequencia = "";
$comando = "";

$conn = mysqli_connect($servername, $username, $password, $databse);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$conn = mysqli_connect($servername, $username, $password, $databse);

$sql = "SELECT * FROM cadastroprodutos";

$resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

    while($registro = mysqli_fetch_array($resultado)){
        $Prod_id = $registro['Prod_id'];
        $Prod_nome = $registro['Prod_nome'];
        $Prod_qntd = $registro['Prod_qntd'];    
        $Prod_valor = $registro['Prod_valor'];
        $Prod_descricao = $registro['Prod_descricao'];
        $Prod_fornecedor = $registro['Prod_fornecedor'];

        echo "<tr style='font-size: 20px; text-shadow: 1px 1px 3px #000000;'>";
        echo "<td style='text-align: center;'>". $Prod_id."</td>";
        echo "<td style='text-align: center;'>".$Prod_nome."</td>";
        echo "<td style='text-align: center;'>".$Prod_qntd."</td>";
        echo "<td style='text-align: center;'>"."R$ ".$Prod_valor."</td>";
        echo "<td style='text-align: center;'>".$Prod_descricao."</td>";
        echo "<td style='text-align: center;'>".$Prod_fornecedor."</td>";
        echo "</tr>";
    }

mysqli_close($conn);

?>

</table>

<form method="post" action="atualizarDeletarBancoProd.php">
<br><b style="color: white;">INSIRA O ID QUE DESEJA DELETAR ( PRODUTOS ): </b>
<input type="number" name="deleteID" size="5">
<br><br><button style="padding: 5px;background-color: aqua;width: 20%; cursor: pointer;">DELETE</button>
</form>
<a href="http://localhost/atividadeVendas/index.html">
<button style="padding: 5px;background-color: aqua;width: 30%; cursor: pointer;">VOLTAR A PÁGINA INICIAL</button>
</a>

</center>
</html>