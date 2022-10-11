<html>
<link rel="stylesheet" type="text/css" href="cadastroCli.css" media="screen">
<center>
<?php

$nome = $_POST['nome'];
$rg  = $_POST['rg'];
$cpf  = $_POST['cpf'];
$genero = $_POST['genero'];
$endereco  = $_POST['endereco'];
$telefone  = $_POST['telefone'];
$contato  = $_POST['contato'];

$data = date("d/m/Y");

$dtNascimento = explode ("/", $data);
$dtNascimento = "$dtNascimento[2]-$$dtNascimento[1]-$dtNascimento[0]";
$dtNascimento  = $_POST['data_nascimento'];

$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $databse);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO cadastroClientes(Cli_id,
                        Cli_nome,
                        Cli_rg,
                        Cli_cpf,
                        Cli_dtNascimento,
                        Cli_genero,
                        Cli_endereco,
                        Cli_telefone, 
                        Cli_contato) VALUES
                        ('',
                        '$nome',
                        '$rg',
                        '$cpf',
                        '$dtNascimento',
                        '$genero',
                        '$endereco',
                        '$telefone',
                        '$contato')";

if(mysqli_query($conn, $sql)){
    echo "<br><h1><b>Cliente Cadastrado Com Sucesso!</h1></b>";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

<a href="http://localhost/atividadeVendas/cadastroCli.html">
<button class="botao2">Cadastrar Novamente</button>
</a>
<br><a href="http://localhost/atividadeVendas/index.html">
<button class="botao">Voltar a Página Inicial</button>
</a>
</center>
</html>

