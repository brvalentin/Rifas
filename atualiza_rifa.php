<?php
include("conecta.php");

$id = $_POST['id'];
$numero_rifa = $_POST['numero_rifa'];
$nome_comprador = $_POST['nome_comprador'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

$sql = "UPDATE rifas SET numero_rifa='$numero_rifa', nome_comprador='$nome_comprador', telefone='$telefone', endereco='$endereco' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Rifa atualizada com sucesso!";
} else {
    echo "Erro ao atualizar rifa: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<br>
<a href="visualiza_rifa.php">Voltar</a>
