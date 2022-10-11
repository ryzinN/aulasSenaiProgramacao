<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Resultado Alteração</title>
<link href="alterarBancoCli.css" rel="stylesheet"/>
</head>
<body>
<center>
</body>
<?php

$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

$campo = ["Cli_id", "Cli_nome", "Cli_rg", "Cli_cpf", "Cli_dtNascimento", "Cli_genero","Cli_endereco","Cli_telefone", "Cli_contato"];
$i = 1;
$sequencia = "";
$comando = "";

$conn = mysqli_connect($servername, $username, $password, $databse);

//Check Connection
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

if(isset($_POST["dado"])){

    //Faz Lopp para os dado
    foreach($_POST["dado"] as $dado){
        if($dado <> ""){
            if($sequencia == "")
                $sequencia = 1;
            else
                $comando = $comando . " ,"; 

                $comando = $comando . $campo[$i] ."="."'". $dado ."' ";
        }
        $i++;
    }
}

$idAlterar = $_POST['idAlterar'];


$conn = mysqli_connect($servername, $username, $password, $databse);
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

if(isset($_POST["dado"])){

$sql = "UPDATE cadastroclientes SET $comando where Cli_id = '$idAlterar'";

    if(mysqli_query($conn, $sql)){
        echo "<br><h1>ALTERADO COM SUCESSO!!!</h1>";
    }
}

mysqli_close($conn);

?>

<br><a href="http://localhost/atividadeVendas/alteracaoBancoCli.php">
<button class="botao">Realizar Nova Alteração</button>
</a>
<a href="http://localhost/atividadeVendas/index.html">
<button class="botao2">Voltar a Página Inicial</button>
</a>

</center>   
</html>