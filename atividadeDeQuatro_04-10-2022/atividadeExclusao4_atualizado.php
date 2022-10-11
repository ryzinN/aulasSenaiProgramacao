<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Delete Banco</title>
<link href="atividadeExclusao4.css" rel="stylesheet"/>
</head>
<body>
<center>
<?php

include_once('conectarBanco.php');

$deleteID = $_POST['deleteID'];

if ($deleteID == 0){
    echo "<br><h1>DIGITOU NADA CABEÇUDO</h1>";
}else{

$sql = "DELETE FROM celular where Cel_id = $deleteID";

if(mysqli_query($conn, $sql)){
    echo "<br><h1>REGISTRO DELETADO COM SUCESSO!!</h1>";
}
}
mysqli_close($conn);

?>

<a href="http://localhost/atividadeDeQuatro_04-10-2022/atividadeExclusao4.php">
<button>DELETAR NOVAMENTE</button>
</a>
</body>
</html>
