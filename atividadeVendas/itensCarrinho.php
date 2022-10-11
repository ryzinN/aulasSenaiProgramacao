<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="itensCarrinho.css" media="screen">

    <title>Carrinho De Compra</title>
</head>
    <body>  
        <div>
            <h1 id="titulo">Carrinho De Compras</h1>
            <p id="subtitulo">Complete com as seguintes informações:</p>
            <br>
        </div>
         
        <form method='post' action='gravarCarrinho.php'>
            <fieldset class='grupo'>
                <div class='campo'>
                    <?php   
                    $Ped_id = $_POST['nPedido'];
                    echo "<label><strong style='color: rgb(0, 0, 0); font-size: 15pt;'>Número do Pedido</strong></label>";
                    echo "<input type='text' style='text-align: center;' name='Car_nPedido'required value='$Ped_id' disabled>";
                    
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

                    $conn = mysqli_connect($servername, $username, $password, $databse);

                    $sql = "SELECT * FROM cadastroprodutos";

                    $resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

                    echo "<label><strong>N° Produto</strong></label>";
                    echo "<select name='Car_nProduto' required>";
                    
                        while($registro = mysqli_fetch_array($resultado)){

                            $Prod_id = $registro['Prod_id'];
                            $Prod_nome = $registro['Prod_nome'];
                            $Prod_qntd = $registro['Prod_qntd'];    
                            $Prod_valor = $registro['Prod_valor'];
                            $Prod_descricao = $registro['Prod_descricao'];
                            $Prod_fornecedor = $registro['Prod_fornecedor'];

                            echo "<option value = '$Prod_id'> ".$Prod_nome."- Valor: R$                                                                                                                                                              ".$Prod_valor." </option> ";
                        }

                        echo "</select>";

                    echo "<label><strong style='color: rgb(0, 0, 0); font-size: 15pt;'>Quantidade Do Produto</strong></label>";
                    echo "<input type='number' name='Car_quantidade'required placeholder='Quantidade'>";
                  
               
                    echo "<input type='hidden' name='Car_nProduto' value=".$Prod_id.">";
                    echo "<input type='hidden' name='Car_valorProd' value=".$Prod_valor.">";
                    echo "<input type='hidden' name='Car_nPedido' value=".$Ped_id.">";

                    ?>
                </div>
            </fieldset> 
            <button class='botao' type='submit'>Gravar Item No Carrinho</button>            
        </form>
       
    </body>
</html>