<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urna Eletrônica</title>
    <link rel="stylesheet" href="style.css" />
</head>
<div class="urna">
    <div class="tela">
<?php

include_once 'conectarBancoUrna.php';
$Cand_numero = $_POST['nCandidato'];

$sql = "INSERT INTO bancovot(Cand_id) VALUES
                        ('$Cand_numero')";

if(mysqli_query($conn, $sql)){
    echo "<br><h1><b>VOTO REGISTRADO COM SUCESSO</h1></b>";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
        <a href="http://localhost:8080/urnaSenai/indexSenas.html" style="text-decoration: none; margin-top:10%">
        <button class="teclado--botao botao--confirma" >VOTAR NOVAMENTE</button>
        </a>
    </div>
</div>
</html>