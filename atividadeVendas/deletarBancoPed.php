<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<link href="alterarBancoCli.css" rel="stylesheet"/>
<title>Delete Banco Pedidos</title>
</head>
<body>
<center>
<h1 style="color: white; font-size: 25pt; text-shadow: 1px 1px 3px #000000;">VIZUALIZAÇÃO COMPLETA DO BANCO DE PEDIDOS: </h1>

<br><table border="1" style="width: 100%;color: white">

<tr><th>ID</th><th>N° NF</th>
<th>Data De Emissão NF</th><th>Data De Saída</th>
<th>Frete</th></tr>

</body>

<?php

$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

$campo = ["Ped_id", "Ped_dataEmissaoNF","Ped_nf", "Ped_dataSaida","Ped_frete"];
$i = 0;
$sequencia = "";
$comando = "";

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $databse);

//Check Connection
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $databse);


$sql = "SELECT * FROM cadastropedidos";

$resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

while($registro = mysqli_fetch_array($resultado)){
    $Ped_id = $registro['Ped_id'];
    $Ped_dataEmissaoNF = $registro['Ped_dataEmissaoNF'];
    $Ped_nf = $registro['Ped_nf'];    
    $Ped_dataSaida = $registro['Ped_dataSaida'];
    $Ped_frete = $registro['Ped_frete'];

    echo "<tr style='font-size: 20px; text-shadow: 1px 1px 1px #ff0000;color: white;'>";
    echo "<td style='text-align: center;'>".$Ped_id."</td>";
    echo "<td style='text-align: center;'>".$Ped_nf."</td>";
    echo "<td style='text-align: center;'>".$Ped_dataEmissaoNF."</td>";
    echo "<td style='text-align: center;'>".$Ped_dataSaida."</td>";
    echo "<td style='text-align: center;'>".'R$ '.$Ped_frete."</td>";
    echo "</tr>";
}

mysqli_close($conn);

?>

</table>

<form method="post" action="atualizarDeletarBancoPed.php">
<br><b style="color: white;">INSIRA O ID QUE DESEJA DELETAR ( PEDIDOS ): </b>
<input type="number" name="deleteID" size="5">
<br><br><button style="padding: 5px;background-color: aqua;width: 20%; cursor: pointer;">DELETE</button>
</form>
<a href="http://localhost/atividadeVendas/index.html">
<button style="padding: 5px;background-color: aqua;width: 30%; cursor: pointer;">VOLTAR A PÁGINA INICIAL</button>
</a>

</center>
</html>