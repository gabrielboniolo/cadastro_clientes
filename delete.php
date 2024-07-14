<?php 

include "conexao.php";

$deletar = $_POST['deletar'];

$sql = "DELETE FROM CLIENTES "
        ."WHERE codigo = '$deletar' ";

$row = $db->query($sql);

if($row) {
    echo "<h1>Cliente excluido com sucesso</h1>";
    echo "<br> <a href='delete.html'>Deletar outro cliente</a> <br> <a href='index.html'>Voltar para a página inicial</a>";
}
else {
    echo "<h1>Cliente não foi excluido</h1>";
    echo "<br> <a href='delete.html'>Tentar novamente</a> <br> <a href='index.html'>Voltar para a página inicial</a>";
}
