
<html>

<h1><center><b><?php
session_start();
$remover = $_POST['remover'];
$qntdRemover = $_POST['qntdRemover'];
$quantidade = $_SESSION['quantidade'];   
$novaQntd;

if($remover == 'sim'){
    $novaQntd = $quantidade - $qntdRemover;
    echo "Seu novo inventário é de: ", $novaQntd;
}else{
    echo "Seu inventário continua sendo de ", $quantidade, " unidades!";
}

?></h1></b></center>
</html>