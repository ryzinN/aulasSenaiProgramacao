<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Consulta Veiculos</title>
</head>
<body>
<center>
<h1>RESULTADO DA SUA CONSULTA: </h1>
<br><table border="1" style="width: 50%">
<tr> <th>ID</th> <th>PLACA</th>
<th>COR</th> <th>MODELO</th>
<th>CHASSI</th> <th>MARCA</th>
<th>ANO</th> </tr>

</body>

<?php

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
   
$sql = "SELECT * FROM veiculo WHERE $comando";

else
    $sql = "SELECT * FROM veiculo";

$resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

    while($registro = mysqli_fetch_array($resultado)){
        $Vei_id = $registro['Vei_id'];
        $Vei_placa = $registro['Vei_placa'];
        $Vei_cor = $registro['Vei_cor'];
        $Vei_modelo = $registro['Vei_modelo'];
        $Vei_chassi = $registro['Vei_chassi'];
        $Vei_marca = $registro['Vei_marca'];
        $Vei_ano = $registro['Vei_ano'];

        echo "<tr>";
        echo "<td>".$Vei_id."</td>";
        echo "<td>".$Vei_placa."</td>";
        echo "<td>".$Vei_cor."</td>";
        echo "<td>".$Vei_modelo."</td>";
        echo "<td>".$Vei_chassi."</td>";
        echo "<td>".$Vei_marca."</td>";
        echo "<td>".$Vei_ano."</td>";
        echo "</tr>";
    }

mysqli_close($conn);

/* DELETE FROM (tabela) WHERE (nomeAtributo)
UPTADE (TABELA) SET (ATRIBUTOS ONDE QUER ALTERAR) */

?>
</table>
<form action = "consultaBancoVeiculos.html">
<br><input type="submit" value="REALIZAR NOVA CONSULTA" size="10">
</form>
<form action = "homeDetranSenai.html">
<br><input type="submit" value="VOLTAR A PÁGINA INICIAL" size="10">
</form>
</center>   
</html>