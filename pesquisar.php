<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php 

include "conexao.php";

$pesquisa = $_POST['pesquisa'];

$sql = "SELECT * FROM CLIENTES "
        ."WHERE nome LIKE '%$pesquisa' ";

$query = $db->query($sql);

$rows = $query->fetchAll();

if($rows) {
    echo "<table class='table'><thead><tr><th>Código</th><th>Nome</th><th>Idade</th></tr></thead>";
    foreach($rows as $row) {
        echo "<tr>"."<td>".$row['codigo']."</td>"."<td>".$row['nome']."</td>"."<td>".$row['idade']."</td>"."</tr>";
    }
    echo "</table>";
}
else {
    echo "Não existem registros";
}
?>
<a href="index.html">Voltar</a>
</body>
</html>
