<?php

$file = $_FILES['upload'];
$name = $file['name'];
echo "<link rel='stylesheet' type='text/css' href='cadastroCandidato.css' media='screen'>";
echo "<br>";

if(move_uploaded_file($file['tmp_name'],$file['name'])){
    echo "<h1>Arquivo Enviado Com Sucesso</h1>";
}else{
    echo "Erro, o arquivo não pode ser enviado.";
}
include_once 'conectarBancoUrna.php';

$Cand_nome = $_POST['nome'];
$Cand_numero = $_POST['numero'];


$sql = "INSERT INTO canditados(Cand_id,
                        Cand_nome,
                        Cand_numero,
                        Cand_foto) VALUES
                        ('',
                        '$Cand_nome',
                        '$Cand_numero',
                        '$name')";

if(mysqli_query($conn, $sql)){
    echo "<br><h1><b>Candidato Cadastrado Com Sucesso!</h1></b>";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>