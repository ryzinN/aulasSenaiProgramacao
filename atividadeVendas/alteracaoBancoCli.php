<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Atualizar Banco Clientes</title>
<link href="alterarBancoCli.css" rel="stylesheet"/>
</head>
<body>
<center>

<form method="post" action="atualizarAlteracaoBancoCli.php">

    <center><h1 style="color: white;">DIGITE O ID QUE DESEJA ALTERAR</h1>

    <b style="font-size: 25px;color: white;">ID: </b>
    <input type="text" name="idAlterar" placeholder="Digite o ID">

    <br><br><b style="font-size: 25px;color: white;">Agora Insira O Campo Que Deseja Alterar</b><br><br>

    <b style="font-size: 20px;color: white;font-family: Roboto;">NOME</b>
    <input type="text" name="dado[]" placeholder="NOME">
            
    <b style="font-size: 20px;color: white;font-family: Roboto;">RG</b>
    <input type="text" name="dado[]" placeholder="Digite o RG">
            
    <b style="font-size: 20px;color: white;font-family: Roboto;">CPF</b>
    <input type="text" name="dado[]" placeholder="Digite o CPF">
            
    <b style="font-size: 20px;color: white;font-family: Roboto;">DATA NASCIMENTO</b>
    <input type="text" name="dado[]" placeholder="Digite a Data De Nascimento">
            
    <b style="font-size: 20px;color: white;font-family: Roboto;">GÊNERO</b>
    <input type="text" name="dado[]" placeholder="Digite o Gênero">
            
    <b style="font-size: 20px;color: white;font-family: Roboto;">ENDEREÇO</b>
    <input type="text" name="dado[]" placeholder="Digite o Endereço"><br>

    <br><b style="font-size: 20px;color: white;font-family: Roboto;">TELEFONE</b>
    <input type="text" name="dado[]" placeholder="Digite o Telefone">

    <b style="font-size: 20px;color: white;font-family: Roboto;">CONTATO</b>
    <input type="text" name="dado[]" placeholder="Digite o Contato">

    <br><br><button style="padding: 5px;background-color: aqua;width: 30%; cursor: pointer;" id="consulta">ATUALIZAR</button><br>
    </form>

</center>

</main>
</table>
<a href="http://localhost/atividadeVendas/index.html">
<button style="padding: 5px;background-color: aqua;width: 30%; cursor: pointer;">VOLTAR A PÁGINA INICIAL</button>
</a>
</html>