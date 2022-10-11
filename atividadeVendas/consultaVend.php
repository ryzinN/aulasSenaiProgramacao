<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Resultado Consulta Vendedor</title>
<link rel="stylesheet" type="text/css" href="resultadoConsultaVend.css" media="screen">
</head>
<body>
<center>
<h1 style="color: red; font-size: 50pt; text-shadow: 1px 1px 3px #000000;">RESULTADO DA SUA CONSULTA: </h1>
<br><table border="2" style="width: 80%; color: white; font-size: 18pt; text-shadow: 1px 1px 3px red;" >

<tr><th>ID</th><th>Nome</th>
<th>CPF</th> <th>RG</th>
<th>Telefone</th> <th>Pis</th><th>Endereço</th>
<th>Gerente</th></tr>

</body>

<?php

$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

$campo = ["Vend_id", "Vend_nome","Vend_cpf", "Vend_rg","Vend_telefone","Vend_pis", "Vend_endereco","Vend_gerente"];
$i = 0;
$sequencia = "";
$comando = "";

$conn = mysqli_connect($servername, $username, $password, $databse);

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

$sql = "SELECT * FROM cadastrovendedor WHERE $comando";

else
    $sql = "SELECT * FROM cadastrovendedor";

$resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

    while($registro = mysqli_fetch_array($resultado)){
        $Vend_id = $registro['Vend_id'];
        $Vend_nome = $registro['Vend_nome'];
        $Vend_cpf = $registro['Vend_cpf'];    
        $Vend_rg = $registro['Vend_rg'];
        $Vend_telefone = $registro['Vend_telefone'];
        $Vend_pis = $registro['Vend_pis'];
        $Vend_endereco = $registro['Vend_endereco'];
        $Vend_gerente = $registro['Vend_gerente'];

        echo "<tr style='font-size: 20px; text-shadow: 1px 1px 3px #000000;color: white;'>";
        echo "<td style='text-align: center;'>".$Vend_id."</td>";
        echo "<td style='text-align: center;'>".$Vend_nome."</td>";
        echo "<td style='text-align: center;'>".$Vend_cpf."</td>";
        echo "<td style='text-align: center;'>".$Vend_rg."</td>";
        echo "<td style='text-align: center;'>".$Vend_telefone."</td>";
        echo "<td style='text-align: center;'>".$Vend_pis."</td>";
        echo "<td style='text-align: center;'>".$Vend_endereco."</td>";
        echo "<td style='text-align: center;'>".$Vend_gerente."</td>";
        echo "</tr>";
    }

mysqli_close($conn);

?>
<a href="http://localhost/atividadeVendas/consultaVend.html">
<button class="botao">Realizar Nova Consulta</button>
</a>
<a href="http://localhost/atividadeVendas/index.html">
<button class="botao2">Voltar a Página Inicial</button>
</a>
</table>


</center>   
</html>