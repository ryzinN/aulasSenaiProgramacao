<html>
<center>
<?php

$nome;
$rg;
$cpf;
$dtNascimento;
$endereco;
$telefone;
$contato;

//SQL
$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $databse);

//Check Connection
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO cadastroClientes (Cli_id,
                        Cli_nome,
                        Cli_rg,
                        Cli_cpf,
                        Cli_dtNascimento,
                        Cli_endereco,
                        Cli_telefone, 
                        Cli_contato)VALUES
                        ('',
                        '$nome',
                        '$rg',
                        '$cpf',
                        '$dtNascimento',
                        '$endereco',
                        '$telefone'
                        '$contato')";


if(mysqli_query($conn, $sql)){
    echo "<br><h1><b>Veículo Registrado Com Sucesso!!!</h1></b>";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

<form action = "registroDeCarro.html">
<br><input type="submit" name="voltar" value="CADASTRAR NOVAMENTE">
</form>

<br><a href="http://localhost/PHP/atividadeRegistrocarro/homeDetranSenai.html?">
<input type="button" value="VOLTAR A PÁGINA INICIAL">
</a>
</center>
</html>

