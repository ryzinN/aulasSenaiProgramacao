<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Delete Banco</title>
</head>
<body>
<center>
<h1>VIZUALIZAÇÃO COMPLETA DO BANCO: </h1>

<table border="1" style="width: 50%">
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
<form method="post" action="atualizarAlteracaoBanco.php">
    <center><h1>DIGITE O ID QUE DESEJA ALTERAR</h1>
    <b>ID</b>
    <input type="text" name="idAlterar" placeholder="Digite o ID">
    <br><br><b>Agora Insira O Campo Que Deseja Alterar</b><br><br>

    <b>PLACA</b>
    <input type="text" name="dado[]" placeholder="Digite a PLACA">
            
    <b>COR</b>
    <input type="text" name="dado[]" placeholder="Digite a COR">
            
    <b>MODELO</b>
    <input type="text" name="dado[]" placeholder="Digite o MODELO">
            
    <b>CHASSI</b>
    <input type="text" name="dado[]" placeholder="Digite o CHASSI">
            
    <b>MARCA</b>
    <input type="text" name="dado[]" placeholder="Digite a MARCA">
            
    <b>ANO</b>
    <input type="text" name="dado[]" placeholder="Digite o ANO"><br>
    <br><button id="consulta">ATUALIZAR</button><br>
    </form>
    </center>
</main>
<a href="http://localhost/PHP/atividadeRegistrocarro/homeDetranSenai.html?">
<input type="button" style="cursor: pointer;" value="VOLTAR A PÁGINA INICIAL">
</a>
</html>