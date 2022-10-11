<html>
<title>Pessoas Cadastradas</title>

    <?php

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    
    $file = fopen ('cad_001.dat', 'a+'); 
    fwrite ($file,'<br>'.'<br>'.'Nome: '.$nome . '/');
    fwrite ($file, 'Endereço: '.$endereco. '/');
    fwrite ($file, 'Bairro: '.$bairro . '/');
    fwrite ($file, 'Cidade: '.$cidade.'/');
    fwrite ($file, 'Estado: '.$estado. '/');
    fwrite ($file, 'CEP: '.$cep.'/');
    fclose ($file);

    $nomearquivo = 'cad_001.dat';
    $file = fopen ($nomearquivo, 'r');
    $buffer = fread($file, filesize($nomearquivo));
    fclose($file);

    echo ($buffer.'<br>');

    $nomeArquivo = fopen ('cad_001.dat', 'r');
    $result = array();

    while(!feof($nomeArquivo)){
        $result[] = explode("/", fgets($nomeArquivo));
    }
    fclose($nomeArquivo);
    print_r($nomeArquivo);

    ?>

</html>