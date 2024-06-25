<?php
include("conecta.php");

$id = $_GET['id'];

$sql = "DELETE FROM rifas WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Rifa deletada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<br>
<a href="visualiza_rifa.php">Voltar</a>
