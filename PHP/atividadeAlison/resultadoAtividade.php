<html>
<center><h1><?php
session_start();

$escolha = $_POST['escolha'];
$quantidade = $_POST['qntd'];
$_SESSION ['quantidade'] = $quantidade;

$num = 0;

if(isset($_POST['qntd'])){
    $num = $_POST['qntd'];
    if(!is_numeric($num)){
        echo "<br>O Valor Digitado Não é um Número!!!<br>";
    }

    else if($escolha ==  'computador'){
        echo "Foi adicionado ", $quantidade, " de computadores ao seu inventário!!!";
    }else{
    if($escolha == 'monitor'){
        echo "Foi adicionado ", $quantidade, " de monitores ao seu inventário!!!";
    }
    }
    if($escolha == 'teclado'){
        echo "Foi adicionado ", $quantidade, " teclados ao seu inventário!!!";
    }
    if($escolha == 'mouse'){
        echo "Foi adicionado ", $quantidade, " mouses ao seu inventário!!!";
    }
}
?></h1>
    <br>
    <br>
    <form method="post" action="atividadeAlisonRemover.php">
    Deseja Remover alguns itens?<br><br>
    <input type="radio" name="remover" required value="sim"><b>SIM</b><br>
    <input type="radio" name="remover" required value="nao"><b>NÃO</b><br>
    <br>Se <b>SIM</b> Digite a Quantidade a ser removida:<br>
    <input type="text"  name="qntdRemover" size="5"><br>  
    <br><input class="inputzin" type="submit" name="btRemover" value="Remover">
    </form>
</center>
</html>




