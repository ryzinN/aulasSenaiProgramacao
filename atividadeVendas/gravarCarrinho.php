<html>
<center>
<?php

$Car_nProduto = $_POST['Car_nProduto'];
$Car_quantidade  = $_POST['Car_quantidade'];
$Car_valorProd  = $_POST['Car_valorProd'];
$Car_nPedido = $_POST['Car_nPedido'];

$servername = "localhost";
$databse = "vendas_01";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $databse);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

    $sql = "INSERT INTO itemCarrinho (Car_id,
                            Car_quantidade,
                            Car_valorProd,
                            Car_nPedido,
                            Car_idProd)VALUES
                            ('',
                            '$Car_quantidade',
                            '$Car_valorProd',
                            '$Car_nPedido',
                            '$Car_nProduto')";

    if(mysqli_query($conn, $sql)){
        echo "<br><h1><b>Adicionado Ao Carrinho</h1></b>";
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

mysqli_close($conn);

?>
<link rel="stylesheet" type="text/css" href="itensCarrinho.css" media="screen">
<br><a href="http://localhost/atividadeVendas/index.html">
<button style="background: red; color: white; text-transform: uppercase; padding: 15px 60px; border: none; border-radius: 30px; letter-spacing: 1px; font-weight: bold; transition: all 300ms ease; cursor: pointer;">Voltar Para Página Principal</button>
</a>
</center>
</html>


