<html>
<link rel="stylesheet" type="text/css" href="resultadoCadastroVend.css" media="screen">
<center>
<?php

$Vend_nome = $_POST['Vend_nome'];
$Vend_cpf  = $_POST['Vend_cpf'];
$Vend_rg  = $_POST['Vend_rg'];
$Vend_tel  = $_POST['Vend_tel'];
$Vend_pis = $_POST['Vend_pis'];
$Vend_endereco = $_POST['Vend_endereco'];
$Vend_gere = $_POST['Vend_gere'];

$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

//Create Connection 
$conn = mysqli_connect($servername, $username, $password, $databse);

//Check Connection
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO cadastroVendedor (Vend_id,
                        Vend_nome,
                        Vend_cpf,
                        Vend_rg,
                        Vend_telefone,
                        Vend_pis,
                        Vend_endereco,
                        Vend_gerente) VALUES
                        ('',
                        '$Vend_nome',
                        '$Vend_cpf',
                        '$Vend_rg',
                        '$Vend_tel',
                        '$Vend_pis',
                        '$Vend_endereco',
                        '$Vend_gere')";

if(mysqli_query($conn, $sql)){
    echo "<br><h1 style='text-align: center;'><b>Vendedor Registrado Com Sucesso!!!</h1></b>";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>


<br>
<br><a href="http://localhost/atividadeVendas/index.html">
<button style="background: red; color: white; text-transform: uppercase; padding: 10px 60px; border: none; border-radius: 20px; letter-spacing: 1px; font-weight: bold; transition: all 300ms ease; cursor: pointer;">Voltar Para Página Principal</button>
</a>
<br><br><a href="http://localhost/atividadeVendas/cadastroVendedor.html">
<button style="background: red; color: white; text-transform: uppercase; padding: 10px 60px; border: none; border-radius: 20px; letter-spacing: 1px; font-weight: bold; transition: all 300ms ease; cursor: pointer;">Cadastrar Novamente</button>
</a>
</center>
</html>
