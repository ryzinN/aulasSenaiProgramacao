<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Resultado Alteração Produtos</title>
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

$campo = ["Prod_id", "Prod_nome", "Prod_qntd", "Prod_valor", "Prod_descricao", "Prod_fornecedor"];
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

$sql = "UPDATE cadastroprodutos SET $comando where Prod_id = '$idAlterar'";

    if(mysqli_query($conn, $sql)){
        echo "<br><h1 style='color: white;text-shadow: 1px 1px 1px #ff0000;'>ALTERADO COM SUCESSO!!!</h1>";
    }
}

mysqli_close($conn);

?>

<br><a href="http://localhost/atividadeVendas/alteracaoBancoProd.php">
<button style="padding: 10px;cursor:pointer;background-color: aqua">Realizar Nova Alteração</button>
</a>
<a href="http://localhost/atividadeVendas/index.html">
<button style="padding: 10px;cursor:pointer;background-color: aqua;">Voltar a Página Inicial</button>
</a>

</center>   
</html>