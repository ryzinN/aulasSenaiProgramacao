<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Delete Banco</title>
</head>
<body>

<center>

</body>

<?php

$deleteID = $_POST['deleteID'];

$servername = "localhost";
$databse = "registroveiculo";
$username = "root";
$password = "";

$campo = ["Vei_id", "Vei_placa", "Vei_cor", "Vei_modelo", "Vei_chassi", "Vei_marca", "Vei_ano"];
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


$sql = "DELETE FROM veiculo where Vei_id = $deleteID";

if(mysqli_query($conn, $sql)){
    echo "<br><h1>DELETADO COM SUCESSO!!</h1>";
}

mysqli_close($conn);

/* DELETE FROM (tabela) WHERE (nomeAtributo)
UPTADE (TABELA) SET (ATRIBUTOS ONDE QUER ALTERAR) */

?>
<a href="http://localhost/PHP/atividadeRegistrocarro/deletarBanco.php">
<input type="button" style="cursor: pointer;" value="DELETAR NOVAMENTE">
</a>

<br><br><a href="http://localhost/PHP/atividadeRegistrocarro/homeDetranSenai.html?">
<input type="button" style="cursor: pointer;" value="VOLTAR A PÁGINA INICIAL">
</a>
</html>
