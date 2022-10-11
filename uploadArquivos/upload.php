<?php

/* $dir = "img/imagens/";
Recebendo o Arquivo multipart */

$file = $_FILES['arquivo'];
$teste1 = $file['tmp_name'];
$teste2 = $file['name'];
echo $teste1;
echo "<br>";
echo $teste2;
// Mover O Arquivo da pasta temporaria de upload para a pasta de destino;

if(move_uploaded_file($file['tmp_name'], 'imagens/'.$file['name'])){
    echo "Arquivo Enviado Com Sucesso";
}else{
    echo "Erro, o arquivo não pode ser enviado.";
}

?>