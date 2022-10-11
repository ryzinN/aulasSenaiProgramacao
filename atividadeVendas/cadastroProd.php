<html>
<center>
<?php

$prodNome = $_POST['prodNome'];
$prodQntd  = $_POST['prodQntd'];
$prodValor  = $_POST['prodValor'];
$prodDescricao  = $_POST['prodDescricao'];
$prodFornecedor = $_POST['prodFornecedor'];

//SQL
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

$sql = "INSERT INTO cadastroProdutos (Prod_id,
                        Prod_nome,
                        Prod_qntd,
                        Prod_valor,
                        Prod_descricao,
                        Prod_fornecedor)VALUES
                        ('',
                        '$prodNome',
                        '$prodQntd',
                        '$prodValor',
                        '$prodDescricao',
                        '$prodFornecedor')";

if(mysqli_query($conn, $sql)){
    echo "<br><h1><b>Produto Registrado Com Sucesso!!!</h1></b>";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<link rel="stylesheet" type="text/css" href="cadastroProd.css" media="screen">
<br><a href="http://localhost/atividadeVendas/index.html">
<button style="background: red; color: white; text-transform: uppercase; padding: 15px 60px; border: none; border-radius: 30px; letter-spacing: 1px; font-weight: bold; transition: all 300ms ease; cursor: pointer;">Voltar Para Página Principal</button>
</a>
</center>
</html>


