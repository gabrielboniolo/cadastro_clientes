<?php 

include 'conexao.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$codigo = $_POST['codigo'];

$sql = "INSERT INTO "
            ."CLIENTES (nome, idade, codigo) "
        ."VALUES "
            ."('$nome', '$idade', '$codigo') ";

if($db->query($sql)) {
    echo "<h1>Cadastro realizado com sucesso!</h1>";
    echo "<br> <a href='cadastrar.html'>Cadastrar outro cliente</a> <br> <a href='index.html'>Voltar para a página inicial</a>";
}

else {
    echo "Nao foi";
    echo "<br> <a href='cadastrar.html'>Tentar novamente</a> <br> <a href='index.html'>Voltar para a página inicial</a>";
}