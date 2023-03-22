<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Informações dos Registros</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<?php

$servername = "localhost";
$username = "id20489658_victor";
$password = "DHE2&k=}vchesK8d";
$db = "id20489658_escola";

$conn = new mysqli ($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Conexâo com DB Falhou: " . $conn->connect_error);
}

$sql = "SELECT Nome, Sobrenome, Telefone FROM alunos";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($linha = $resultado->fetch_assoc()) {
        echo $linha["Nome"] . " " . $linha["Sobrenome"] . " - " . $linha["Telefone"] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

$conn->close();
?>

<script src="script.js"></script>
</body>
</html>