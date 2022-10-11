<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Resultado Consulta Pedidos</title>
<link rel="stylesheet" type="text/css" href="resultadoConsultaPed.css" media="screen">
</head>
<body>
<center>
<h1 style="color: red; font-size: 50pt; text-shadow: 1px 1px 3px #000000;">RESULTADO DA SUA CONSULTA: </h1>

<br><table border="2" style="width: 80%; color: black; font-size: 20pt; text-shadow: 1px 1px 3px red;" >

<tr><th>ID</th><th>N° NF</th>
<th>Data De Emissão</th><th>Data De Saída</th>
<th>Frete</th><th>Vendedor</th><th>Cliente</th></tr>

</body>

<?php

$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

$campo = ["Ped_id", "Ped_dataEmissaoNF","Ped_nf", "Ped_dataSaida","Ped_frete","Ped_Vendedor","Ped_Cliente"];
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

$sql = "SELECT * FROM cadastropedidos WHERE $comando";

else
    $sql = "SELECT * FROM cadastropedidos";

$resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

    while($registro = mysqli_fetch_array($resultado)){
        $Ped_id = $registro['Ped_id'];
        $Ped_dataEmissaoNF = $registro['Ped_dataEmissaoNF'];
        $Ped_nf = $registro['Ped_nf'];    
        $Ped_dataSaida = $registro['Ped_dataSaida'];
        $Ped_frete = $registro['Ped_frete'];
        $Ped_Vendedor = $registro['Ped_Vendedor'];
        $Ped_Cliente = $registro['Ped_Cliente'];

        echo "<tr style='font-size: 20px; text-shadow: 1px 1px 3px #red;color: black;'>";
        echo "<td style='text-align: center;'>".$Ped_id."</td>";
        echo "<td style='text-align: center;'>".$Ped_nf."</td>";
        echo "<td style='text-align: center;'>".$Ped_dataEmissaoNF."</td>";
        echo "<td style='text-align: center;'>".$Ped_dataSaida."</td>";
        echo "<td style='text-align: center;'>".'R$ '.$Ped_frete."</td>";
        echo "<td style='text-align: center;'>".$Ped_Vendedor."</td>";
        echo "<td style='text-align: center;'>".$Ped_Cliente."</td>";
        echo "<td>  
        <form action='itensCarrinho.php' method='post'>
        <input type='hidden' name='nPedido' value=".$Ped_id.">
        <center> <input type=submit value='Adidionar Carrinho' ></form>";
        echo "</td>";
        echo "</tr>";
    }

mysqli_close($conn);

?>
<a href="http://localhost/atividadeVendas/consultaPed.html">
<button class="botao">Realizar Nova Consulta</button>
</a>
<a href="http://localhost/atividadeVendas/index.html">
<button class="botao2">Voltar a Página Inicial</button>
</a>
</table>
</center>   
</html>