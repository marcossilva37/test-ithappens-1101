<?php
$operacao = $_POST["operacao"];
include"conecta_mysql.inc";
if ($operacao=="incluir");
{
    $produto = $_POST["produto"];
    $valor = $_POST["valor"];
    $quantidade = $_POST["quantidade"];
    $sql ="INSERT INTO produto VALUES";
    $sql.="('$produto','$valor'', '$quantidade')";
    $resultado =mysqli_query($sql);

}
if($operacao=="excluir")
{
    $codigo =$_POST['codigo'];
    $sql = "DELETE FROM estoque where idproduto";
    $resultado = mysqli_query($sql);
    $linhas = mysqli_affected_rows();
    if($linhas==1)
    {echo"Produto xcluido com sucesso";}
    else{echo "Produto não encontrado";}
    if ($operacao=="mostrar")
{
    $resultado =mysqli_query("SELECT *FROM estoque");
    $linhas = mysqli_numrows ($resultado);
    echo "Lista de Produtos";
    for($i=0; $i<$linhas ; $i++)
    {
        $reg = mysql_fecth_row($resultado);
        echo "$reg[0] <br> $reg[1] <br> $reg[3] <br>";
        echo "$reg[4] <br> $reg[5] <br> $reg[6] <br>";
    }
}
}
mysqli_close($conexao);