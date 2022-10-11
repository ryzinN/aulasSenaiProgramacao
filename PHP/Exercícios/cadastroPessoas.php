<html>
<head>
<title>Cadastro De Pessoas</title>
<link rel="stylesheet" href="cadastroPessoas.css">
</head>
    <body>
        <form method = "post" target= "_blank" action = "siteCadastro.php">

<?php

    echo "<center><b>";
    echo "<h1><b>Cadastro De Pessoas </b></h1>";
    echo "<center><h2>Digite as Informações dessas Pessoas: <h2></center><br>";
    echo "Nome: ";  
    echo "<input type='text' name='nome' size='5'>";
    echo "Endereço: ";
    echo "<input type='text' name='endereco' size='5'>";
    echo "Bairro: ";
    echo "<input type='text' name='bairro' size='5'>";
    echo "Cidade: ";
    echo "<input type='text' name='cidade' size='5'>";
    echo "Estado: ";
    echo "<input type='text' name='estado' size='5'>";
    echo "CEP: ";
    echo "<input type='text' name='cep' size='5'>";
    echo "<br><br><input type = 'submit' name = 'btGravar' value = 'GRAVAR'>";
    echo "</center></b>";

?>
        </form>
    </body>
</html>

