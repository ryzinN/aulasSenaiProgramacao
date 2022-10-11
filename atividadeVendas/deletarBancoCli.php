O<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<link href="alterarBancoCli.css" rel="stylesheet"/>
<title>Delete Banco Clientes</title>
</head>
<body>

<center>
<h1 style="color: white; font-size: 25pt; text-shadow: 1px 1px 3px #000000;">VIZUALIZAÇÃO COMPLETA DO BANCO DE CLIENTES: </h1>

<br><table border="1" style="width: 100%;color: white">

<tr> <th>ID</th><th>NOME</th>
<th>RG</th> <th>CPF</th>
<th>DATA NASCIMENTO</th> <th>GÊNERO</th>
<th>ENDEREÇO</th><th>TELEFONE</th>
<th>CONTATO</th></tr>

</body>

<?php

$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

$campo = ["Cli_id", "Cli_nome", "Cli_rg", "Cli_cpf", "Cli_dtNascimento", "Cli_genero","Cli_endereco","Cli_telefone", "Cli_contato"];
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


$sql = "SELECT * FROM cadastroclientes";

$resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

    while($registro = mysqli_fetch_array($resultado)){
        $Cli_id = $registro['Cli_id'];
        $Cli_nome = $registro['Cli_nome'];
        $Cli_rg = $registro['Cli_rg'];    
        $Cli_cpf = $registro['Cli_cpf'];
        $Cli_dtNascimento = $registro['Cli_dtNascimento'];
        $Cli_genero = $registro['Cli_genero'];
        $Cli_endereco = $registro['Cli_endereco'];
        $Cli_telefone = $registro['Cli_telefone'];
        $Cli_contato = $registro['Cli_contato'];

        echo "<tr style='font-size: 20px; text-shadow: 1px 1px 3px #000000;color: white';>";
        echo "<td style='text-align: center;'>". $Cli_id."</td>";
        echo "<td style='text-align: center;'>".$Cli_nome."</td>";
        echo "<td style='text-align: center;'>".$Cli_rg."</td>";
        echo "<td style='text-align: center;'>".$Cli_cpf."</td>";
        echo "<td style='text-align: center;'>".$Cli_dtNascimento."</td>";
        echo "<td style='text-align: center;'>".$Cli_genero."</td>";
        echo "<td style='text-align: center;'>".$Cli_endereco."</td>";
        echo "<td style='text-align: center;'>".$Cli_telefone."</td>";
        echo "<td style='text-align: center;'>".$Cli_contato."</td>";
        echo "</tr>";
    }

mysqli_close($conn);

/* DELETE FROM (tabela) WHERE (nomeAtributo)
UPTADE (TABELA) SET (ATRIBUTOS ONDE QUER ALTERAR) */

?>
</table>
<form method="post" action="atualizarDeleteBancoCli.php">
<br><b style="color: white;">INSIRA O ID QUE DESEJA DELETAR: ( CLIENTES )</b>
<input type="number" name="deleteID" size="5">
<br><br><button style="padding: 5px;background-color: aqua;width: 20%; cursor: pointer;">DELETE</button>
</form>
<a href="http://localhost/atividadeVendas/index.html">
<button style="padding: 5px;background-color: aqua;width: 30%; cursor: pointer;">VOLTAR A PÁGINA INICIAL</button>
</a>

</center>
</html>