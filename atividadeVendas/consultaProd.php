<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="consultaProd.css" media="screen">
<title>Resultado Consulta</title>
</head>

<body>
<center>

<h1 style="color: red; font-size: 50pt; text-shadow: 1px 1px 3px #000000;">RESULTADO DA SUA CONSULTA: </h1>
<br><table border="1" style="width: 110%">

<tr> <th>ID</th> <th>Nome</th>
<th>Quantidade</th> <th>Valor (R$)</th>
<th>Descrição</th> <th>Fornecedor</th>
</tr>

</body>

<?php

$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

$campo = ["Prod_id", "Prod_nome", "Prod_qntd", "Prod_valor", "Prod_descricao", "Prod_fornecedor"];
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

//Verifica Escolha dos Campos
if(isset($_POST["dado"])){

    //Faz Lopp para os dado
    foreach($_POST["dado"] as $dado){
        if($dado <> ""){
            if($sequencia == "")
                $sequencia = 1;
            else
                $comando = $comando . " and "; 

                $comando = $comando . $campo[$i] ."="."'". $dado ."' ";
                //echo "- " . $campo[$i] ."---". $dado ."<br>";
        }
        $i++;
    }
}
else
{
    echo "Nenhum Campo Selecionado";
}

if($comando <> "")
   
$sql = "SELECT * FROM cadastroprodutos WHERE $comando";

else
    $sql = "SELECT * FROM cadastroprodutos";

$resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

    while($registro = mysqli_fetch_array($resultado)){
        $Prod_id = $registro['Prod_id'];
        $Prod_nome = $registro['Prod_nome'];
        $Prod_qntd = $registro['Prod_qntd'];    
        $Prod_valor = $registro['Prod_valor'];
        $Prod_descricao = $registro['Prod_descricao'];
        $Prod_fornecedor = $registro['Prod_fornecedor'];

        echo "<tr style='font-size: 20px; text-shadow: 1px 1px 3px #000000;'>";
        echo "<td style='text-align: center;'>". $Prod_id."</td>";
        echo "<td style='text-align: center;'>".$Prod_nome."</td>";
        echo "<td style='text-align: center;'>".$Prod_qntd."</td>";
        echo "<td style='text-align: center;'>"."R$ ".$Prod_valor."</td>";
        echo "<td style='text-align: center;'>".$Prod_descricao."</td>";
        echo "<td style='text-align: center;'>".$Prod_fornecedor."</td>";
        echo "</tr>";
    }

mysqli_close($conn);

/* DELETE FROM (tabela) WHERE (nomeAtributo)    
UPTADE (TABELA) SET (ATRIBUTOS ONDE QUER ALTERAR) */

?>
</table>
<a href="http://localhost/atividadeVendas/consultaProd.html">
<button class="botao">Realizar Nova Consulta</button>
</a>
<a href="http://localhost/atividadeVendas/index.html">
<button class="botao2">Voltar a Página Inicial</button>
</a>
</center>   
</html>