<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Atualizar Banco Pedidos</title>
<link href="alterarBancoCli.css" rel="stylesheet"/>
</head>
<body>
<center>

<form method="post" action="atualizarAlteracaoBancoPed.php">

    <center><h1 style="color: white;">DIGITE O ID QUE DESEJA ALTERAR</h1>

    <b style="font-size: 25px;color: white;">ID: </b>
    <input type="text" name="idAlterar" placeholder="Digite o ID">

    <br><br><b style="font-size: 25px;color: white;">Agora Insira O Campo Que Deseja Alterar ( Pedidos )</b><br><br>

    <b style="font-size: 20px;color: white;font-family: Roboto;">N° NF: </b>
    <input type="text" name="dado[]" placeholder="N° NF">
            
    <b style="font-size: 20px;color: white;font-family: Roboto;">Data De Emissão: </b>
    <input type="text" name="dado[]" placeholder="Data De Emissão">
            
    <b style="font-size: 20px;color: white;font-family: Roboto;">Data de Saída: </b>
    <input type="text" name="dado[]" placeholder="Data De Saída">
            
    <b style="font-size: 20px;color: white;font-family: Roboto;">Frete: </b>
    <input type="text" name="dado[]" placeholder="Frete">

    <br><br><button style="padding: 5px;background-color: aqua;width: 30%; cursor: pointer;">ATUALIZAR</button><br>
</form>

</center>

</main>
</table>
<a href="http://localhost/atividadeVendas/index.html">
<button style="padding: 5px;background-color: aqua;width: 30%; cursor: pointer;">VOLTAR A PÁGINA INICIAL</button>
</a>
</html>