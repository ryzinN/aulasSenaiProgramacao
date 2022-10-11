<html>
<link rel="stylesheet" type="text/css" href="cadastroPed.css" media="screen">
<center>
    
<?php

$Ped_nf = $_POST['Ped_nf'];
$Ped_dataSaida = $_POST['Ped_datasaida'];
$Ped_frete =  $_POST['Ped_frete'];

$data = date("d/m/Y");

$Ped_dtemissaonf = explode ("/", $data);
$Ped_dtemissaonf = "$Ped_dtemissaonf[2]-$$Ped_dtemissaonf[1]-$Ped_dtemissaonf[0]";
$Ped_dtemissaonf = $_POST['Ped_dtemissao'];

$Ped_dtsaida = explode ("/", $data);
$Ped_dtsaida = "$Ped_dtsaida[2]-$$Ped_dtsaida[1]-$Ped_dtsaida[0]";
$Ped_dtsaida = $_POST['Ped_datasaida'];

$Ped_Vendedor = $_POST['Ped_Vendedor'];
$Ped_Cliente = $_POST['Ped_Cliente'];

$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $databse);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO cadastroPedidos(Ped_id,
                        Ped_nf, 
                        Ped_dataEmissaoNF,
                        Ped_dataSaida,
                        Ped_frete,
                        Ped_Vendedor,
                        Ped_Cliente) VALUES
                        ('',
                        '$Ped_nf',
                        '$Ped_dtemissaonf',
                        '$Ped_dtsaida',
                        '$Ped_frete',
                        '$Ped_Vendedor',
                        '$Ped_Cliente')";

if(mysqli_query($conn, $sql)){
    echo "<br><h1><b style='color: black; font-size: 50pt;top: 60%;text-shadow: 1px 1px 3px #000000;'> Pedido Registrado Com Sucesso! </h1></b>";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

<a href="http://localhost/atividadeVendas/cadastroPed.html">
<button class="botao2">Cadastrar Novamente</button>
</a>
<br><a href="http://localhost/atividadeVendas/index.html">
<button class="botao">Voltar a Página Inicial</button>
</a>
</center>
</html>

