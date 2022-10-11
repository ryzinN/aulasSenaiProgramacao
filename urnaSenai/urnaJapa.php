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
<form method="post" action="votoJapa.php">
<?php

include_once 'conectarBancoUrna.php';

$nCandidato = $_POST['nCandidato'];

$sql = "SELECT * FROM canditados where Cand_numero = '$nCandidato'";

$resultado = mysqli_query($conn,$sql) or die("Erro ao Retornar Informação");

while($registro = mysqli_fetch_array($resultado)){
    $Cand_id = $registro['Cand_id'];
    $Cand_nome = $registro['Cand_nome'];
    $Cand_numero = $registro['Cand_numero'];
    $Cand_foto = $registro['Cand_foto'];
}

if($nCandidato == $Cand_numero){
    echo "NOME DO CANDIDATO ESCOLHIDO: <b>$Cand_nome</b>";
    echo "<br>NÚMERO DO CANDIDATO ESCOLHIDO: <b>$Cand_numero</b>";
    echo "<br><img src='$Cand_foto' width='33%' height='33%' style='margin-left: 33%'>";
}
echo "<input type='hidden'name='nCandidato' value='$Cand_id'>";
echo "<button class='teclado--botao botao--confirma' style='margin-top:15%' >CONFIRMAR</button>"
?>

</script>
</form>
</div>
</div>
<html>
