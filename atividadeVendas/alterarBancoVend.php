<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Atualizar Banco Vendedores</title>
<link href="alterarBancoCli.css" rel="stylesheet"/>
</head>
<body>
<center>

<form method="post" action="atualizarAlteracaoBancoVend.php">

    <center><h1 style="color: white;">DIGITE O ID QUE DESEJA ALTERAR</h1>

    <b style="font-size: 25px;color: white;">ID: </b>
    <input type="text" name="idAlterar" placeholder="Digite o ID">

    <br><br><b style="font-size: 25px;color: white;">Agora Insira O Campo Que Deseja Alterar ( Vendedores )</b><br><br>

    <b style="font-size: 20px;color: white;font-family: Roboto;">NOME: </b>
    <input type="text" name="dado[]" placeholder="Nome">
            
    <b style="font-size: 20px;color: white;font-family: Roboto;">CPF: </b>
    <input type="text" name="dado[]" placeholder="CPF">
            
    <b style="font-size: 20px;color: white;font-family: Roboto;">RG: </b>
    <input type="text" name="dado[]" placeholder="RG">
            
    <b style="font-size: 20px;color: white;font-family: Roboto;">TELEFONE: </b>
    <input type="text" name="dado[]" placeholder="Telefone">

    <b style="font-size: 20px;color: white;font-family: Roboto;">PIS: </b>
    <input type="text" name="dado[]" placeholder="Pis"> 

    <b style="font-size: 20px;color: white;font-family: Roboto;">ENDEREÇO: </b>
    <input type="text" name="dado[]" placeholder="Endereço"> 

    <b style="font-size: 20px;color: white;font-family: Roboto;">GERENTE: </b>
    <input type="text" name="dado[]" placeholder="Gerente"> 

    <br><br><button style="padding: 5px;background-color: aqua;width: 30%; cursor: pointer;">ATUALIZAR</button><br>
</form>

</center>

</main>
</table>
<a href="http://localhost/atividadeVendas/index.html">
<button style="padding: 5px;background-color: aqua;width: 30%; cursor: pointer;">VOLTAR A PÁGINA INICIAL</button>
</a>
</html>