<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Resultado Alteração</title>
</head>
<body>
<center>
</body>
<?php

$servername = "localhost";
$databse = "registroveiculo";
$username = "root";
$password = "";

$idAlterar = $_POST['idAlterar'];

$dado = $_POST['dado'];

$Vei_placa = $dado[0];
$Vei_cor = $dado[1];
$Vei_modelo = $dado[2];
$Vei_chassi = $dado[3];
$Vei_marca = $dado[4];
$Vei_ano = $dado[5];

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $databse);

//Check Connection
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $databse);

if(isset($_POST["dado"])){

$sql = "UPDATE veiculo SET Vei_placa = '$Vei_placa',Vei_cor = '$Vei_cor',Vei_modelo = '$Vei_modelo', Vei_chassi = '$Vei_chassi',Vei_marca = '$Vei_marca',Vei_ano = '$Vei_ano' where Vei_id = '$idAlterar'";

    if(mysqli_query($conn, $sql)){
        echo "<br><h1>ALTERADO COM SUCESSO!!!</h1>";
    }
}
mysqli_close($conn);

/* DELETE FROM (tabela) WHERE (nomeAtributo)
UPTADE (TABELA) SET (ATRIBUTOS ONDE QUER ALTERAR) */

?>
<br><a href="http://localhost/PHP/atividadeRegistrocarro/alteracaoBanco.php">
<input type="button" style="cursor: pointer;" value="REALIZAR NOVA ALTERAÇÃO">
</a>
<br><br><a href="http://localhost/PHP/atividadeRegistrocarro/homeDetranSenai.html?">
<input type="button" style="cursor: pointer;" value="VOLTAR A PÁGINA INICIAL">
</a>
</center>   
</html>