<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<link href="alterarBancoCli.css" rel="stylesheet"/>
<title>Delete Banco Vendedores</title>
</head>
<body>
<center>

<h1 style="color: white; font-size: 25pt; text-shadow: 1px 1px 3px #000000;">VIZUALIZAÇÃO COMPLETA DO BANCO DE VENDEDORES: </h1>

<br><table border="1" style="width: 100%;color: white">

<tr><th>ID</th><th>Nome</th>
<th>CPF</th> <th>RG</th>
<th>Telefone</th> <th>Pis</th><th>Endereço</th>
<th>Gerente</th></tr>

</body>

<?php

$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

$campo = ["Vend_id", "Vend_nome","Vend_cpf", "Vend_rg","Vend_telefone","Vend_pis", "Vend_endereco","Vend_gerente"];
$i = 0;
$sequencia = "";
$comando = "";

$conn = mysqli_connect($servername, $username, $password, $databse);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$conn = mysqli_connect($servername, $username, $password, $databse);

$sql = "SELECT * FROM cadastrovendedor";

$resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

while($registro = mysqli_fetch_array($resultado)){
    $Vend_id = $registro['Vend_id'];
    $Vend_nome = $registro['Vend_nome'];
    $Vend_cpf = $registro['Vend_cpf'];    
    $Vend_rg = $registro['Vend_rg'];
    $Vend_telefone = $registro['Vend_telefone'];
    $Vend_pis = $registro['Vend_pis'];
    $Vend_endereco = $registro['Vend_endereco'];
    $Vend_gerente = $registro['Vend_gerente'];

    echo "<tr style='font-size: 20px; text-shadow: 1px 1px 3px #000000;color: white;'>";
    echo "<td style='text-align: center;'>".$Vend_id."</td>";
    echo "<td style='text-align: center;'>".$Vend_nome."</td>";
    echo "<td style='text-align: center;'>".$Vend_cpf."</td>";
    echo "<td style='text-align: center;'>".$Vend_rg."</td>";
    echo "<td style='text-align: center;'>".$Vend_telefone."</td>";
    echo "<td style='text-align: center;'>".$Vend_pis."</td>";
    echo "<td style='text-align: center;'>".$Vend_endereco."</td>";
    echo "<td style='text-align: center;'>".$Vend_gerente."</td>";
    echo "</tr>";
}

mysqli_close($conn);

?>

</table>

<form method="post" action="atualizarDeletarBancoVend.php">
<br><b style="color: white;">INSIRA O ID QUE DESEJA DELETAR ( VENDEDORES ): </b>
<input type="number" name="deleteID" size="5">
<br><br><button style="padding: 5px;background-color: aqua;width: 20%; cursor: pointer;">DELETE</button>
</form>
<a href="http://localhost/atividadeVendas/index.html">
<button style="padding: 5px;background-color: aqua;width: 30%; cursor: pointer;">VOLTAR A PÁGINA INICIAL</button>
</a>

</center>
</html>