<?php
include "conecta_mysql.inc";
$produto = $_POST["produto"];
$valor = $_POST["valor"];
$quantidade = $_POST["quantidade"];

$sql = "INSERT INTO estoque (produto, valor, quantidade) VALUES ('$produto','$valor','$quantidade')";
var_dump($sql);


 $insert = mysqli_query($sql);
 if ($insert)
 {
  echo "Produto inserido com sucesso!";
 }
 else
 {
  echo "Erro durante a inserção do produto. Verifique os dados!" . mysqli_error();
 }

?>

<a href="index.php">Voltar</a>