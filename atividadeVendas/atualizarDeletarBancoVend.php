<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<link href="alterarBancoCli.css" rel="stylesheet"/>
<title>Delete Banco Vendedores</title>
</head>
<body>
<center>
</body>

<?php

$deleteID = $_POST['deleteID'];

$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

$campo = ["Vend_id", "Vend_nome","Vend_cpf", "Vend_rg","Vend_telefone","Vend_pis", "Vend_endereco","Vend_gerente"];
$i = 0;
$sequencia = "";
$comando = "";
$comando = "";

$conn = mysqli_connect($servername, $username, $password, $databse);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$conn = mysqli_connect($servername, $username, $password, $databse);

$sql = "DELETE FROM cadastrovendedor where Vend_id = $deleteID";

if(mysqli_query($conn, $sql)){
    echo "<br><h1 style='color: red;text-shadow: 1px 1px 1px #000000'>DELETADO COM SUCESSO!!</h1>";
}

mysqli_close($conn);

?>

<a href="http://localhost/atividadeVendas/deletarBancoVend.php">
<button style="padding: 5px;background-color: aqua;width: 40%; cursor: pointer;">DELETAR NOVAMENTE</button>
</a>

<br><br><a href="http://localhost/atividadeVendas/index.html">
<button style="padding: 5px;background-color: aqua;width: 40%; cursor: pointer;">VOLTAR A PÁGINA INICIAL</button>
</a>
</html>
