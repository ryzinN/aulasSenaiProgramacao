<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Atualizar Banco Produtos</title>
<link href="alterarBancoCli.css" rel="stylesheet"/>
</head>
<body>
<center>

<form method="post" action="atualizarAlteracaoBancoProd.php">

    <center><h1 style="color: white;">DIGITE O ID QUE DESEJA ALTERAR</h1>

    <b style="font-size: 25px;color: white;">ID: </b>
    <input type="text" name="idAlterar" placeholder="Digite o ID">

    <br><br><b style="font-size: 25px;color: white;">Agora Insira O Campo Que Deseja Alterar ( Produtos )</b><br><br>

    <b style="font-size: 20px;color: white;font-family: Roboto;">NOME: </b>
    <input type="text" name="dado[]" placeholder="Nome">
            
    <b style="font-size: 20px;color: white;font-family: Roboto;">Quantidade</b>
    <input type="text" name="dado[]" placeholder="Quantidade">
            
    <b style="font-size: 20px;color: white;font-family: Roboto;">Valor (R$)</b>
    <input type="text" name="dado[]" placeholder="Valor">
            
    <b style="font-size: 20px;color: white;font-family: Roboto;">Descrição</b>
    <input type="text" name="dado[]" placeholder="Descrição">

    <b style="font-size: 20px;color: white;font-family: Roboto;">Fornecedor</b>
    <input type="text" name="dado[]" placeholder="Fornecedor"> 

    <br><br><button style="padding: 5px;background-color: aqua;width: 30%; cursor: pointer;">ATUALIZAR</button><br>
</form>

</center>

</main>
</table>
<a href="http://localhost/atividadeVendas/index.html">
<button style="padding: 5px;background-color: aqua;width: 30%; cursor: pointer;">VOLTAR A PÁGINA INICIAL</button>
</a>
</html>