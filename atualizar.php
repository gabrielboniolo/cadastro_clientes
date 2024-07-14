<?php 

include 'conexao.php';

$codigo = $_POST['codigo'];
$aNome = $_POST['aNome'];
$aIdade = $_POST['aIdade'];


$sql = "UPDATE "
            ."CLIENTES "
        ."SET "
            ."nome = '$aNome', idade = $aIdade "
        ."WHERE "
            ."codigo = $codigo ";

if($db->query($sql)) {
    echo "<h1>Atualização realizada com sucesso!</h1>";
    echo "<br><a href='select.php'>Ver lista de clientes</a> <br> <a href='atualizar.html'>Atualizar outro cliente</a> <br> <a href='index.html'>Voltar para a página inicial</a>";
}

else {
    echo "Nao foi";
    echo "<br> <a href='atualizar.html'>Tentar novamente</a> <br> <a href='index.html'>Voltar para a página inicial</a>";
}