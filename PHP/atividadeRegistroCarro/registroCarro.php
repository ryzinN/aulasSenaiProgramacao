<html>
<center>
<?php

$placa = $_POST['placa'];
$cor = $_POST['cor'];
$modelo = $_POST['modelo'];
$chassi = $_POST['chassi'];
$marca = $_POST['marca'];
$ano = $_POST['ano'];

//SQL
$servername = "localhost";
$databse = "registroveiculo";
$username = "root";
$password = "";

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $databse);

//Check Connection
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO veiculo (Vei_id,
                        Vei_placa,
                        Vei_cor,
                        Vei_modelo,
                        Vei_chassi,
                        Vei_marca,
                        Vei_ano) VALUES
                        ('',
                        '$placa',
                        '$cor',
                        '$modelo',
                        '$chassi',
                        '$marca',
                        '$ano')";


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

