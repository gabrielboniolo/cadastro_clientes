<?php 

try {
    $db = new PDO('sqlsrv:Server=localhost\SQLEXPRESS;Database=EST_CS_ANDREIA;Authentication=ActiveDirectoryIntegrated;Encrypt=true;TrustServerCertificate=true', '', '');
}

catch(PDOException $e) {
    echo "Ocorreu um erro:<br>$e";
}

