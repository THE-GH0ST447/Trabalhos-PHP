<?php
#conecta com o servidor (xampp)
$servidor = "127.0.0.1";
#nome do banco
$banco = "alistamento";
#nome do usuario
$usuario = "root";
#senha do usuario
$senha = "";
#link de concexao com o banco
$conn = new mysqli($servidor,$usuario,$senha,$banco);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
