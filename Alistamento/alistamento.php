<?php
#INICIA A CONEXÃO COM O BANCO DE DADOS
include("conectadb2.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];

    if ($sexo == "masculino" && $idade >= 18) {
        // Insira os dados no banco de dados
        $sql = "INSERT INTO usuarios (usu_nome, usu_idade, usu_sexo) VALUES ('$nome', '$idade', '$sexo')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro inserido com sucesso.";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Desculpe, apenas homens com 18 anos ou mais são obrigados a se alistar.";
    }

  
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alistamento Militar</title>
    <link rel="stylesheet" href="alistamento.css">
</head>
<body>

<h2>Alistamento Militar Obrigatório</h2>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="number" name="idade"><br>
    Sexo: 
    <input type="radio" name="sexo" value="masculino"> Masculino
    <input type="radio" name="sexo" value="feminino"> Feminino<br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
