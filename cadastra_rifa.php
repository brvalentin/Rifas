<?php
include("conecta.php");

$numero_rifa = $_POST['numero_rifa'];
$nome_comprador = $_POST['nome_comprador'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

$sql = "INSERT INTO rifas (numero_rifa, nome_comprador, telefone, endereco) VALUES ('$numero_rifa', '$nome_comprador', '$telefone', '$endereco')";
if (mysqli_query($conn, $sql)) {
    echo "Informações cadastradas com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<br>
<a href="index.html">Voltar à página inicial</a>
