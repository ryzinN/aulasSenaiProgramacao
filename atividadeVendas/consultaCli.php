<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="resultadoConsultaCli.css" media="screen">
<title>Resultado Consulta</title>
<a href="http://localhost/atividadeVendas/consultaCli.html">
<button class="botao">Realizar Nova Consulta</button>
</a>
<a href="http://localhost/atividadeVendas/index.html">
<button class="botao2">Voltar a Página Inicial</button>
</a>
</head>
<body>
<center>

<h1 style="color: red; font-size: 50pt; text-shadow: 1px 1px 3px #000000;">RESULTADO DA SUA CONSULTA: </h1>
<br><table border="1" style="width: 90%; color: white;">

<tr> <th>ID</th> <th>Nome Cliente</th>
<th>RG</th><th>CPF</th>
<th>Data De Nascimento</th><th>Gênero</th>
<th>Endereço</th><th>Telefone</th><th>Contato</th>
</tr>
</body>

<?php

$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

$campo = ["Cli_id", "Cli_nome", "Cli_rg", "Cli_cpf", "Cli_dtNascimento", "Cli_genero","Cli_endereco","Cli_telefone", "Cli_contato"];
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

if($comando <> "")
   
$sql = "SELECT * FROM cadastroclientes WHERE $comando";

else
    $sql = "SELECT * FROM cadastroclientes";

$resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

    while($registro = mysqli_fetch_array($resultado)){
        $Cli_id = $registro['Cli_id'];
        $Cli_nome = $registro['Cli_nome'];
        $Cli_rg = $registro['Cli_rg'];    
        $Cli_cpf = $registro['Cli_cpf'];
        $Cli_dtNascimento = $registro['Cli_dtNascimento'];
        $Cli_genero = $registro['Cli_genero'];
        $Cli_endereco = $registro['Cli_endereco'];
        $Cli_telefone = $registro['Cli_telefone'];
        $Cli_contato = $registro['Cli_contato'];

        echo "<tr style='font-size: 20px; text-shadow: 1px 1px 3px #000000;color: white'>";
        echo "<td style='text-align: center;'>". $Cli_id."</td>";
        echo "<td style='text-align: center;'>".$Cli_nome."</td>";
        echo "<td style='text-align: center;'>".$Cli_rg."</td>";
        echo "<td style='text-align: center;'>".$Cli_cpf."</td>";
        echo "<td style='text-align: center;'>".$Cli_dtNascimento."</td>";
        echo "<td style='text-align: center;'>".$Cli_genero."</td>";
        echo "<td style='text-align: center;'>".$Cli_endereco."</td>";
        echo "<td style='text-align: center;'>".$Cli_telefone."</td>";
        echo "<td style='text-align: center;'>".$Cli_contato."</td>";
        echo "</tr>";
    }

mysqli_close($conn);

?>

</table>
</center>   
</html>